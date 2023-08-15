<?php
session_start();
include_once("../../config/DBConect.php");
include_once("../../config/Config.php");

$role = $_SESSION['sess_userrole'];
$usu_identi = $_SESSION['sess_identificacion'];
$usu_email = $_SESSION['sess_username'];
// $conexion = new Database;
// $result = $conexion->ConsultarNotasEstudiante($usu_identi, $usu_email);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instituto 5</title>
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../../css/style.css" rel="stylesheet" type="text/css">
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8 col-xl-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        Mis notas
                        <?= $_SESSION['sess_usernom'] . ' ' . $_SESSION['sess_userapel'] ?>
                    </div>
                    <div class="card-body">
                        <?php
                        $mensajes = array(
                            0 => "No se pudo realizar la acción, comunicate con el administrador",
                            1 => "Se elimino correctamente el estudiante",
                            2 => "Se creo correctamente el estudiante",
                            3 => "Se actualizo correctamente el estudiante",
                            4 => "Se crearon correctamente las notas"
                        );

                        $mensaje_id = isset($_GET['mensaje']) ? (int) $_GET['mensaje'] : 0;
                        $mensaje = '';

                        if ($mensaje_id != '') {
                            $mensaje = $mensajes[$mensaje_id];
                            $clase = 'alert-success';
                        }

                        if ($mensaje != '')
                            echo "<div class='alert $clase' role='alert'> $mensaje </div>";

                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div>

            <script src="../../js/javascript.js"></script>
            <script src="../../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>