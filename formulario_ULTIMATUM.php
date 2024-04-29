<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Opciones Múltiples</title>
</head>
<body>
<?php //php
//CONEXION A LA BASE DE DATOS------------------------------------------////////////////
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

?>

<form method="POST" action="respuestas_ULTIMATUM.php">
Ingrese su nombre: <input type="text" name="usuario" id="" value="usuario no declarado"><br><br>

<span>¿Con que frecuencia sientes taquicardia?</span><br><br>
    <label for="opcion1">Nunca</label>
    <input type="checkbox" name="op1" id="opcion1" value="nunca">

    <label for="opcion2">Aveces</label>
    <input type="checkbox" name="op2" id="opcion2" value="aveces">

    <label for="opcion3">Siempre</label>
    <input type="checkbox" name="op3" id="opcion3" value="siempre">

    <label for="opcion4">Casi siempre</label>
    <input type="checkbox" name="op4" id="opcion4" value="casi siempre">

    <input style="visibility:hidden"; type="checkbox" name="cuestion" id="pregunta1" value="1"><br><br>


    <span>¿Considera que gestiona sus emociones?</span><br><br>
    <label for="opcion1">Nunca</label>
    <input type="checkbox" name="op1" id="opcion5" value="nunca">

    <label for="opcion2">Aveces</label>
    <input type="checkbox" name="op2" id="opcion6" value="aveces">

    <label for="opcion3">Siempre</label>
    <input type="checkbox" name="op3" id="opcion7" value="siempre">

    <label for="opcion4">Casi siempre</label>
    <input type="checkbox" name="op4" id="opcion8" value="casi siempre">

    <input style="visibility:hidden"; type="checkbox" name="cuestion" id="pregunta2" value="2"><br><br>

    <input type="submit" value="Enviar">
</form>
</body>
<script>
        // Obtén referencias a los checkboxes
        var checkbox1 = document.getElementById('opcion1');
        var checkbox2 = document.getElementById('opcion21');

        var checkbox1_2 = document.getElementById('opcion2');
        var checkbox2_2 = document.getElementById('opcion22');

        var checkbox1_3 = document.getElementById('opcion3');
        var checkbox2_3 = document.getElementById('opcion23');

        var checkbo1_4 = document.getElementById('opcion4');
        var checkbox2_4 = document.getElementById('opcion24');
        
        //Identificacion de pregunta
        var checkbox3 = document.getElementById('pregunta1');   
        var checkbox4 = document.getElementById('pregunta2');     

        // Maneja el evento de cambio del checkbox1
        checkbox1.addEventListener('change', function() {

            // Actualiza el estado de checkbox2 al mismo que checkbox1
            checkbox3.checked = checkbox1.checked;
        });
        checkbox2.addEventListener('change', function() {
            checkbox4.checked = checkbox2.checked;
        })

        checkbox1_2.addEventListener('change', function(){
            checkbox3.checked = checkbox1_2.checked;
        });
        checkbox2_2.addEventListener('change', function(){
            checkbox4.checked = checkbox2_2.checked;
        })

        checkbox1_3.addEventListener('change', function() {
            checkbox3.checked = checkbox1_3.checked;
        });
        checkbox2_3.addEventListener('change', function() {
            checkbox4.checked = checkbox2_3.checked;
        });

        checkbox1_4.addEventListener('change', function() {
            checkbox3.checked = checkbox1_4.checked;
        });
        checkbox2_4.addEventListener('change', function() {
            checkbox4.checked = checkbox2_4.checked;
        });
</script>
</html>





