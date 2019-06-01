<?php


$Email = "";
$Password = "";

if(isset($_POST['Login']))
{
    $conn = mysqli_connect("localhost", "root", "", "flandership");
    $Email = strtolower($_POST['EmailLogin']);
    $Password = md5($_POST['PasswordLogin']);

    $sql_usarios = "SELECT * FROM usuarios WHERE Email='$Email' AND Password='$Password' ";

    $res_u = mysqli_query($conn, $sql_usarios);

    if (mysqli_num_rows($res_u) == 0) 
    {
        mysqli_close($conn); 
        header ("location: login.php?err=1"); 
    }
    else
    {
        if(mysqli_num_rows($res_u) == 1)
        {
            session_start();

            $row=mysqli_fetch_row($res_u);

            $_SESSION['Nombre'] = $row[1];
            $_SESSION['Apellido'] = $row[2];
            $_SESSION['Email'] = $row[3];
    
            mysqli_close($conn); 
    
            header("location: index.php");
            exit; 
        }
        else
        {
            echo 'Ocurrió un error MUY extraño';
        }
    }
}
else
{
    echo 'Error al pasar datos del Formato';
}

?>