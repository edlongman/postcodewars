<?php
	require_once "include.php";
	function get_all_results($postcode,$type,$lat,$lng,$radius){
	    $c = curl_init();
		$url="https://maps.googleapis.com/maps/api/place/search/json";
		$argstr="?types=".$type."&sensor=false&key=".GOOGLE_API_KEY;
		$argstr.="&location=".$lat.",".$lng."&radius=".$radius;
		logmsg("proximity-lib",$url.$argstr);
        curl_setopt($c, CURLOPT_URL, $url . $argstr);
        curl_setopt($c, CURLOPT_RETURNTRANSFER, TRUE);
        $data = curl_exec($c);
        curl_close($c);
        $d = json_decode($data);
		
        //var_dump($d);
        return $d->results;
	}
?>
