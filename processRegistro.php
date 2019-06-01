<?php

$Nombre ="";
$Apellido = "";
$Email = "";
$Password = "";


if(isset($_POST['Registro']))
{
    $Nombre = ucfirst($_POST['NombreRegistro']);
    $Apellido = ucfirst($_POST['ApellidoRegistro']);
    $Email =  strtolower($_POST['EmailRegistro']);
    $Password = md5($_POST['ContrasenaRegistro']);

    $conn = mysqli_connect("localhost", "root", "", "flandership");

    $sql_emails = "SELECT * FROM usuarios WHERE Email='$Email'";

    $res_u = mysqli_query($conn, $sql_emails);

    if (mysqli_num_rows($res_u) > 0) 
    {
        
        mysqli_close($conn); 
        header ("location: Registro.php?err=1");
    }

    else
    {
        $query = "INSERT INTO usuarios (Nombre, Apellido, Email, Password) 
        VALUES ('$Nombre', '$Apellido', '$Email', '$Password')";
        $results = mysqli_query($conn, $query);

        session_start();

        $_SESSION['Nombre'] = $Nombre;
        $_SESSION['Apellido'] = $Apellido;
        $_SESSION['Email'] = $Email;

        mysqli_close($conn); 

        header("location: index.php");
        exit;
    }
}
else
{
    echo 'Error al pasar datos del Formato';
}





 
?>