<?php

include("conexion.php");
$con=conectar();

$idcomp=$_GET['id'];

$sql="DELETE FROM compras  WHERE idcomp='$idcomp'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: compras.php");
    }
?>