<?php
    if(!isset($_GET['exito']){
        exit("Hubo un error en el servidor");
    })
        
    $resultado = (bool) $_GET['exito'];
    $paymentId = $_GET['paymentId'];

    if($resultado == true) {
        if(isset($_POST['Comprar']))
        {
            $Total = $_POST['total'];
            $idCompra = $_POST['idCompra'];

            $conn = mysqli_connect("localhost", "root", "", "flandership");
            $sql = "UPDATE ordenes SET Registrado = 1, Fecha=CURRENT_TIMESTAMP, Total='$Total' WHERE idOrden='$idCompra'";

            $res_u = mysqli_query($conn, $sql);
            mysqli_close($conn); 
            //Enviar correo
            header("location: compras.php?success=1");
        }
    }else{
        $conn = mysqli_connect("localhost", "root", "", "flandership");
        //Enviar correo
        header("location: compras.php?success=0");
    }
?>