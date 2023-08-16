<?php
include_once("../../config/DBConect.php");
include_once("../../config/Config.php");

$id = $_GET['id'];

$conexion = new Database;
$result = $conexion->editMateria($id);

$mat_id = $mat_nombre = $mat_docente = $mat_numero_horas = $mat_creditos = "";
foreach ($result->fetchAll(PDO::FETCH_OBJ) as $r) {
    $mat_id = $r->id;
    $mat_nombre = $r->nombre;
    $mat_docente = $r->docente;
    $mat_numero_horas = $r->numero_horas;
    $mat_creditos = $r->creditos;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Materias</title>
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../../css/style.css" rel="stylesheet" type="text/css">
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8 col-xl-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        Modificar Materias
                        <a href="<?= ROOT ?>modulos/materias/materias.php" class="btn btn-primary">Regresar</a>
                    </div>
                    <div class="card-body">
                        <form action="update.php" method="POST" name="forrol">
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre"
                                    value="<?= $mat_nombre ?>" required>
                                <input type="hidden" class="form-control" id="id" name="id" value="<?= $mat_id ?>">
                            </div>

                            <div class="form-group">
                                <label for="docente">Docente</label>
                                <input type="text" class="form-control" id="docente" name="docente"
                                    value="<?= $mat_docente ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="numero_horas">Número de Horas</label>
                                <input type="text" class="form-control" id="numero_horas" name="numero_horas"
                                    value="<?= $mat_numero_horas ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="creditos">Créditos</label>
                                <input type="text" class="form-control" id="creditos" name="creditos"
                                    value="<?= $mat_creditos ?>" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Actualizar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../../js/javascript.js"></script>
    <script src="../../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
