<?php


namespace App\Http\Requests\Sugar\Auth;
use Log;

/**
 * A cURL wrapper to interact with the Sugar7 REST API
 *
 * @author Stuart Fyfe <stuart@enableit.org.uk>
 */
class Client implements HttpClientInterface
{
    const VERSION   = 'v10';
    const BASEPATH  = '/rest/';
    const TOKENID   = 'Sugar7Token';

    private $username;
    private $password;
    private $token;
    private $lastCurl;

    protected $baseUrl;
    protected $platform;

    /**
     * Inject our dependencies and config parameters
     *
     * @param string  $sugar_url Sugar instace url
     * @param string  $username  Sugar username
     * @param string  $password  Sugar Password
     * @param string  $platform  The Client string i.e. sugar/base
     */
    public function __construct(
        $sugar_url,
        $username,
        $password,
        $platform = 'base',
        $client_id = 'sugar'
    ) {
        $this->baseUrl   = $sugar_url . self::BASEPATH . self::VERSION;
        $this->username = $username;
        $this->password = $password;
        $this->platform  = $platform;
        $this->client_id  = $client_id;
    }

    /**
     * Send request for oAuth Token and store it
     * for the session
     *
     * @param boolean $force If set to true, it forces a refresh
     * from the API even if set in session
     *
     * @return string oAuth Token
     */
    //protected
    function getToken($force = false)
    {
        $params = array(
            "grant_type" => "password",
            "client_id" => $this->client_id,
            "username" => $this->username,
            "password" => $this->password,
            "platform" => $this->platform,
        );

        $response = $this->post('/oauth2/token', $params);

        if(isset($response['access_token'])){

           $this->token = $response['access_token']; 
           return $this->token;  
       }
       else{
            return $response['error'];
       }

    }

    /**
     * Public shorthand method for GET requests
     *
     * @param URI   $uri    e.g. Contacts
     * @param array $params Optional paramaters
     *
     * @return array Result from Sugar
     */
    public function get($uri, array $params = array())
    {
        $result = $this->request($uri, 'GET', $params);


        return $result;
    }

    /**
     * Public shorthand method for POST requests
     *
     * @param URI   $uri    e.g. Contacts
     * @param array $params Optional paramaters
     *
     * @return array Result from Sugar
     */
    public function post($uri, array $params = array())
    {
        $result = $this->request($uri, 'POST', $params);


        return $result;
    }

    /**
     * Public shorthand method for PUT requests
     *
     * @param URI   $uri    e.g. Contacts
     * @param array $params Optional paramaters
     *
     * @return array Result from Sugar
     */
    public function put($uri, array $params = array())
    {
        $result = $this->request($uri, 'PUT', $params);


        return $result;
    }

    /**
     * Public shorthand method for DELETE requests
     *
     * @param URI   $uri    e.g. Contacts
     * @param array $params Optional paramaters
     *
     * @return array Result from Sugar
     */
    public function delete($uri, array $params = array())
    {
        $result = $this->request($uri, 'DELETE', $params);


        return $result;
    }

    public function getLastResponseCode()
    {
        return curl_getinfo($this->lastCurl, CURLINFO_HTTP_CODE);
    }

    /**
     * Make a call to the REST API
     *
     * @param string $uri    Uri to call
     * @param string $method The request method (GET, POST, PUT, DELETE)
     * @param array  $params POST/GET params
     *
     * @return Object result object
     */
    protected function request($uri, $method, array $params = array())
    {
        $curl    = curl_init();
        $options = $this->generateOptions($uri, $method, $params);
        Log::info($options);
        if (!curl_setopt_array($curl, $options)) {
            throw new \InvalidArgumentException(sprintf('Invalid Curl option %s', current($options)));
        }

        $response = curl_exec($curl);
        if (!$response) {
            throw new \RuntimeException("Sugar7 Client: Connection Failure");
        }
        $this->lastCurl = $curl;


        $result = json_decode($response, true);
        curl_close($curl);

        return $result;
    }

    /**
     * Generates the curl options for the request
     *
     * @param string $uri    e.g. Contacts
     * @param string $method GET|POST|PUT|DELETE
     * @param array  $params Array of optional params
     *
     * @return array
     */
    protected function generateOptions($uri, $method, $params)
    {
        $login = ($uri == '/oauth2/token');

        if (!$this->token && !$login && !in_array('username', array_keys($params))) {
            $this->getToken();
        }

        $headers = array('Content-Type: application/json');
        if (!$login) {
            $headers[] = "OAuth-Token: {$this->token}";
        }

        $options = array();
        $options[CURLOPT_URL] = $this->baseUrl . $uri;
        switch ($method) {
            case 'GET':
                $options[CURLOPT_URL] .= '?' . $this->buildQuery($params);
                break;
            case 'POST':
                $options[CURLOPT_POST] = 1;
                $options[CURLOPT_POSTFIELDS] = json_encode($params);
                break;
            case 'PUT':
                $options[CURLOPT_CUSTOMREQUEST] = 'PUT';
                break;
            case 'DELETE':
                $options[CURLOPT_CUSTOMREQUEST] = 'DELETE';
                break;
        }
        $options[CURLOPT_POST]           = $login;
        $options[CURLOPT_HEADER]         = false;
        $options[CURLOPT_RETURNTRANSFER] = true;
        $options[CURLOPT_HTTPHEADER]     = $headers;
        $options[CURLOPT_SSL_VERIFYPEER] = false;


        return $options;
    }

    protected function buildQuery(array $params)
    {
        return http_build_query($params);
    }
}
