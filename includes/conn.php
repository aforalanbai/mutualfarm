<?php
session_start();
if(!isset($_SESSION['user']['uid']))
{
    header("location:login.php");
}
date_default_timezone_set("Asia/Kolkata");
$URL   = 'http';
$target_dir             = "../uploads/agents/";
$target_dir_properties =  "../uploads/properties/";
$target_dir_clients =  "../uploads/clients/";
//$target_dir_db          = "localhost/mmparchitecturals/neon/uploads/";
/*if($_SERVER["HTTPS"]== "on"){
$URL .= "s";
}*/
$URL .= "://";
if ($_SERVER["SERVER_PORT"]!= "80"){
    $URL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
}else{
    $URL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
}
$URL  = explode('/', $URL);
$page = array_pop($URL);
$page = explode("?",$page);
$page = $page[0];
$pdo = $db = new PDO('mysql:host=mutualfarm.db.11855374.hostedresource.com;dbname=mutualfarm;charset=utf8', 'mutualfarm', 'Mut#9812', array(PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
// https://sg2nlsmysqladm1.secureserver.net/grid55/37
?>
