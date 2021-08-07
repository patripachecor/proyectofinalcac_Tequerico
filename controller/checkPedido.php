<?php 
    $nombre = $_POST['firstName'];
    $apellido = $_POST['lastName'];
    $usuario = $_POST['username'];
    $mail = $_POST['email'];
    $lugarentrega = $_POST['address'];
    $comuna = $_POST['country'];
    $provincia = $_POST['state'];
    $codpostal = $_POST['zip'];
    $formadepago = $_POST['paymentMethod'];
    $titulartarje = $_POST['cc-name'];
    $numerotarje = $_POST['cc-number'];
    $vtotarje = $_POST['cc-expiration'];
    $clavetarje = $_POST['cc-cvv'];

    require_once("../model/Pedido.php");
    $pedido = new Pedido($nombre, $apellido, $usuario, $mail, $lugarentrega, $comuna, $provincia, $codpostal, $formadepago, $titulartarje, $numerotarje, $vtotarje, $clavetarje);
    
    require_once("../dao/PedidoDAO.php");

    $pedidoDAO = new PedidoDAO();
    $guardoOk = $pedidoDAO->guardarPedido($pedido);

    if ($guardoOk) {
        echo "El pedido se agregó correctamente <br>";
    } else {
        echo "Error en agregar pedido <br>";
    }
  
?>