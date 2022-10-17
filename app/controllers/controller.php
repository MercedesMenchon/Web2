<?php
require_once './app/models/estudiantes.model.php';
require_once './app/views/estudiantes.view.php';
require_once './app/models/calificaciones.model.php';
require_once './app/views/calificaciones.view.php';
require_once './app/views/home.view.php';
require_once './app/views/autenticacion.view.php';
require_once './app/models/usuarios.model.php';
require_once './app/helpers/autentificacion.helper.php';


class controller
{
    protected $model;
    protected $views;
    protected $modelCalificaciones;
    protected $viewsCalificaciones;
    protected $viewsHome;
    protected $viewsAutenticacion;
    protected $modelUsuarios;
    protected $helperAutentificacion;


    public function __construct()
    {
        $this->model = new EstudiantesModel(); //tareas del modelo
        $this->views = new EstudiantesView(); //tarea de la vista
        $this->modelCalificaciones = new CalificacionesModel();
        $this->viewsCalificaciones = new CalificacionesView();
        $this->viewsHome = new HomeView();
        $this->viewsAutenticacion = new autenticacionView();
        $this->modelUsuarios = new UsuariosModel();
        $this->helperAutentificacion = new AutenticacionHelper();
    }
}
