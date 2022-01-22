<?php

//$data = new stdClass(); $url = 'http://192.168.33.11/ammonite/index.php?option=com_toms_slave&task=api.api'; $data->api_username = 'CRM'; $data->command = 'search_person'; $data->limit = 100; $data_json = json_encode($data); $signature = hash_hmac('sha256', $data_json, 'afc9272eea51136653de909b90fe72e486c5e53e3311bb314e4dd7d9df3e13b4'); $data->signature = $signature; $data_json = json_encode($data); $bodyData = array (     'data'      => $data_json, ); $bodyStr = http_build_query($bodyData); $ch = curl_init(); curl_setopt($ch, CURLOPT_URL, $url); curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); curl_setopt($ch, CURLOPT_HTTPHEADER, array(     'Content-Type: application/x-www-form-urlencoded',     'Content-Length: '.strlen($bodyStr) )); curl_setopt($ch, CURLOPT_POST, 1); curl_setopt($ch, CURLOPT_POSTFIELDS, $bodyStr); $results = json_decode(curl_exec($ch)); var_dump($results); 

		//print_r($results);

		$data = new stdClass(); 
		$url = "http://192.168.33.11/ammonite/index.php?option=com_toms_slave&task=api.api";
		 $data->api_username = "CRM";
		  $data->command = "search_person";
		   $data->limit = 100;
		    $data_json = json_encode($data);
		     $signature = hash_hmac('sha256', $data_json, "afc9272eea51136653de909b90fe72e486c5e53e3311bb314e4dd7d9df3e13b4dd");
		      $data->signature = $signature;
		       $data_json = json_encode($data);
		        $bodyData = array (     'data'      => $data_json, ); 
		        $bodyStr = http_build_query($bodyData); 
		        $ch = curl_init(); 
		        curl_setopt($ch, CURLOPT_URL, $url); 
		        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		        curl_setopt($ch, CURLOPT_HTTPHEADER, array(     'Content-Type: application/x-www-form-urlencoded',     'Content-Length: '.strlen($bodyStr) )); 
		        curl_setopt($ch, CURLOPT_POST, 1); 
		        curl_setopt($ch, CURLOPT_POSTFIELDS, $bodyStr); 
		        $results = json_decode(curl_exec($ch)); 
		        var_dump($results); 

?>