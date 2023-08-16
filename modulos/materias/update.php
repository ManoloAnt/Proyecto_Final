<?php
session_start();
include_once("../../config/DBConect.php");
include_once("../../config/Config.php");

if (isset($_POST['nombre']))
    $nombre = $_POST['nombre'];
if (isset($_POST['docente']))
    $docente = $_POST['docente'];
if (isset($_POST['numero_horas']))
    $numero_horas = $_POST['numero_horas'];
if (isset($_POST['creditos']))
    $creditos = $_POST['creditos'];
if (isset($_POST['id']))
    $id = $_POST['id'];

$conexion = new Database;
$result = $conexion->updateMateria($nombre, $docente, $numero_horas, $creditos, $id);

header("Location: " . ROOT . "modulos/materias/materias.php?mensaje=" . $result);


?>