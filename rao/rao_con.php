<?php	

$mysqli = new mysqli("localhost", "master_pie", 'diabetico', "master_pie_diabetico");  

/* check connection */
if (mysqli_connect_errno()) {
    printf("Error de conexión: %s\n", mysqli_connect_error()); 
    exit();
}

$mysqli->query("SET NAMES 'utf8'");

?>