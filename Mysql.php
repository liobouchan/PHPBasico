<?php

// Con esta linea nos vamos a conectar a Mysql y le daremos nuestro user y pass
$conexion = mysql_connect("localhost", "usuario","pass");

//Aqui seleccionamos la base de datos a la cual nos vamos a conectar 
mysql_database("nombreBD",$conexion);

//Visita mi blog para mas actualizaciones www.desarrollolinuxero.blogspot.mx
//Marzo 2012

?>