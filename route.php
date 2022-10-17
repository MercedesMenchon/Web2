<?php
require_once './app/controllers/estudiantes.controller.php';
require_once './app/controllers/calificaciones.controller.php';
require_once './app/controllers/home.controller.php';
require_once './app/controllers/autenticacion.controler.php';


define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

//Si esta vacio va al home y si no hace lo que se le indica
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}
$AutenticacionController = new AutentificacionController();

$params = explode('/', $action); // genera un arreglo
// instancio el unico controller que existe por ahora


$homeController = new HomeController();


switch ($params[0]) {
    case 'home':

        $homeController->showHome();
        break;
    case 'login':
        $AutenticacionController = new AutentificacionController();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $AutenticacionController->login();
        } else {
            $AutenticacionController->ShowLogin();
        }
        break;
    case 'logout':
        $AutenticacionController = new AutentificacionController();
        $AutenticacionController->logout();
        break;
    case 'estudiantes':
        $estudiantesController = new EstudiantesController();
        $estudiantesController->showEstudiantes();
        break;
    case 'addestudiante':
        $estudiantesController = new EstudiantesController();
        $estudiantesController->addEstudiante();
        break;
    case 'estudianteagregado':
        $estudiantesController = new EstudiantesController();
        $estudiantesController->agregadoEstudiante();
        break;
    case 'delete':
        $estudiantesController = new EstudiantesController();
        $id = $params[1];
        $estudiantesController->deleteEstudiante($id);
        break;
    case 'editar':
        $estudiantesController = new EstudiantesController();
        $id = $params[1];
        $estudiantesController->editarEstudiantes($id);
        break;
    case 'editado':
        $estudiantesController = new EstudiantesController();
        $id = $params[1];
        $estudiantesController->estudianteEditado($id);
        break;
    case 'filtroestudiante':
        $estudiantesController = new EstudiantesController();
        $estudiantesController->filtrarEstudiantes();
        break;
    case 'calificaciones':
        $calificacionesController = new CalificacionesController();
        $calificacionesController->showCalificaciones();
        break;
    case 'addcalificaciones':
        $calificacionesController = new CalificacionesController();
        $calificacionesController->addCalificaciones();
        break;
    case 'calificacionagregada':
        $calificacionesController = new CalificacionesController();
        $calificacionesController->agregadaCalificacion();
        break;
    case 'editarcalificacion':
        $calificacionesController = new CalificacionesController();
        $id = $params[1];
        $calificacionesController->editarCalificaciones($id);
        break;
    case 'calificacioneditada':
        $calificacionesController = new CalificacionesController();
        $id = $params[1];
        $calificacionesController->calificacionEditada($id);
        break;
    case 'deletecalificacion':
        $calificacionesController = new CalificacionesController();
        $id = $params[1];
        $calificacionesController->deleteCalificaciones($id);
        break;
    case 'editadocalificacion':
        $calificacionesController = new CalificacionesController();
        $calificacionesController->deleteCalificaciones($id);
        break;
    case 'filtroCalificacionByEstudiante':
        $calificacionesController = new CalificacionesController();
        $calificacionesController->filtrarCalificacionByDNI();
        break;
    case 'filtroCalificacionByID':
        $calificacionesController = new CalificacionesController();
        $calificacionesController->filtrarCalificacionById();
        break;

    default:
        echo "404 not found";
        # code...
        break;
}
