<!DOCTYPE html>
<html lang="es">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    
        <title>ActualizarBD</title>
    </head>
    <body>

    <?php

        require('conexion.php');
        $id = $_POST['id'];


        $sql = "SELECT * FROM tabla35 WHERE id=$id";
        $result = mysqli_query($connection, $sql);   
            

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {

?>
                <div class="container">
                <!-- Content here -->
     
    
                <br>s
                <br>
                <div class="container" style="width: 70%">
                      
    
                  <form class="row g-3" method="POST">
                    <div class="col-md-3">
                                <label for="inputEmail4" class="form-label">código de producto</label>
                                <input type="number" class="form-control" value=" <?php echo $row['id'] ?> " id="codigo" placeholder="Ingrese el codigo" name="id" readonly>
                    </div>
                    <div class="col-md-9">
                              <label for="inputPassword4" class="form-label">Nombre de producto</label>
                              <input type="text" class="form-control" value=" <?php echo $row['Nombre_Producto'] ?> " id="nombre" placeholder="Ingrese el nombre del producto" name="nombre">
                    </div>
                    <div class="col-12">
                              <label for="inputAddress" class="form-label">Marca del producto</label>
                              <input type="text" class="form-control" value=" <?php echo $row['Marca_Producto'] ?> " id="marca" placeholder="Ingrese la marca del producto" name="marca">
                    </div>
                    <div class="col-6">
                                <label for="inputAddress2" class="form-label">Precio de compra</label>
                                <input type="number" class="form-control" value=" <?php echo $row['Precio'] ?> " id="compra" placeholder="$...." name="precio">
                    </div>
                    <div class="col-md-6">
                                <label for="inputCity" class="form-label">Cantidad comprada</label>
                                <input type="number" class="form-control" value=" <?php echo $row['Cantidad'] ?> " id="cantidad" placeholder="1,2,3,4" name="cantidad">
                    </div>
                          
                    <div class="col-9">
                              <input type="submit" name="" value="Eliminar producto" onclick=" " class="btn btn-primary" style="background-color: #1D5CA7">
                    </div>
                    
                 </form>
                              
                          
                            
                </div> 

    ?>
          

    <?php


        //Eliminar

        $sql2 = "DELETE FROM tabla35 WHERE id=$id";

        if (mysqli_query($connection, $sql2)) {

        ?>

        

        <!-- The Modal -->
        
            <div class="modal-dialog">
            <div class="modal-content">
            
                <!-- Modal Header -->
                <div class="modal-header">
                <h4 class="modal-title">Eliminando datos</h4>
                <button class="close" onclick="location.href='../index.html'">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                
                <?php
                echo "Registro eliminado satisfactoriamente";
                ?>


                </div>
                
                <!-- Modal footer -->
                <div class="modal-footer">
                <button class="btn btn-primary mb-3" onclick="location.href='../index.html'">Cerrar</button>
                </div>
                
            </div>
            </div>



        <?php

        } else {




        ?>

        <!-- The Modal -->
        
            <div class="modal-dialog">
            <div class="modal-content">
            
                <!-- Modal Header -->
                <div class="modal-header">
                <h4 class="modal-title">Error eliminando Datos</h4>
                <button class="close" onclick="location.href='../index.html'">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                
                <?php
                echo "Error eliminando registro: <br> " . mysqli_error($connection);
                ?>


                </div>
                
                <!-- Modal footer -->
                <div class="modal-footer">
                <button class="btn btn-primary mb-3" onclick="location.href='../index.html'">Cerrar</button>
                </div>
                
            </div>
            </div>



        <?php


        }

        //FIN ELIMINAR

                
        //$myJSON = json_encode($row);

        //echo $myJSON;

            }


        } else {


        ?>

        <!-- The Modal -->
        
            <div class="modal-dialog">
            <div class="modal-content">
            
                <!-- Modal Header -->
                <div class="modal-header">
                <h4 class="modal-title">Error eliminando Datos</h4>
                <button class="close" onclick="location.href='../index.html'">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                
                <?php
                echo "Ese producto no existe <br> ";
                ?>


                </div>
                
                <!-- Modal footer -->
                <div class="modal-footer">
                <button class="btn btn-primary mb-3" onclick="location.href='../index.html'">Cerrar</button>
                </div>
                
            </div>
            </div>



        <?php

        }

        mysqli_close($connection);
        ?> 
