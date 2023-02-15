<?php

include 'conexion_db.php';

$Nombre = $_POST['nombre'];
$Correo = $_POST['email'];
$Pass = $_POST['password'];

$query = "INSERT INTO usuarios(nombre, email, password) 
            VALUES('$Nombre', '$Correo', '$Pass')";

$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
    echo '
    <script>
        alert("Usuario almacenado exitosamente");
        window.location = "../index.php";
    </script>
    
    ';
}else{
    echo '
    <script>
        alert("Intentalo de nuevo usuario no almacenado");
        window.location = "../index.php";
    </script>
  
    '; 
}
mysqli_close($conexion);
?>