<?php

namespace Delino\Applock;

class Applock
{
    /*
    |-----------------------------------------
    | CONFIRM SOFTWARE LIENCE
    |-----------------------------------------
    */
    public function verifySoftware($request, $next){
    	// body
    	$software_key  = env("SOFTWARE_KEY");
    	$software_host = env("SOFTWARE_HOST", "http://localhost:8402/api/verify/software");
    	if(empty($software_key)){
    		return view('applock::invalid');
    	}else{
	    	$query = array(
	    		"software_key" => $software_key
	    	);

	    	try {
	    		$ch = curl_init();
		    	curl_setopt($ch, CURLOPT_URL, $software_host);
		    	curl_setopt($ch, CURLOPT_POST, true);
		    	curl_setopt($ch, CURLOPT_POSTFIELDS, $query);
		    	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		    	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 200);
		    	$res 	= curl_exec($ch);
		    	$data 	= json_decode($res, true);

		    	if($data["status"] == true){
		    		return $next($request);
		    	}elseif($data["status"] == false){
		    		return redirect('/expired');
		    	}else{
		    		return redirect('/invalid');
		    	}

		    	// close curl process 
		    	curl_close($ch);	
	    	} catch (Exception $e) {
	    		echo 'Message: ' .$e->getMessage();
	    	}
    	}
    }
}
