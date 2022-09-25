<?php
include("conexion.php");
$con=conectar();

$idcomp=$_POST['idcomp'];
$Nombre=$_POST['Nombre'];

$sucursal=$_POST['sucursal'];
$descripcion=$_POST['descripcion'];






$sql="INSERT INTO compras VALUES('$idcomp','$Nombre','$sucursal','$descripcion')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: compras.php");
    
}else {
}
?>









