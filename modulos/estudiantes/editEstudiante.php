<?php
include_once("../../config/DBConect.php");
include_once("../../config/Config.php");

$id = $_GET['id'];

$conexion = new Database;
$result = $conexion->editEstudiante($id);

$estud_id = $estud_identificacion = $estud_nombres = $estud_apellidos = $estud_email = $estud_telefono =$estud_tipoSangre = $estud_altura = $estud_genero = "";
foreach ($result->fetchAll(PDO::FETCH_OBJ) as $r) {
    $estud_id = $r->id;
    $estud_identificacion = $r->identificacion;
    $estud_nombres = $r->nombres;
    $estud_apellidos = $r->apellidos;
    $estud_email = $r->email;
    $estud_telefono = $r->telefono;
    $estud_tipoSangre = $r->identificacion;
    $estud_altura = $r->altura;
    $estud_genero = $r->genero;
}

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
                        Modificar Estudiante
                        <a href="<?= ROOT ?>modulos/estudiantes/estudiantes.php" class="btn btn-primary">Regresar</a>
                    </div>
                    <div class="card-body">
                        <form action="update.php" method="POST" name="forrol">

                            <div class="form-group">
                                <label for="identificacion">Identificacion</label>
                                <input type="text" class="form-control" id="identificacion" name="identificacion"
                                    value="<?= $estud_identificacion ?>" required>
                                <input type="hidden" class="form-control" id="id" name="id" value="<?= $estud_id ?>">
                            </div>

                            <div class="form-group">
                                <label for="nombres">Nombres</label>
                                <input type="text" class="form-control" id="nombres" name="nombres"
                                    value="<?= $estud_nombres ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="apellidos">Apellidos</label>
                                <input type="text" class="form-control" id="apellidos" name="apellidos"
                                    value="<?= $estud_apellidos ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email"
                                    value="<?= $estud_email ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="telefono">Telefono</label>
                                <input type="text" class="form-control" id="telefono" name="telefono"
                                    value="<?= $estud_telefono ?>" required>
                            </div>

                            <label for="tipo_de_sangre">Tipo de sangre</label>
                                <input type="text" class="form-control" id="tipo_de_sangre" name="tipo_de_sangre"
                                value="<?= $estud_tipoSangre ?>" required>


                                <label for="altura">Altura</label>
                                <input type="text" class="form-control" id="altura" name="altura"
                                value="<?= $estud_altura ?>" required>



                                <label for="genero">Genero</label>
                                <input type="text" class="form-control" id="genero" name="genero"
                                value="<?= $estud_genero ?>" required>


                            <button type="submit" class="btn btn-primary">Actualizar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div>

            <script src="../../js/javascript.js"></script>
            <script src="../../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>