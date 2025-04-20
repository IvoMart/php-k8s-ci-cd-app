<?php
echo "<h1>Hola Mundo</h1>";
echo "<h2>Hola Mundo - 2</h2>";
echo "<h2>Hola Mundo desde PHP</h2>";
echo "<h2>Hola Mundo desde PHP - 2</h2>";
exit;
$mysqli = new mysqli(
    getenv('DB_HOST'),
    getenv('DB_USER'),
    getenv('DB_PASSWORD'),
    getenv('DB_NAME')
);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$result = $mysqli->query("SELECT id, nombre FROM personas");

while ($row = $result->fetch_assoc()) {
    echo "ID: " . $row["id"] . " - Nombre: " . $row["nombre"] . "<br>";
}
$mysqli->close();
?>
