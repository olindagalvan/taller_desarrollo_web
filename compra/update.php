<?php

include("conexion.php");
$con=conectar();

$idcomp=$_POST['idcomp'];
$Nombre=$_POST['Nombre'];
$sucursal=$_POST['sucursal'];
$descripcion=$_POST['descripcion'];

$sql="UPDATE compras SET  Nombre='$Nombre',sucursal='$sucursal',descripcion='$descripcion' WHERE idcomp='$idcomp'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: compras.php");
    }
?>
