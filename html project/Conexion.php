<?php
$host = 'localhost';
$db = 'tutoriales';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

$username = $_POST['username'];

$stmt = $conn->prepare("SELECT password FROM usuarios WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($row = $result->fetch_assoc()) {
    echo "Tu contraseña es: " . $row['password'];
} else {
    echo "Usuario no encontrado.";
}

$conn->close();
?>
