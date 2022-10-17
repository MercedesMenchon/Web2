<?php
require_once './app/controllers/controller.php';

class AutentificacionController extends controller
{

    public function ShowLogin()
    {
        $this->viewsAutenticacion->showLogin();
    }


    public function login()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $usuario = $this->modelUsuarios->getUsuarioByEmail($email);

        // verifico que el usuario existe y que las contraseñas son iguales
        if ($usuario && password_verify($password, $usuario->password)) {

            // inicio una session para este usuario
            session_start();
            $_SESSION['USER_ID'] = $usuario->id;
            $_SESSION['USER_EMAIL'] = $usuario->email;
            $_SESSION['IS_LOGGED'] = true;

            header("Location: " . BASE_URL);
        } else {
            // si los datos son incorrectos muestro el form con un error
            $this->viewsAutenticacion->showLogin("El usuario o la contraseña no existe.");
        }
    }


    public function logout()
    {
        session_start();
        session_destroy();
        header("Location: " . BASE_URL);
    }
}
