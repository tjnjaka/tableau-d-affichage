<?php
	
	$con = mysqli_connect("localhost","root","","api_gps") or die(mysqli_error('$con'));
	$json=file_get_contents('php://input');
	$obj=json_decode($json);

	$string=mysqli_real_escape_string($obj);
    
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    
$data =$_GET['message'];
list($NAME, $IMEI, $EVENT, $LAT,$LNG,$SPEED,$ANGLE,$DT_SER,$PL_NUM,$DRIVER)= explode(",", $data);

// recuperationtype event
$type_event=substr("$EVENT",0,2);
var_dump($type_event);
// recuperation de la vitesse
$vitesse= substr("$SPEED",0,-5);
//conversion en int

$speedint= $vitesse +0;
var_dump($speedint);

$rqt_check="INSERT INTO events (id_event,lib_tracker,imei_tracker,lib_event,lat,lon,speed,angle,date_serveur,immat,driver ) 
VALUES (NULL,'$NAME','$IMEI','$EVENT','$LAT','$LNG','$SPEED','$ANGLE','$DT_SER','$PL_NUM','$DRIVER')";

    if ($speedint<5 and $type_event='DE'){
        
        echo "Have a good night!";
        //$query_check=mysqli_query($con,$rqt_check) OR die(mysqli_error($con));
    }
    elseif($speedint<5 and $type_event='PA'){ echo "Have a good night!";} 
    
    else {$query_check=mysqli_query($con,$rqt_check) OR die(mysqli_error($con));;}

//$lib_event=$EVENT;







?>
