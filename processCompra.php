<?php

if(isset($_POST['Comprar']))
{
    $Total = $_POST['total'];
    $idCompra = $_POST['idCompra'];

    $conn = mysqli_connect("localhost", "root", "", "flandership");
    $sql = "UPDATE ordenes SET Registrado = 1, Fecha=CURRENT_TIMESTAMP, Total='$Total' WHERE idOrden='$idCompra'";

    $res_u = mysqli_query($conn, $sql);
    mysqli_close($conn); 
    
    header("location: compras.php?success=1");
}

?>