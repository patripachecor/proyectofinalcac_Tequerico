<?php 
    $mail = $_POST['inputEmail'];
    $pass = $_POST['inputPassword'];

    require_once("../dao/UsuarioDAO.php");

    $usuarioDAO = new UsuarioDAO();
    $usuValido = $usuarioDAO->validarUsuarioYPass($mail, $pass);

    if($usuValido) {
        header("Location: ../view/pedido.html");
        exit;
    } else {
        echo "Usuario o Password incorrectos <br>";
    }


?>