<?php
 
    $Nombre = $_POST["nombre"];
    $Apellido = $_POST["apellido"];
    $Domicilio = $_POST["domicilio"];
    $Email = $_POST["email"];
    $contraseña = $_POST["contraseña"];
    $contraseñaconfirmar = $_POST["contraseñaconfirmar"];
 
    
    $servername = "127.0.0.1";
    $database = "sneakersniper";
    $username = "alumno";
    $password = "alumnoipm";
    
    $conexion = mysqli_connect($servername, $username, $password, $database); // se crea la conexion
 
 
    if (!$conexion) {
        die("Conexion fallida: " . mysqli_connect_error());
    }
    else{
        //insertamos el resultado del formulario
        
        if($contraseña == $contraseñaconfirmar){
            //aca. verificar q la persona no exista antes
            $query = "insert into usuario values('$Nombre', '$Apellido', '$Domicilio', '$Email', '$contraseña');";
            $resultado=mysqli_query($conexion, $query);
            header ("location: index.php");
        }
        else{
            header ("location: signup.html");
        }
        
    }
 
    mysqli_close($conexion);
?>