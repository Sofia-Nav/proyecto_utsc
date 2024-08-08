<?php
header('Content-Type: application/json');

// Configuración de la base de datos
$host = 'db';
$db = 'mariadb';
$user = 'mariadb';
$pass = 'mariadb';

// Conectar a la base de datos
$mysqli = new mysqli("db","mariadb","mariadb","mariadb");

if ($mysqli->connect_error) {
    die("Error de conexión: " . $mysqli->connect_error);
}

// Obtener usuarios
$sql = "SELECT id, user, email FROM usuarios";
$result = $mysqli->query($sql);

$usuarios = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $usuarios[] = $row;
    }
} else {
    echo json_encode(["message" => "No users found"]);
    exit;
}

echo json_encode($usuarios);

$mysqli->close();
?>