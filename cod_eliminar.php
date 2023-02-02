<?php
include("Conexion.php");
global $conex;

if (isset($_GET['id']) ) {
    $id = $_GET['id'];

    if (!mysqli_query($conex, "DELETE FROM empleados1 where id='".$id."'")) {
        echo "Error!";
    }
    else
    {
        echo "Accion exitosa!";
    }
}
else{
    echo "No llego el valor";
}
?>