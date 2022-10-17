<?php

class AutenticacionHelper
{

    public function checkLoggedIn()
    {
        session_start();
        if (!isset($_SESSION['IS_LOGGED'])) {
            header("Location: " . BASE_URL . 'login');
            die();
        }
    }

    public function useauth()
    {
        session_start();
    }
}
