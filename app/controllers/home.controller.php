<?php
require_once './app/controllers/controller.php';

class HomeController extends controller
{


    public function showHome()
    {
        $this->helperAutentificacion->useauth();

        $this->viewsHome->showHome();
    }
}
