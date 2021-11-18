<!doctype html>
<html lang="en">
   <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    
        <title>Insertar</title>
   </head>

    <body>


      <?php

        // Create connection
        require('conexion.php');
            
        $i = $_POST['id'];
        $n = $_POST['nombre'];
        $m = $_POST['marca'];
        $p = $_POST['precio'];
        $c = $_POST['cantidad'];

        $sql = "INSERT INTO tabla35 (id, Nombre_Producto, Marca_Producto, Precio, Cantidad)  VALUES ('$i', '$n', '$m', '$p', '$c')";
            
        if (mysqli_query($connection, $sql)) {

        ?>

        <!-- The Modal -->
        
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Error</h4>
                        <button class="close" onclick="location.href='../in.html'">&times;</button>
                    </div>
                    
                    <!-- Modal body -->
                    <div class="modal-body">
                        Datos grabados safisfactoriamente
                    </div>
                    
                    <!-- Modal footer -->
                    <div class="modal-footer">
                    <button class="btn btn-danger" onclick="location.href='../in.html'">Cerrar</button>
                    </div>
                
                </div>
            </div>

        <?php
        } else
        {

        ?>

        <!-- The Modal -->
        
            <div class="modal-dialog">
                <div class="modal-content">
            
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Error</h4>
                    <button class="close" onclick="location.href='../form_insertar.html'">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                    <?php
                        echo "Error grabando datos: <br>" . $sql . "<br>" . mysqli_error($connection);
                    ?> 
                </div>

                
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button class="btn btn-danger" onclick="location.href='../in.html'">Cerrar</button>
                </div>
                
            </div>
            </div>

        <?php
            
        //echo "New record created successfully";
        //} else {
        //echo "Error: " . $sql . "<br>" . mysqli_error($connection);
        //  

        }
        mysqli_close($connection);
            
        ?>
   </body>
</html>