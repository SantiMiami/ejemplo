<?php

if(empty($_POST['op1'])){
    $_POST['op1']='0';
}
else {
    $pregunta = '1';
}
if(empty($_POST['op2'])){
    $_POST['op2']='0';
}
else {
    $pregunta = '1';
}
if(empty($_POST['op3'])){
    $_POST['op3']='0';
}else {
    $pregunta = '1';
}
if(empty($_POST['op4'])){
    $_POST['op4']='0';
}else {
    $pregunta = '1';
}

if(empty($_POST['op5'])){
    $_POST['op5']='0';
}else {
    $pregunta = '2';
}
if(empty($_POST['op6'])){
    $_POST['op6']='0';
}else {
    $pregunta2 = '2';
}
if(empty($_POST['op7'])){
    $_POST['op7']='0';
}else {
    $pregunta = '2';
}
if(empty($_POST['op8'])){
    $_POST['op8']='0';
}else {
    $pregunta = '2';
}

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
//CONEXION A LA BASE DE DATOS------------------------------------------////////////////
// Verifica si el formulario ha sido enviado
if (!empty($_POST['usuario'])){
    $usuario= $_POST['usuario'];
    $sql="INSERT INTO `usuario` (`nombreyapellido`) VALUES ('".$usuario."')";
    $result = $conn->query($sql);
}
$sqlUsuario = "SELECT * FROM `usuario` ORDER BY `usuario_id` DESC";
$result = $conn->query($sqlUsuario);
$ver = mysqli_fetch_array($result);
echo "id del ultimo usuario inyectado es: ".$ver[0]."/";
$usuario = ($ver[0]); 

$sql="INSERT INTO `respuestas` (`opcion1`, `opcion2`, `opcion3`, `opcion4`, `pregunta`) VALUES ('"
    .$_POST['op1']."','"
    .$_POST['op2']."','"
    .$_POST['op3']."','"
    .$_POST['op4']. "','1')";
echo "Esta es la consulta de mysql: ".$sql;
$result = $conn->query($sql);

$valor = 0;
?>
<script lenguaje = "Javascript" type = "text/javascript">
    function redireccionar()
    {
      locatice.href = 'mostrar_ULTIMATUM.php';
    }
     setTimeout("redireccionar()",1);
</script>