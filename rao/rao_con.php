<?php	

$mysqli = new mysqli("localhost", "gestor", 'hafkljdfhajkd4324!!"*2dss', "gestor_2");  

/* check connection */
if (mysqli_connect_errno()) {
    printf("Error de conexión: %s\n", mysqli_connect_error()); 
    exit();
}

$mysqli->query("SET NAMES 'utf8'");

?>
