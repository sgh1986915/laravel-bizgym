<?php

use Symfony\Component\HttpFoundation\Session\Session as SessionInterface;
use OAuth\ServiceFactory as SocialServiceFactory;
use OAuth\Common\Service\ServiceInterface as SocialService;
use OAuth\Common\Http\Uri\UriFactory as SocialUriFactory;
use OAuth\Common\Http\Uri\Uri as SocialUri;
use OAuth\Common\Storage\SymfonySession as SocialSession;
use OAuth\Common\Consumer\Credentials as SocialCredentials;

class Social
{
    /**
     * @var OAuth\Common\Service\ServiceInterface
     */
    protected $service;

    /**
     * @var OAuth\Common\Http\Uri\Uri
     */
    protected $uri;

    /**
     * @var OAuth\Common\Storage\SymfonySession
     */
    protected $session;

    /**
     * @var OAuth\Common\Consumer\Credentials
     */
    protected $credentials;

    /**
     * Constructor
     */
    public function __construct(SocialService $service, SocialUri $currentUri, SocialSession $storage, SocialCredentials $credentials)
    {
        $this->service = $service;
        $this->uri = $currentUri;
        $this->session = $storage;
        $this->credentials = $credentials;
    }

    /**
     * Facebook connect
     */
    public function connectFacebook()
    {
        if (!empty($_GET['code'])) {
            // This was a callback request from facebook, get the token
            $token = $this->service->requestAccessToken($_GET['code']);

            // Send a request with it
            $result = json_decode($this->service->request('/me'), true);

            // Show some of the resultant data
            return $result;
        } else {
            $url = $this->service->getAuthorizationUri();
            header('Location: ' . $url);
        }
    }

    /**
     * Twitter connect
     */
    public function connectTwitter()
    {
        if (!empty($_GET['oauth_token'])) {
            $token = $this->session->retrieveAccessToken('Twitter');

            // This was a callback request from twitter, get the token
            $this->service->requestAccessToken(
                $_GET['oauth_token'],
                $_GET['oauth_verifier'],
                $token->getRequestTokenSecret()
            );

            // Send a request now that we have access token
            $result = json_decode($this->service->request('account/verify_credentials.json'),true);

            return $result;

        } elseif(isset($_GET['denied'])) {
            $denied = $_GET['denied'];
            return compact('denied');
        } else {
            // extra request needed for oauth1 to request a request token :-)
            $token = $this->service->requestRequestToken();
            $url = $this->service->getAuthorizationUri(array('oauth_token' => $token->getRequestToken()));

            header('Location: ' . $url);
        } 
    }

    /**
     * Main factory
     *
     * @param string type
     * @param SessionInterface
     * @param array Scope
     * @return Social
     */
    public static function factory($provider = 'facebook', SessionInterface $store, $scopes = array())
    {
        // Create a new instance of the URI class with the current URI, 
        // stripping the query string
        $uriFactory = new SocialUriFactory();
        $currentUri = $uriFactory->createFromSuperGlobalArray($_SERVER);
        $currentUri->setQuery('');

        $servicesCredentials = Config::get('auth.social');
        $serviceFactory = new SocialServiceFactory();


        // Session storage
        $storage = new SocialSession($store, false, Config::get('session.cookie'));

        // Setup the credentials for the requests
        $credentials = new SocialCredentials(
            $servicesCredentials[$provider]['key'],
            $servicesCredentials[$provider]['secret'],
            $currentUri->getAbsoluteUri()
        );

        $selectedService = $serviceFactory->createService($provider, $credentials, $storage, $scopes);

        return new static($selectedService, $currentUri, $storage, $credentials);
    }
}


