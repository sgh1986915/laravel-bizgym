<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class AssetsPublishCommand extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'assets:publish';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Build and publish assets collections into public/builds directory.';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return void
	 */
	public function fire()
	{
		// Proxy to Bassets builder
		$this->call('basset:build', array('collection' => 'application'));
		$this->call('basset:build', array('collection' => 'application','--production' => true));

		// Clear collection manifest if necessary
		//$manifest = app_path().'/storage/meta/collections.json';

		//if (is_file($manifest)) {
			//@rename($manifest, $manifest.'.bak');
		//}
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return array();
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return array();
	}

}