<?php 
$servername = "db"; // o "db" si estás usando Docker y "db" es el nombre del contenedor
$database = "mariadb";
$username = "mariadb";
$password = "mariadb";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_GET['registros'])){
    $datos = array();
    $sql = "SELECT id, email, usuario FROM usuarios WHERE usuario='" . $_GET['usuarios'] . "'";
    $resultado = $conn->query($sql);
    
    if ($resultado->num_rows == 0) {
        echo 'Registro no encontrado';
    } else {
        while ($row = $resultado->fetch_assoc()) {
            $datos[] = array(
                'id' => $row['id'],
                'email' => $row['email'],
                'usuario' => $row['usuario']
            );
        }
        echo json_encode($datos);
    }
} else {
    echo 'En espera de Solicitud';
}

$conn->close();
?>