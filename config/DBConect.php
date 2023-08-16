<?php
class Database
{
    public $db; // handle of the db connexion    
    private static $dns = "mysql:host=localhost;dbname=colegio";
    private static $user = "root";
    private static $pass = "";
    private static $instance;

    public function __construct()
    {
        $this->db = new PDO(self::$dns, self::$user, self::$pass);
    }

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            $object = __CLASS__;
            self::$instance = new $object;
        }
        return self::$instance;
    }

    public function DatosEstudiantes()
    {
        $conexion = Database::getInstance();
        $sql = "SELECT id,identificacion,nombres,apellidos,email,telefono,tipo_de_sangre,altura,genero from estudiantes";
        $result = $conexion->db->prepare($sql);
        $result->execute();
        return $result;
    }

    public function CrearEstudiante($nombres, $apellidos, $email, $telefono, $identificacion, $tipoSangre, $altura, $genero)
    {
        try {
            $conexion = Database::getInstance();
            $result = $conexion->db->prepare("INSERT INTO estudiantes (nombres, apellidos, email, telefono, identificacion, tipo_de_sangre, altura, genero) VALUES (:nombres, :apellidos, :email, :telefono, :identificacion, :tipoSangre, :altura, :genero)");
            $result->execute(
                array(
                    ':nombres' => $nombres,
                    ':apellidos' => $apellidos,
                    ':email' => $email,
                    ':telefono' => $telefono,
                    ':identificacion' => $identificacion,
                    ':tipoSangre' => $tipoSangre,

                    ':altura' => $altura,
                    ':genero' => $genero
                )
            );
            return $result->rowCount() > 0 ? "2" : "0";
        } catch (PDOException $e) {
            return "0";
        }
    }


    public function editEstudiante($id)
    {
        $conexion = Database::getInstance();
        $sql = "SELECT id,identificacion,nombres,apellidos,email,telefono,identificacion,altura,genero from estudiantes where id=:id";
        $result = $conexion->db->prepare($sql);
        $params = array("id" => $id);
        $result->execute($params);
        return $result;
    }

    public function updateEstudiante($id, $nombres, $apellidos, $email, $telefono, $identificacion, $tipoSangre, $altura, $genero)
    {

        try {
            $conexion = Database::getInstance();
            $result = $conexion->db->prepare("UPDATE estudiantes set nombres=:nombres,apellidos=:apellidos,email=:email,telefono=:telefono,identificacion=:identificacion,identificacion=:identificacion,tipo_de_sangre=:tipo_de_sangre,altura=:altura,genero=:genero where id=:id ");
            $result->execute(
                array(
                    ':nombres' => $nombres,
                    ':apellidos' => $apellidos,
                    ':email' => $email,
                    ':telefono' => $telefono,
                    ':identificacion' => $identificacion,
                    ':tipoSangre' => $tipoSangre,
                    ':altura' => $altura,
                    ':genero' => $genero,
                    ':id' => $id
                )
            );
            return "3";
        } catch (PDOException $e) {
            return "0";
        }
    }

    public function EliminarEstudiante($id)
    {
        try {
            $conexion = Database::getInstance();
            $result = $conexion->db->prepare("DELETE FROM estudiantes WHERE id=?");
            $result->execute(array($id));

            return "1";
        } catch (PDOException $e) {
            return "0";
        }
    }


    public function DatosMaterias()
    {
        $conexion = Database::getInstance();
        $sql = "SELECT id,nombre,docente,numero_horas,creditos from materias";
        $result = $conexion->db->prepare($sql);
        $result->execute();
        return $result;
    }

    public function EliminarMateria($id)
    {
        try {
            $conexion = Database::getInstance();
            $result = $conexion->db->prepare("DELETE FROM materias WHERE id=?");
            $result->execute(array($id));

            return "1";
        } catch (PDOException $e) {
            return "0";
        }
    }

    public function CrearMateria($nombre, $docente, $numero_horas, $creditos)
    {
        try {
            $conexion = Database::getInstance();
            $result = $conexion->db->prepare("INSERT INTO materias (nombre, docente, numero_horas, creditos) VALUES (:nombre, :docente, :numero_horas, :creditos)");
            $result->execute(
                array(
                    ':nombre' => $nombre,
                    ':docente' => $docente,
                    ':numero_horas' => $numero_horas,
                    ':creditos' => $creditos
                )
            );
            return $result->rowCount() > 0 ? "2" : "0";
        } catch (PDOException $e) {
            return "0";
        }
    }

    public function editMateria($id)
    {
        $conexion = Database::getInstance();
        $sql = "SELECT id,nombre,docente,numero_horas,creditos from materias where id=:id";
        $result = $conexion->db->prepare($sql);
        $params = array("id" => $id);
        $result->execute($params);
        return $result;
    }

    public function updateMateria($nombre, $docente, $numero_horas, $creditos, $id)
    {
        try {
            $conexion = Database::getInstance();
            $result = $conexion->db->prepare("UPDATE materias SET nombre = :nombre, docente = :docente, numero_horas = :numero_horas, creditos = :creditos WHERE id = :id");
            $result->execute(
                array(
                    ':nombre' => $nombre,
                    ':docente' => $docente,
                    ':numero_horas' => $numero_horas,
                    ':creditos' => $creditos,
                    ':id' => $id
                )
            );
    
            if ($result->rowCount() > 0) {
                return "3";
            } else {
                return "0";
            }
        } catch (PDOException $e) {
            return "0";
        }
    }
    


}

?>