<?php
session_start();
include_once("../../config/DBConect.php");
include_once("../../config/Config.php");

if (isset($_POST['identificacion']))
    $identificacion = $_POST['identificacion'];
if (isset($_POST['nombres']))
    $nombres = $_POST['nombres'];
if (isset($_POST['apellidos']))
    $apellidos = $_POST['apellidos'];
if (isset($_POST['email']))
    $email = $_POST['email'];
if (isset($_POST['telefono']))
    $telefono = $_POST['telefono'];
if (isset($_POST['tipo_de_sangre']))
    $tipoSangre = $_POST['tipo_de_sangre'];
if (isset($_POST['altura']))
    $altura = $_POST['altura'];
if (isset($_POST['genero']))
    $genero = $_POST['genero'];

$conexion = new Database;
$result = $conexion->CrearEstudiante($nombres, $apellidos, $email, $telefono, $identificacion, $tipoSangre, $altura, $genero);

header("Location: " . ROOT . "modulos/estudiantes/estudiantes.php?mensaje=" . $result);

?>