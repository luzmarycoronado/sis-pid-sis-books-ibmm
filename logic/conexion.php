<?php

//Variables de administracion
$server ="localhost";
$user = "root";
$password= "";
$bd = "db_storeBooks;";
$charset = "utf8";
$host ="mysql:host=$server;dbname=$bd;charset=$charset";
try {
//creamos la conexion a la base de datos
$conexion = new PDO($host, $user, $password);
//Se establece el modo de errores a exception
$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//forzamos el uso de consultas con UTF8
$conexion->exec("SETNAMES 'utf8'");
echo "conexion correcta";
} catch (PDOException $errors) {
    echo "Ah sucedido un error : " . $errors->getMessage() ."!";
}