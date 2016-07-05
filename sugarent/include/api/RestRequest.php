<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

/**
 * REST request representation
 * @api
 */
class RestRequest
{
    /**
     * The request headers
     * @var array
     */
    public $request_headers = array();

    /**
     * REST platform
     * @var string
     */
    public $platform = 'base';
    /**
     * Server variables
     * @var array
     */
    public $server;
    /**
     * Request variables
     * @var array
     */
    public $request;
    /**
     * Raw path string
     * @var string
     */
    public $rawPath;
    /**
     * API version
     * @var string
     */
    public $version;
    /**
     * Parsed path components
     * @var array
     */
    public $path;
    /**
     * Request method
     * @var string
     */
    public $method;
    /**
     * REST route chosen by the controller
     * @var array
     */
    public $route;
    /**
     * Arguments for REST method call
     * @var array
     */
    public $args;

    /**
     * The leading portion of the URI for building request URIs with in the API
     * @var string
     */
    protected $resourceURIBase;

    protected $postContents = null;

    /**
     * Get the route
     * @return array
     */
    public function getRoute()
    {
    	return $this->route;
    }

    /**
     * Get the args
     * @return array
     */
    public function getArgs()
    {
    	return $this->args;
    }

    /**
     * Get platform
     * @return string
     */
    public function getPlatform()
    {
    	return $this->platform;
    }

    /**
     * Get API version
     * @return string
     */
    public function getVersion()
    {
    	return $this->version;
    }

    /**
     * Get path components
     * @return array
     */
    public function getPath()
    {
    	return $this->path;
    }

    /**
     * Get HTTP method
     * @return string
     */
    public function getMethod()
    {
    	return $this->method;
    }

    /**
     * Get POST contents
     * @return string
     */
    public function getPostContents()
    {
        if(is_null($this->postContents)) {
            if (!empty($GLOBALS['HTTP_RAW_POST_DATA'])) {
                $this->postContents = $GLOBALS['HTTP_RAW_POST_DATA'];
            } else {
                $this->postContents = file_get_contents('php://input');
            }
        }
        return $this->postContents;
    }

    /**
     * Set the route
     * @param array $route
     * @return RestRequest
     */
    public function setRoute($route)
    {
    	$this->route = $route;
    	return $this;
    }

    /**
     * Set the args
     * @param array $args
     * @return RestRequest
     */
    public function setArgs($args)
    {
    	$this->args = $args;
    	return $this;
    }

    /**
     * Set API version
     * @param string $version
     * @return RestRequest
     */
    public function setVersion($version)
    {
    	$this->version = $version;
    	return $this;
    }

    /**
     * Set HTTP method
     * @param string $method
     * @return RestRequest
     */
    public function setMethod($method)
    {
    	$this->method = $method;
    	return $this;
    }

    /**
     * Create request
     * @param array $server Server environment ($_SERVER)
     * @param array $request Request array ($_REQUEST)
     */
    public function __construct($server, $request)
    {
        $this->server = $server;
        $this->request = $request;
        $this->getRequestHeaders();
        $this->rawPath = $this->getRawPath();
        $this->parsePath($this->rawPath);
        $this->method = isset($server['REQUEST_METHOD'])?$server['REQUEST_METHOD']:'GET';
        $this->setResourceURIBase();
    }

    /**
     * Gets the raw path of the request
     *
     * @return string
     */
    public function getRawPath() {
        if ( !empty($this->request['__sugar_url']) ) {
            $rawPath = $this->request['__sugar_url'];
        } else if ( !empty($this->server['PATH_INFO']) ) {
            $rawPath = $this->server['PATH_INFO'];
        } else {
            $rawPath = '/';
        }

        return $rawPath;
    }

    /**
     * Set the Request headers in an array
     * @return array
     */
    public function getRequestHeaders() {
        $headers = array();
        foreach($this->server as $key => $value) {
            if (substr($key, 0, 5) <> 'HTTP_') {
                continue;
            }
            $header = str_replace('HTTP_', '', $key);
            $headers[$header] = $value;
        }
        $this->request_headers = $headers;
        return $headers;
    }

    /**
     * Parses the request uri or request path as well as fetching the API request
     * version
     *
     * @param string $rawPath
     * @return array
     */
    public function parsePath($rawPath)
    {
        $pathBits = explode('/',trim($rawPath,'/'));

        $versionBit = array_shift($pathBits);

        $version = (float)ltrim($versionBit,'v');

        $this->version = $version;
        $this->path = $pathBits;
        return $this;
    }

    /**
     * Set platform
     * @param string $platform
     * @return RestRequest
     */
    public function setPlatform($platform)
    {
        $this->platform = $platform;
        return $this;
    }

    /**
     * Maps the route path with the request path to set variables from the request
     *
     * @param array $path The request path
     * @param array $route The route for this request
     * @return array
     */
    public function getPathVars($route)
    {
    	$outputVars = array();
    	if(empty($route['pathVars'])) {
    	    return $outputVars;
    	}
    	foreach ( $route['pathVars'] as $i => $varName ) {
    		if ( !empty($varName)  && !empty($this->path[$i])) {
    			$outputVars[$varName] = $this->path[$i];
    		}
    	}

    	return $outputVars;
    }

    /**
     * Get query vars
     * @return array
     */
    public function getQueryVars()
    {
        $vars = array();
        if(!empty($this->server['QUERY_STRING'])) {
            parse_str($this->server['QUERY_STRING'], $vars);
        }
        return $vars;
    }

    /**
     * Sets the leading portion of any request URI for this API instance
     *
     */
    protected function setResourceURIBase()
    {
        // Only do this if it hasn't been done already
        if (empty($this->resourceURIBase)) {
            // Default the base part of the request URI
            $apiBase = '/api/rest.php/';

            // Check rewritten URLs AND request uri vs script name
            if (isset($this->request['__sugar_url']) &&
                (empty($this->server['REQUEST_URI']) || empty($this->server['SCRIPT_NAME']) || strpos($this->server['REQUEST_URI'], $this->server['SCRIPT_NAME']) === false)) {
                // This is a forwarded rewritten URL
                $apiBase = '/rest/';
            }

            // Get our version
            $apiBase .= "v".$this->version;

            // This is for our URI return value
            $siteUrl = SugarConfig::getInstance()->get('site_url');

            // Get the file uri bas
            $this->resourceURIBase = $siteUrl . $apiBase .'/';
        }
    }

    /**
     * Get base URI for resources
     * @return string
     */
    public function getResourceURIBase()
    {
        return $this->resourceURIBase;
    }

    /**
     * Get request URI for current request
     * @return string
     */
    public function getRequestURI()
    {
        if(empty($this->server['REQUEST_URI'])) return '';
        return $this->server['REQUEST_URI'];
    }

    /**
     * Gets a header value from the request
     *
     * @param string $header The header to get the value of
     * @return string|null The string value of the header or null if not set
     */
    public function getHeader($header)
    {
        if ($this->hasHeader($header)) {
            return $this->request_headers[$header];
        }

        return null;
    }

    /**
     * Checks to see if a header is set in the request
     *
     * @param string $header The header to check existence of
     * @return boolean
     */
    public function hasHeader($header)
    {
        return isset($this->request_headers[$header]);
    }
}
