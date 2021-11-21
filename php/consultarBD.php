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
    
        <title>ConsultarBD</title>
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
        <!-- The Modal -->
        
            <div class="modal-dialog">
                <div class="modal-content">
            
                  <!-- Modal Header -->
                   <div class="modal-header">
                     <h4 class="modal-title">Datos</h4>
                     <button class="close" onclick="location.href='../index.html'">&times;</button>
                   </div>
                
                   <!-- Modal body -->
                  <div class="modal-body">
                
        <?php
                     echo "Codigo: " . $row["id"]
                     . "<br> Nombre del producto: " . $row["Nombre_Producto"]
                     . "<br> Marca del producto: " . $row["Marca_Producto"]
                     . "<br> Precio: ". $row["Precio"]
                     . "<br> Cantidad: ". $row["Cantidad"]
                     . "". "<br>";
        ?>


                  </div>
                
                   <!-- Modal footer -->
                  <div class="modal-footer">
                     <button class="btn btn-danger" onclick="location.href='../index.html'">Cerrar</button>
                   </div>
                
                </div>
            </div>



        <?php


                
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
                 <h4 class="modal-title">Error</h4>
                 <button class="close" onclick="location.href='../index.html'">&times;</button>
                </div>
                
                 <!-- Modal body -->
                <div class="modal-body">
                
        <?php
                 echo "Ese producto no existe " . "<br>";
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