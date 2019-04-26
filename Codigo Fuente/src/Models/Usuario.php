<?php

class Usuario
{
    private $usuario;
    private $pass;

    /**
     * Usuario constructor.
     * @param $usuario
     * @param $pass
     */
    public function __construct($usuario, $pass)
    {
        $this->usuario = $usuario;
        $this->pass = $pass;
    }

    /**
     * @return mixed
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * @param mixed $usuario
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

    /**
     * @return mixed
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * @param mixed $pass
     */
    public function setPass($pass)
    {
        $this->pass = $pass;
    }
}


?>