<?php
    include('login.php');
    include('conexion.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/cssusuario.css">
    <title>Document</title>
</head>
<body>
    <!--
<b id="welcome">Welcome : <i>
    
  

</i></b>
<b id="logout"><a href="logout.php">Log Out</a></b>
<?php
/*
    if(isset($_COOKIE["usuariocookie"])){
        echo 'La cookie se ha creado --> '.$_COOKIE["usuariocookie"];
    }else{
        echo 'Cookie no creada';
    }
    */
?>
-->
<b id="logout"><a href="logout.php">Log Out</a></b>

 <link href='http://fonts.googleapis.com/css?family=Oswald:300' rel='stylesheet' type='text/css'>

<h1>Bienvenido :  <?php echo $_SESSION['usuform']; ?></h1>

<a href="#" class="btn">Home</a>
<a href="#" class="btn">About</a>
<a href="sesion.php" class="btn">Sesión de Fotos</a>
<a href="#" class="btn">Pedidos</a>

</body>
</html>