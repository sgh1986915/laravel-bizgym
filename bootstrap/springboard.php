<?php

use Illuminate\Filesystem\Filesystem;
use Illuminate\Foundation\Application as LaravelApplication;
use Illuminate\Foundation\ProviderRepository as LaravelProviderRepository;
use Illuminate\Support\ServiceProvider;

class Springboard extends LaravelApplication
{
	/**
	 * Get the service provider repository instance.
	 *
	 * @return \Illuminate\Foundation\ProviderRepository
	 */
	public function getProviderRepository()
	{
		$manifest = $this['config']['app.manifest'];

		return new SpringboardProviderRepository(new Filesystem, $manifest);
	}

	/**
	 * Register a service provider with the application.
	 *
	 * @param  \Illuminate\Support\ServiceProvider|string  $provider
	 * @param  array  $options
	 * @return void
	 */
	public function register($provider, $options = array())
	{
		// If the given "provider" is a string, we will resolve it, passing in the
		// application instance automatically for the developer. This is simply
		// a more convenient way of specifying your service provider classes.
		if (is_string($provider))
		{
			$provider = $this->resolveProviderClass($provider);
		}

		// Only register when it was a valid service
		if ($provider instanceof ServiceProvider) {
			$provider->register();

			// Once we have registered the service we will iterate through the options
			// and set each of them on the application so they will be available on
			// the actual loading of the service objects and for developer usage.
			foreach ($options as $key => $value)
			{
				$this[$key] = $value;
			}

			$this->serviceProviders[] = $provider;

			$this->loadedProviders[get_class($provider)] = true;
		}
	}
}

class SpringboardProviderRepository extends LaravelProviderRepository
{
	/**
	 * Create a new provider instance.
	 *
	 * @param  \Illuminate\Foundation\Application  $app
	 * @param  string  $provider
	 * @return \Illuminate\Support\ServiceProvider
	 */
	public function createProvider(LaravelApplication $app, $provider)
	{
		if (class_exists($provider)) {
			return new $provider($app);
		}
	}

	/**
	 * Compile the application manifest file.
	 *
	 * @param  \Illuminate\Foundation\Application  $app
	 * @param  array  $providers
	 * @return array
	 */
	protected function compileManifest(LaravelApplication $app, $providers)
	{
		$validProviders = array();

		// The service manifest should contain a list of all of the providers for
		// the application so we can compare it on each request to the service
		// and determine if the manifest should be recompiled or is current.
		$manifest = $this->freshManifest($providers);

		foreach ($providers as $provider)
		{
			if (class_exists($provider)) {
				$instance = $this->createProvider($app, $provider);

				// When recompiling the service manifest, we will spin through each of the
				// providers and check if it's a deferred provider or not. If so we'll
				// add it's provided services to the manifest and note the provider.
				if ($instance->isDeferred())
				{
					foreach ($instance->provides() as $service)
					{
						$manifest['deferred'][$service] = $provider;
					}
				}

				// If the service providers are not deferred, we will simply add it to an
				// of eagerly loaded providers that will be registered with the app on
				// each request to the applications instead of being lazy loaded in.
				else
				{
					$manifest['eager'][] = $provider;
				}

				// Put valid provider into stack
				$validProviders[] = $provider;
			} 
		}

		$manifest['providers'] = $validProviders;

		return $this->writeManifest($manifest);
	}
}