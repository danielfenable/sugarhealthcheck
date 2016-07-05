<?php

namespace App\Enable\Server;

use App\Http\Requests\Sugar\Auth\Client;

use App\Http\Requests\GenericCalls\Call;

class CallSystemInfo
{

    protected function endpointCall($system)
    {

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, env("REMOTE_SUGAR_URL", false) . $system . "/service/v4/rest.php?method=get_server_info&response_type=JSON");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        if (!$output) $output = json_encode(
            array(
                  "version" => "could not retrieve data from sugar",
                  "flavor" => "could not retrieve data from sugar"
                  )
        );
        curl_close($ch);
        return $output;
    }

    function version($system)
    {
        $result = $this->endpointCall($system);
        $decoded = json_decode($result);
        return $decoded->version;
    }

    function flavour($system)
    {
        $result = $this->endpointCall($system);
        $decoded = json_decode($result);
        return $decoded->flavor;
    }

    function contractFields($system)
    {

        $call = new Call();
        $unique_key = trim($call->get('uniquekey', $system));
        $url = env("SUGAR_URL", false);
        $username = env("SUGAR_USERNAME", false);
        $password = env("SUGAR_PASSWORD", false);
        $sugar = new Client($url, $username, $password);
        $contract_data = $sugar->get(
            "/Contracts", array(
                "filter" => array(
                    array(
                        '$and' => array(
                            array(
                                "unique_key_c" => $unique_key
                            ),
                            array(
                                "status" => 'inprogress'
                            )
                        ),
                    ),
                ),
                "max_num" => 1,
                "offset" => 0,
            )
        );
        return $contract_data;
    }
}


?>