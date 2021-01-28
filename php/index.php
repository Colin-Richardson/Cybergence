<?php

//curls info from url
function curlget($url){ 
	$curl = curl_init();

	curl_setopt_array($curl, array(
	  CURLOPT_URL => $url,
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_TIMEOUT => 2,
	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  CURLOPT_CUSTOMREQUEST => "GET",
	  CURLOPT_HTTPHEADER => array(
	    "cache-control: no-cache"
	  ),
	));

	$response = curl_exec($curl);
	$err = curl_error($curl);
	curl_close($curl);
	if ($err != ""){
		echo "Curl error in curlget: " . $err; // no clue if this works, no idea how to force an error :D
		return $err;
	} else {
		return $response;
	}
}

// uses curlget to grab btc price
function btcprice(){ 
	//https://api.coindesk.com/v1/bpi/currentprice/usd.json
	//^ btc price data api
	$btc = json_decode(curlget("https://api.coindesk.com/v1/bpi/currentprice/usd.json"), true);
	return $btc["bpi"]["USD"]["rate_float"];
	//record price in file incase of timeout/error
}

//returns product's prince in btc
function p2btc($p,$btc){ 
	return $p/$btc;
}

?>

