<?php

namespace Utilidades_2;

use mysqli;
use mysqli_sql_exception;

class DB
{

    private mysqli $con;

    public function __construct()
    {

        $host = $_ENV['HOST'];
        $user = $_ENV['USER_'];
        $password = $_ENV['PASSWORD'];
        $database = $_ENV['DATABASE'];
        $port = $_ENV['PORT_MYSQL'];
        try {
            var_dump($host);
            var_dump($user);
            var_dump($password);
            var_dump($port);

            $conexion = new mysqli($host, $user, $password, $database, $port);

        } catch (mysqli_sql_exception $e) {
            die("Error conectando" . $e->getMessage());
        }

        $this->con = $conexion;
    }


    public function insertar_usuario(string $nombre, string $password): bool
    {
        $passwd_hasheada = password_hash($password, PASSWORD_BCRYPT);
        $sentencia = <<<FIN
        insert into usuarios
        (nombre,password) values (?,?)
FIN;
        var_dump($sentencia);

        try {
            $stmt = $this->con->stmt_init();
            $stmt->prepare($sentencia);
            $stmt->bind_param("ss", $nombre, $passwd_hasheada);
            $stmt->execute();
            $stmt->store_result();
            return $stmt->affected_rows == 1;
        } catch (mysqli_sql_exception $e) {
            echo "Error" . $e->getMessage();
            return false;
        }


    }

    public function valida_usuario(string $user, string $password)
    {

        $sentencia = <<<FIN
        select password from usuarios
        where nombre = ?  
FIN;

        try {

            $stmt = $this->con->stmt_init();
            $stmt->prepare($sentencia);
            $stmt->bind_param("s", $user);
            $stmt->execute();
            $stmt->store_result();
            $stmt->bind_result($password_bbdd);
            $stmt->fetch();
            return password_verify($password, $password_bbdd);
        } catch (mysqli_sql_exception $e) {
            $msj = $e->getMessage();
            error_log($msj, 1, "errores.log");
            return false;
        }
    }

    function obtener_familias(): array
    {
        $sentencia = "select * from familia";
        $rtdo = $this->con->query($sentencia);

        return $rtdo->fetch_all();
    }

    function obtener_productos(string $familia): array
    {

        $sentencia = "select cod,nombre_corto,PVP from producto where familia = ? ";
        $productos = [];
        try {
            $stmt = $this->con->stmt_init();
            $stmt->prepare($sentencia);
            $stmt->bind_param("s", $familia);
            $stmt->execute();
            $stmt->store_result();
            $stmt->bind_result($cod, $nombre_corto, $PVP);
            while ($stmt->fetch()) {
                $productos[] = ["codigo" => $cod, "nombre" => $nombre_corto, "PVP" => $PVP];
            }

        } catch (mysqli_sql_exception $e) {
            $msj = $e->getMessage();
            error_log($msj, 1, "errores.log");
        } finally {
            return $productos;
        }

    }

    public function editar($nombre_corto, $PVP, $nuevoNombre, $nuevoPVP)
    {
        $sentencia = <<<FIN
        update producto set nombre_corto = '$nuevoNombre', PVP = '$nuevoPVP' where nombre_corto = '$nombre_corto' and PVP = '$PVP' 
FIN;
        try {
            $rtdo = $this->con->prepare($sentencia);
            $rtdo->execute();
            var_dump($rtdo);
        }catch (mysqli_sql_exception $e) {
            $msj = $e->getMessage();
            error_log($msj, 1, "errores.log");
        }
    }


}