<?php

namespace App\Http\Requests\GenericCalls;

Class call{

    function get($uri = null, $system = null)
    {

        if (env("API", false) ==  false) {
                return "No API in ENV file";
        }

        $ch = curl_init();

        if (!isset($uri)) {

                curl_setopt($ch, CURLOPT_URL, env("API", false));
        }

        if (isset($system)) {

                curl_setopt($ch, CURLOPT_URL, env("API", false) . $system . "/" . $uri);
        }

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $output = curl_exec($ch);


        curl_close($ch);

        return $output;

    }

    function post($uri = null, $system = null, $metadata)
    {

        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, env("API", false) . $system . "/" . $uri);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($curl, CURLOPT_POSTFIELDS, $metadata);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
                                                'Content-Type: application/json',
                                                    )
        );

        $result = curl_exec($curl);

        curl_close($curl);

        return $result;

    }
}

?>