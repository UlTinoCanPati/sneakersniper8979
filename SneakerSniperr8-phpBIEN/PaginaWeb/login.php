<?php
 
 if(empty($_POST['email']) OR empty($_POST['contraseña'])){
    die();
 }

    $Email = $_POST["email"];
    $Contraseña = $_POST["contraseña"];


    $servername = "127.0.0.1";
    $database = "sneakersniper";
    $username = "alumno";
    $password = "alumnoipm";
    
    $conexion = mysqli_connect($servername, $username, $password, $database); // se crea la conexion

 
    if (!$conexion) {
        die("Conexion fallida: " . mysqli_connect_error());
    }
    else{
        $query = "select contraseña from usuario where email = '$Email'";
        $resultado=mysqli_query($conexion, $query);
        $fila=mysqli_fetch_assoc($resultado);
        if($fila["contraseña"] == $Contraseña){
            session_start();
            $_SESSION["correo"] = $Email;
            $_SESSION["contraseña"] = $Contraseña;
            $_SESSION["iniciada"] = true;
            header('Location: index.php');
        } else {
            echo "Contraseña incorrecta";
        }
    }
?>
