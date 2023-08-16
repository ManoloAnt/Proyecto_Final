<?php
include_once("../../config/Config.php");
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
                        Creación de Estudiantes
                        <a href="<?= ROOT ?>modulos/estudiantes/estudiantes.php" class="btn btn-primary">Regresar</a>
                    </div>
                    <div class="card-body">
                        <form action="add.php" method="POST" name="forestudiantes">
                            <div id='mensaje'></div>
                            <div class="form-group">
                                <label for="identificacion">Identificacion</label>
                                <input type="text" class="form-control" id="identificacion" name="identificacion"
                                    required>
                            </div>

                            <div class="form-group">
                                <label for="nombres">Nombres</label>
                                <input type="text" class="form-control" id="nombres" name="nombres" required>
                            </div>

                            <div class="form-group">
                                <label for="apellidos">Apellidos</label>
                                <input type="text" class="form-control" id="apellidos" name="apellidos" required>
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>

                            <div class="form-group">
                                <label for="telefono">Telefono</label>
                                <input type="text" class="form-control" id="telefono" name="telefono" required>
                            </div>

                            <div class="form-group">
                                <label for="tipo_de_sangre">Tipo de sangre</label>
                                <input type="text" class="form-control" id="tipo_de_sangre" name="tipo_de_sangre"
                                    required>
                            </div>

                            <div class="form-group">
                                <label for="altura">Altura</label>
                                <input type="text" class="form-control" id="altura" name="altura" required>
                            </div>

                            <div class="form-group">
                                <label for="genero">Genero</label>
                                <input type="text" class="form-control" id="genero" name="genero" required>
                            </div>

                            <input type="submit" class="btn btn-primary" value='Crear'>
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
