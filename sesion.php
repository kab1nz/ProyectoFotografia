<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/cssusuario.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

</head>
<body>
    <?php
    include "login.php";
    ?>
    <h3>Reserva sesión de fotos</h3>
    <br>
    <b id="logout"><a href="logout.php">Log Out</a></b>

    <form action="sesion.php" method="post">
    <div class="form-group row">
  <label for="example-datetime-local-input" class="col-2 col-form-label">Date and time</label>
  <div class="col-8">
    <input class="form-control" name="fecha" type="datetime-local"  id="example-datetime-local-input">

  </div>
  <div class="col-2">
   
    <input type="submit" name="submit" value="Reservar">
</div>
    </form>
    <div class="d-flex flex-row ">
    <div class="p-2"><h4>Estado: </h4></div>
    <div class="p-2"><p id="Estado">Esperando</p></div>
</div>
    <?php
        if(isset($_POST['submit'])){
            $nombre_archivo = "pedidos.txt"; 
 
    if(file_exists($nombre_archivo))
    {
        
    }
 
    else
    {
       
    }
    
        }
    ?>
</body>
</html>