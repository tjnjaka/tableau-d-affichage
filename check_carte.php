
//$api_server_keys="46639CB4E7963EDFCBCC002425BF8548";
//$user=$_POST['user'];
$apikey="5CBF35712D9E13F43B89416A93B623C9";
//$cmd=$_POST['cmd'];



<?php // required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

 //$data=parse_str(file_get_contents("php://input"), $_POST);

$url="https://gsh4.net/id29/api/api.php?api=user&ver=1.0&key=5CBF35712D9E13F43B89416A93B623C9&cmd=OBJECT_GET_LOCATIONS,*";

    $data =file_get_contents("php://input");
    //$data= $_POST;
   // $data= file_get_contents("php://input");
    var_dump($data);
    //$obj=json_encode($data);
//$contenu_json= "CONTENT_TYPE: " . $_SERVER['CONTENT_TYPE'];
	$contenu_json= $data;
	// Nom du fichier à créer
$nom_du_fichier = 'capsule2.json';


// Ouverture du fichier
$fichier = fopen($nom_du_fichier, 'w+');

// Ecriture dans le fichier
fwrite($fichier, $contenu_json);

// Fermeture du fichier
fclose($fichier);








?>