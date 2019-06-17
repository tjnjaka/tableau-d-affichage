<?php //API URL
$url = 'http://cotisse02.xibomad.france-hebergement-internet.com/api.php';
//$url = 'http://apiseb.atspace.cc/api.php';
//create a new cURL resource
$ch = curl_init($url);

//setup request to send json via POST
$data = array(
    'username' => 'codexworld',
    'password' => '123456',
    'date' => date('Y-m-d H:i:s')
);
$payload = json_encode(array("user" => $data));

//attach encoded JSON string to the POST fields
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

//set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

//return response instead of outputting
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//execute the POST request
$result = curl_exec($ch);

//close cURL resource
curl_close($ch);
?>