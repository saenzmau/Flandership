<?php
session_start();

if(isset($_POST['Compra']))
{
    $Cantidad = $_POST['Cantidad'];
    $IdProducto = $_POST['idProducto'];

    if(isset($_SESSION['Nombre']))
    {
        $idUsuario = $_SESSION['idUsuario'];
        $Email = $_SESSION['Email'];

        $conn = mysqli_connect("localhost", "root", "", "flandership");
        $sql_OrdenesPendientes = "SELECT A.Email, B.idOrden, B.Registrado FROM usuarios A, ordenes B WHERE A.Email='$Email' AND A.idUsuario = B.idUsuario AND B.Registrado = false";
        $res_OP = mysqli_query($conn, $sql_OrdenesPendientes);

        if(mysqli_num_rows($res_OP) == 0)
        {
            $query = "INSERT INTO ordenes (idUsuario, Registrado) 
            VALUES ('$idUsuario', false)";
            $results = mysqli_query($conn, $query);

            $query = "SELECT idOrden FROM ordenes WHERE Registrado=false LIMIT 1";
            $results = mysqli_query($conn, $query);

            $row=mysqli_fetch_row($results);

            $query = "INSERT INTO ordenitems (idOrden, idProducto, Cantidad) 
            VALUES ('$row[0]','$IdProducto','$Cantidad')";
            $results = mysqli_query($conn, $query);

            mysqli_close($conn);

            header("location: compras.php");
        }
        else
        {
            $query = "SELECT idOrden FROM ordenes WHERE Registrado=false LIMIT 1";
            $results = mysqli_query($conn, $query);

            $row=mysqli_fetch_row($results);

            $query = "INSERT INTO ordenitems (idOrden, idProducto, Cantidad) 
            VALUES ('$row[0]','$IdProducto','$Cantidad')";
            $results = mysqli_query($conn, $query);

            mysqli_close($conn); 

            header("location: compras.php");
        }
        

    }
    else
    {
        header("location: login.php");
    }
}
else
{
    header("location: catalogo.php");
}


?>