<?php 
class Pedido {
    private $idPedido;
    private $nombre;
    private $apellido;
    private $usuario;
    private $mail;
    private $lugarEntrega;
    private $comuna;
    private $provincia;
    private $codPostal;
    private $formaDePago;
    private $titularTarje;
    private $numeroTarje;
    private $vtoTarje;
    private $claveTarje;

    function __construct($nombre, $apellido, $usuario, $mail, $lugarEntrega, $comuna, $provincia, $codPostal, $formaDePago, $titularTarje, $numeroTarje, $vtoTarje, $claveTarje) {
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->usuario=$usuario;
        $this->mail=$mail;
        $this->lugarEntrega=$lugarEntrega;
        $this->comuna=$comuna;
        $this->provincia=$provincia;
        $this->codPostal=$codPostal;
        $this->formaDePago=$formaDePago;
        $this->titularTarje=$titularTarje;
        $this->numeroTarje=$numeroTarje;
        $this->vtoTarje=$vtoTarje;
        $this->claveTarje=$claveTarje;        
    }
    

    /**
     * Get the value of idPedido
     */ 
    public function getIdPedido()
    {
        return $this->idPedido;
    }

    /**
     * Set the value of idPedido
     *
     * @return  self
     */ 
    public function setIdPedido($idPedido)
    {
        $this->idPedido = $idPedido;

        return $this;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of apellido
     */ 
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set the value of apellido
     *
     * @return  self
     */ 
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get the value of usuario
     */ 
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set the value of usuario
     *
     * @return  self
     */ 
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get the value of mail
     */ 
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set the value of mail
     *
     * @return  self
     */ 
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get the value of lugarEntrega
     */ 
    public function getLugarEntrega()
    {
        return $this->lugarEntrega;
    }

    /**
     * Set the value of lugarEntrega
     *
     * @return  self
     */ 
    public function setLugarEntrega($lugarEntrega)
    {
        $this->lugarEntrega = $lugarEntrega;

        return $this;
    }

    /**
     * Get the value of comuna
     */ 
    public function getComuna()
    {
        return $this->comuna;
    }

    /**
     * Set the value of comuna
     *
     * @return  self
     */ 
    public function setComuna($comuna)
    {
        $this->comuna = $comuna;

        return $this;
    }

    /**
     * Get the value of provincia
     */ 
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * Set the value of provincia
     *
     * @return  self
     */ 
    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * Get the value of codPostal
     */ 
    public function getCodPostal()
    {
        return $this->codPostal;
    }

    /**
     * Set the value of codPostal
     *
     * @return  self
     */ 
    public function setCodPostal($codPostal)
    {
        $this->codPostal = $codPostal;

        return $this;
    }

    /**
     * Get the value of formaDePago
     */ 
    public function getFormaDePago()
    {
        return $this->formaDePago;
    }

    /**
     * Set the value of formaDePago
     *
     * @return  self
     */ 
    public function setFormaDePago($formaDePago)
    {
        $this->formaDePago = $formaDePago;

        return $this;
    }

    /**
     * Get the value of titularTarje
     */ 
    public function getTitularTarje()
    {
        return $this->titularTarje;
    }

    /**
     * Set the value of titularTarje
     *
     * @return  self
     */ 
    public function setTitularTarje($titularTarje)
    {
        $this->titularTarje = $titularTarje;

        return $this;
    }

    /**
     * Get the value of numeroTarje
     */ 
    public function getNumeroTarje()
    {
        return $this->numeroTarje;
    }

    /**
     * Set the value of numeroTarje
     *
     * @return  self
     */ 
    public function setNumeroTarje($numeroTarje)
    {
        $this->numeroTarje = $numeroTarje;

        return $this;
    }

    /**
     * Get the value of vtoTarje
     */ 
    public function getVtoTarje()
    {
        return $this->vtoTarje;
    }

    /**
     * Set the value of vtoTarje
     *
     * @return  self
     */ 
    public function setVtoTarje($vtoTarje)
    {
        $this->vtoTarje = $vtoTarje;

        return $this;
    }

    /**
     * Get the value of claveTarje
     */ 
    public function getClaveTarje()
    {
        return $this->claveTarje;
    }

    /**
     * Set the value of claveTarje
     *
     * @return  self
     */ 
    public function setClaveTarje($claveTarje)
    {
        $this->claveTarje = $claveTarje;

        return $this;
    }
}

?>