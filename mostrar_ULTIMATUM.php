<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opciones Elegidas</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>

<?php
$servername = "localhost"; // Cambia esto al servidor de tu base de datos
$username = "root"; // Cambia esto a tu nombre de usuario de MySQL
$password = ""; // Cambia esto a tu contraseña de MySQL
$database = "test"; // Cambia esto a tu nombre de base de datos

// Crea la conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $database);
// Verifica la conexión
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
   }
   ///////////////////////////////////////////////////////////////////////////////////////////////
   $sql = "SELECT * FROM respuestas, usuario WHERE usuario.usuario_id = respuestas.usuario_id";
   $result =$conn->query($sql);
echo "<div class = 'table-responsive'>";
echo "table class = 'table/'";
echo "<tr
        <th>Nombre/</th>
        <th>Nombre de pregunta/</th>
        <th>opcion 1/</th>
        <th>opcion 2/</th>
        <th>opcion 3/</th>
        <th>opcion 4/</th>
        <th>fecha</th>
    </tr";

while ($ver = mysqli_fetch_array($result)) {
       echo  "<br>";
       echo  "<br>";

          
           echo "<tr>
           <td>.$ver[9].</td>
           <td>.$ver[6].</td>
           <td>.$ver[2].</td>
           <td>.$ver[3].</td>
           <td>.$ver[4].</td>
           <td>.$ver[5].</td>
           <td>.$ver[7].</td>
            </tr";
}
     echo "</table>";
     echo "</dis>";

?>