<?php
include("Conexion.php");

$v1=$_POST['IdEmpleados'];
$v2=$_POST['Nom'];
$v3=$_POST['Ape'];
$v4=$_POST['Tel'];

insertar($v1,$v2,$v3,$v4);
function insertar($v1, $v2, $v3, $v4){
global $conex;

if(!mysqli_query($conex, "INSERT INTO empleados1(IdEmpleados, Nom, Ape, Tel) VALUES ('".$v1."','".$v2."','".$v3."','"$v4"')"))
{
echo "ERROR!";
}
else
{
echo "Acción exitosa"; 
}
}
?>