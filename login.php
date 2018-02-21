
    <?php
      include 'conexion.php';
       session_start(); 
       $error="";
       if(isset($_POST['btnlogin'])){
        
           if(empty($_POST['usuario']) || empty($_POST['pass'])){
            $error = "Username or Password is invalid";

           }
           else{        
            $usuform=$_REQUEST['usuario'];
            $passform=$_REQUEST['pass'];

            $sql = "select * from usuario where usuario='$usuform' and pass='$passform';";
            $result = $conexion->query($sql);


            if ($result->num_rows > 0) {     
                 }
                 $row = $result->fetch_array(MYSQLI_ASSOC);
                 echo "la pass bbdd ->>".$row['pass'];
                 echo "la pass del form ->>".$passform;

                 if (strcmp($passform, $row['pass'])==0) { 
                  
                    $_SESSION['loggedin'] = true;
                    $_SESSION['usuform'] = $usuform;
                    $_SESSION['start'] = time();
                    $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);
                    setcookie("usuariocookie",$usuform,time()+3600);
                    if(strcmp($usuform,"admin")==0){
                      header('Location: administrador.php');

                    }else{
                      header('Location: usuario.php');

                    }
                 
                 } else { 
                   echo "Username o Password estan incorrectos.";
                 
                   echo "<br><a href='index.php'>Volver a Intentarlo</a>";
                 }
                 mysqli_close($conexion);
                 
                

           }
      }

   

      
    
    ?>