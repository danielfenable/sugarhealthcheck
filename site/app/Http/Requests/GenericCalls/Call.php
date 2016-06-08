<?php

namespace App\Http\Requests\GenericCalls;

Class call{

	function get($uri, $system = NULL, $ids){

	if( env("API",false) ==  FALSE){
	   return "No API in ENV file";
	}

        $ch = curl_init(); 

        if(isset($system)){
           
           curl_setopt( $ch, CURLOPT_URL, env("API",false) . $uri . "?system=" . $system ); 
         } 
         else{
               curl_setopt( $ch, CURLOPT_URL, env("API",false) . $uri);  
         } 

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

        $output = curl_exec($ch); 


        curl_close($ch); 

        return $output; 

	}

    function post($uri, $system = NULL, $ids){
        
        $curl = curl_init();

        if(isset($system)){
           
           curl_setopt( $curl, CURLOPT_URL, env("API",false) . $uri . "?system=" . $system ); 
         } 
         else{
               curl_setopt( $curl, CURLOPT_URL, env("API",false) . $uri);  
         } 

        curl_setopt($curl,CURLOPT_POST, sizeof($ids));

        curl_setopt($curl,CURLOPT_POSTFIELDS, $ids);
            
        $result = curl_exec($curl);

        curl_close($curl);

        return $result;

    }
}

?>