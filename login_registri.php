<?php
include("conexion.php");

$correo = $_POST['correo'];

$password = $_POST['password'];

if(isset($_POST["btningresar"]))
{
    $query = mysqli_query($conn, "SELECT * FROM login WHERE correo = '$correo' and password ='$password'");
    $nr = mysqli_num_rows($query);

    if($nr==1)
    {
        echo "<script> alert('Bienvenido $correo'); window.location='inicio.html' </script>";
    } else 
    {
        echo "<script> alert('usuario no existe'); window.location='login.html' </script>";
    }

}
if(isset($_POST["btnregistrar"]))
{
    $sqlgrabar = "INSERT INTO login (correo,password) values ('$correo', '$password')";
    
    if(mysqli_query($conn,$sqlgrabar))
    {
        echo "<script> alert('usuario registrado: $correo'); window.location='Index.html' </script>";
    }else 
    {
    }
    
    

}

?>
