<?php
    include('login.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<b id="welcome">Welcome : <i><?php echo $_SESSION['usuform']; ?></i></b>
<b id="logout"><a href="logout.php">Log Out</a></b>
<?php
    if(isset($_COOKIE['usuariocookie'])){
        echo 'La cookie se ha creado --> '.$_COOKIE["usuariocookie"];
    }else{
        echo 'Cookie no creada';
    }
    
?>
</body>
</html>