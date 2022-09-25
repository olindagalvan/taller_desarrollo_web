
<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM articulo";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA ALUMNO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">


                                    <input type="text" class="form-control mb-3" name="idarticulo" placeholder="id articulo">
                                    <input type="text" class="form-control mb-3" name="idcompra" placeholder="idcompra">
                                    <input type="text" class="form-control mb-3" name="descripcion" placeholder="descripcion">
                                    <input type="text" class="form-control mb-3" name="marca" placeholder="marca">
                                    <input type="text" class="form-control mb-3" name="fechaenvio" placeholder="fechaenvio">
                                    <input type="text" class="form-control mb-3" name="fecha_entrega" placeholder="fecha_entrega">
                                    <input type="text" class="form-control mb-3" name="cantidad" placeholder="cantidad">
                                    <input type="text" class="form-control mb-3" name="peso" placeholder="peso">
                                    <input type="text" class="form-control mb-3" name="email" placeholder="email">
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>idarticulo</th>
                                        <th>idcompra</th>
                                        <th>descripcion</th>
                                        <th>marca</th>
                                        <th>fechaenvio</th>
                                        <th>fechaentrega</th>
                                        <th>cantidad</th>
                                        <th>peso</th>
                                        <th>email</th>
    
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['idarticulo']?></th>
                                                <th><?php  echo $row['idcompra']?></th>
                                                <th><?php  echo $row['descripcion']?></th>
                                                <th><?php  echo $row['marca']?></th>    
                                                <th><?php  echo $row['fechaenvio']?></th> 
                                                <th><?php  echo $row['fecha_entrega']?></th>
                                                <th><?php  echo $row['cantidad']?></th>
                                                <th><?php  echo $row['peso']?></th>
                                                <th><?php  echo $row['email']?></th> 

                                                
                                                <th><a href="actualizar.php?id=<?php echo $row['idarticulo'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['idarticulo'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>