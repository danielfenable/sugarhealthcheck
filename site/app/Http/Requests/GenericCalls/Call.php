<?php

namespace App\Http\Requests\GenericCalls;

Class call{

	function get($uri,$system = NULL){

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
}

?>