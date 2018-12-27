<?php
 
$con = pg_connect("host=localhost dbname=babel port=5432 user=jjmoncar password=jjmc1021") 
or die('No se ha podido conectar: ' . pg_last_error());

$nombre = $_POST['name'];
$apellido = $_POST['apellido'];
$email = $_POST['pwd'];
$telefono = $_POST['telefono'];
$pais = $_POST['pais'];
$estatus = $_POST['estatus'];
 
$res = pg_query($con, "INSERT INTO clientes(nombres,apellidos,correo,telefono,pais,estatus) VALUES('".$nombre."','".$apellido."', '".$email."','".$telefono."','".$pais."','".$estatus."')");
if(pg_affected_rows($res)>0){
	echo "1";
}
else{
	echo "2";
}

?>