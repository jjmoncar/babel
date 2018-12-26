<?php
 
$con = pg_connect("host=localhost dbname=babel port=5432 user=jjmoncar password=jjmc1021") 
or die('No se ha podido conectar: ' . pg_last_error());

$nombre = $_POST['name'];
$apellido = $_POST['apellido'];
$pass = $_POST['pwd'];
 
$res = pg_query($con, "INSERT INTO clientes(nombres,apellidos,correo) VALUES('".$nombre."','".$apellido."', '".$pass."')");
if(pg_affected_rows($res)>0){
	echo "1";
}
else{
	echo "2";
}

?>