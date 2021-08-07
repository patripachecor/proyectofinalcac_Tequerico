<?php 
class PedidoDAO {

    public function guardarPedido($pedido) {
        require_once("../dataBase/ConexionDB.php");
        $conexionDB = new ConexionDB("localhost","root","","proyectofinalcac");
        $conexionDB->conectar();
    
        $sql = "INSERT INTO pedidos 
        (`nombre`, `apellido`, `usuario`, `mail`, `lugarentrega`, `comuna`, `provincia`, `codpostal`, `formadepago`, `titulartarje`, `numerotarje`, `vtotarje`, `clavetarje`) 
        VALUES (
        '{$pedido->getNombre()}', 
        '{$pedido->getApellido()}', 
        '{$pedido->getUsuario()}', 
        '{$pedido->getMail()}', 
        '{$pedido->getLugarentrega()}', 
        {$pedido->getComuna()},
        {$pedido->getProvincia()}, 
        '{$pedido->getCodpostal()}', 
        '{$pedido->getFormadepago()}', 
        '{$pedido->getTitulartarje()}', 
        {$pedido->getNumerotarje()}, 
        '{$pedido->getVtotarje()}', 
        {$pedido->getClavetarje()})";
        
        $conexionDB->ejecutar($sql);

        return $conexionDB->cantFilas() > 0;
    }

    public function listarPedidos() {
        require_once("../dataBase/ConexionDB.php");
        $conexionDB = new ConexionDB("localhost","root","","proyectofinalcac");
        $conexionDB->conectar();

        $sql = "SELECT * FROM pedidos";
        $result = $conexionDB->ejecutar($sql);

        while($pedido = $result->fetch_assoc()) {
            $listaPedidos[] = $pedido;
        }
        
        return $listaPedidos;
    }
}

?>