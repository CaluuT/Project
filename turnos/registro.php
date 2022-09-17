<?php
include_once("db.php");
//Recibo todos los datos del form
$nombrecompleto = $_POST["nombrecompleto"];
$email = $_POST["email"];
$telefonodecontacto = $_POST["telefonodecontacto"];
$fecha = $_POST["fecha"];
$mensajeimportante = $_POST["mensajeimportante"]; 

echo "Los datos son los siguientes: <br>";
echo "Nombre: $nombrecompleto, Email: $email, Telefono de Contacto: $telefonodecontacto, Fecha: $fecha, Mensaje Importante: $mensajeimportante";

        $conectar = conn(); //ejecuta las conexiones a la BD
        $sql = "INSERT INTO usuarios (nombrecompleto, email, telefonodecontacto, fecha, mensajeimportante) VALUES ('$nombrecompleto', '$email', '$telefonodecontacto', '$fecha', '$mensajeimportante')";
        $resul = mysqli_query($conectar , $sql) or trigger_error("Query Failed! SQL - Error: ".mysqli_error($conectar), E_USER_ERROR);
        echo "$sql";


        //################### Para que funcione hay que abrir los servidores de xampp ###################


?>
