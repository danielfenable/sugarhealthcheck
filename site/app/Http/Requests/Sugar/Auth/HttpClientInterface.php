<?php

namespace App\Http\Requests\Sugar\Auth;

/**
 * A Simple interface for interacting with an Http client
 *
 * @author Stuart Fyfe <stuart@enableit.org.uk>
 */
interface HttpClientInterface
{
    public function get($uri, array $params);
    public function post($uri, array $params);
    public function put($uri, array $params);
    public function delete($uri, array $params);
}
