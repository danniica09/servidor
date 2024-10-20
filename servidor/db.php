<?php
$servername = "sql.freedb.tech";
$username = "freedb_pROGRAMACION"; 
$password = "Ry#C7%ghJ&6V63m"; 
$dbname = "freedb_Programcion";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
