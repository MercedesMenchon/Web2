<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class UsuarioView
{
    private $smarty;

    public function __construct()
    {
        $this->smarty = new Smarty(); // inicializo Smarty

    }
}
