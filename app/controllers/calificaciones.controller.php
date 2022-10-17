<?php
require_once './app/controllers/controller.php';

class CalificacionesController extends controller
{

  public function showCalificaciones()
  {
    $this->helperAutentificacion->useauth();

    $calificaciones = $this->modelCalificaciones->getAllCalificaciones();
    $estudiantes = $this->model->getAllEstudiantes();
    $this->viewsCalificaciones->showCalificaciones($calificaciones, $estudiantes);
   
  }



  public function addCalificaciones()
  {
    $this->helperAutentificacion->checkLoggedIn();

    $estudiantes = $this->model->getAllEstudiantes();
    $this->viewsCalificaciones->showFormAddCalificaciones($estudiantes);
  }
  public function agregadaCalificacion()
  {

    //BARRERA DE SEGURIDAD
    $this->helperAutentificacion->checkLoggedIn();


    $nuevondni = $_POST['NDNI'];
    $nuevaMateria = $_POST['Materia'];
    $nuevoAnio = $_POST['Anio_correspondiente'];
    $nuevoDocente = $_POST['Docente'];
    $nuevaCalificacion = $_POST['Calificacion'];

    $id = $this->modelCalificaciones->insertCalificación($nuevondni, $nuevaMateria, $nuevoAnio, $nuevoDocente, $nuevaCalificacion);
    header("Location: " . BASE_URL . "calificaciones");
  }

  public function editarCalificaciones($id)
  {
    //BARRERA DE SEGURIDAD
    $this->helperAutentificacion->checkLoggedIn();

    $calificacion = $this->modelCalificaciones->getCalificacion($id);
    $estudiantes = $this->model->getAllEstudiantes();
    $this->viewsCalificaciones->ShowFormularioEdicion($calificacion, $estudiantes);
  }

  function calificacionEditada($id)
  {

    $nuevondni = $_POST['NDNI'];
    $nuevaMateria = $_POST['Materia'];
    $nuevoAnio = $_POST['Anio_correspondiente'];
    $nuevoDocente = $_POST['Docente'];
    $nuevaCalificacion = $_POST['Calificacion'];

    $this->modelCalificaciones->editarCalificacion($id, $nuevondni, $nuevaMateria, $nuevoAnio, $nuevoDocente, $nuevaCalificacion);
    header("Location: " . BASE_URL . "calificaciones");
  }

  public function deleteCalificaciones($id)
  {

    //BARRERA DE SEGURIDAD
    $this->helperAutentificacion->checkLoggedIn();

    $this->modelCalificaciones->deletecalificaciónByID($id);
    header("Location: " . BASE_URL . "calificaciones");
  }

  public function filtrarCalificacionByDNI()
  {
    $this->helperAutentificacion->useauth();
    $NDNI = $_POST['NDNI'];

    $calificacionFiltrada = $this->modelCalificaciones->getCalificacionDNIlIKE($NDNI);
    $estudiantes = $this->model->getAllEstudiantes();
    if (!empty($calificacionFiltrada)) {

      $this->viewsCalificaciones->showCalificaciones($calificacionFiltrada, $estudiantes);
    } else {

      $calificaciones = $this->modelCalificaciones->getAllCalificaciones();
      $this->viewsCalificaciones->showCalificaciones($calificaciones, $estudiantes, "El DNI ingresado no posee calificaciones");
    }
  }

  public function filtrarCalificacionById()
  {
    $this->helperAutentificacion->useauth();
    $id = $_POST['id'];
    $estudiantes = $this->model->getAllEstudiantes();
    $calificacionFiltrada = $this->modelCalificaciones->getCalificacionIdlIKE($id);
    if (!empty($calificacionFiltrada)) {
      $estudiantes = $this->model->getAllEstudiantes();
      $this->viewsCalificaciones->showCalificaciones($calificacionFiltrada, $estudiantes);
    } else {
      $calificaciones = $this->modelCalificaciones->getAllCalificaciones();
      $this->viewsCalificaciones->showCalificaciones($calificaciones, $estudiantes, "No se ha encontrado calificaciones que coincidan con el número de comprobante ingresado.");
    }
  }
}
