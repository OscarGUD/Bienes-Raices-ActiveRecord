<?php

// Importar la conexion
require 'includes/config/app.php';
$db = conectarDB();
// Crear un email y password
$email = "correo@correo.com";
$password = "123456";

$passwordHash = password_hash($password, PASSWORD_DEFAULT);

var_dump($passwordHash);


// Query para crear el usuario
$query = "INSERT INTO usuarios(email, password) VALUES ('${email}', '${passwordHash}')";

echo $query;


// agregarlo a la base de datos
mysqli_query($db, $query);