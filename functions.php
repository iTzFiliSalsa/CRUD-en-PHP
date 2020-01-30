
<?php

try{
    $conexion = new PDO("mysql:host=localhost;dbname=abc", "root", "");
}catch(PDOException $e){
    die();
}

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    if(isset($_GET['nombre'],$_GET['apellido'])){
        $insertar = $conexion -> prepare("INSERT INTO usuarios(nombre,apellido) VALUES (:nombre, :apellido)");
        $insertar -> execute(
            array(
                ":nombre" => $_GET['nombre'],
                ":apellido" => $_GET['apellido']
            )
            );
        }
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $actualizar = $conexion -> prepare("UPDATE usuarios SET nombre = :nombre, apellido = :apellido where id = :id");
    $actualizar -> execute(
        array(
            ":nombre" => $_POST['editarnombre'],
            ":apellido" => $_POST['editarapellido'],
            ":id" => $_POST['editarid']
        )
        );
}

$usuarios = $conexion -> prepare("SELECT * FROM usuarios");
$usuarios -> execute();
$usuarios = $usuarios -> fetchAll();

?>