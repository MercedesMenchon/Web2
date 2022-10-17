<?php
require_once './app/controllers/controller.php';

class EstudiantesController extends controller
{


    public function showEstudiantes()
    {
        $this->helperAutentificacion->useauth();

        $estudiantes = $this->model->getAllEstudiantes();
        if (!empty($estudiantes)) {
            $this->views->showEstudiante($estudiantes);
        } else {
            $this->views->showEstudiante('No hay estudiantes registrados');
        }
    }

    function addEstudiante()
    {

        //BARRERA DE SEGURIDAD
        $this->helperAutentificacion->checkLoggedIn();

        $this->views->showFormularioadd();
    }

    function agregadoEstudiante()
    {

        $this->helperAutentificacion->useauth();
        $nuevondni = $_POST['NDNI'];
        $nuevoNombre = $_POST['Nombre'];
        $nuevaDireccion = $_POST['Direccion'];
        $nuevotelefono = $_POST['Telefono'];
        $nuevoCurso = $_POST['Curso'];
        $nuevaDivision = $_POST['Division'];

        if ((empty($this->model->idYaIngresado($nuevondni)))) {

            $id = $this->model->insertEstudiante($nuevondni, $nuevoNombre, $nuevaDireccion, $nuevotelefono, $nuevoCurso, $nuevaDivision);
            header("Location: " . BASE_URL . "estudiantes");
        } else {

            $this->views->showFormularioadd("El DNI que se indica, ya ha sido ingresado");
        }
    }



    function deleteEstudiante($NDNI)
    {

        //BARRERA DE SEGURIDAD
        $this->helperAutentificacion->checkLoggedIn();

        $this->model->deleteEstudianteByNDNI($NDNI);
        header("Location: " . BASE_URL . "estudiantes");
    }

    function editarEstudiantes($NDNIEditar)
    {

        //BARRERA DE SEGURIDAD
        $this->helperAutentificacion->checkLoggedIn();
        $estudiante = $this->model->getEstudiante($NDNIEditar);
        $this->views->ShowFormularioEdición($estudiante);
    }


    function estudianteEditado($NDNIEditar)
    {

        $nuevondni = $_POST['NDNI'];
        $nuevoNombre = $_POST['Nombre'];
        $nuevaDireccion = $_POST['Direccion'];
        $nuevotelefono = $_POST['Telefono'];
        $nuevoCurso = $_POST['Curso'];
        $nuevaDivision = $_POST['Division'];
        if (!empty($nuevondni) && !empty($nuevoNombre) && !empty($nuevaDireccion) && !empty($nuevotelefono) && !empty($nuevaDivision) && !empty($nuevoCurso)) {
            $DNIduplicado = $this->model->idYaIngresado($nuevondni);
            if (empty($DNIduplicado) || $NDNIEditar == $nuevondni) {

                $this->model->editarEstudiante($NDNIEditar, $nuevondni, $nuevoNombre, $nuevaDireccion, $nuevotelefono, $nuevoCurso, $nuevaDivision);
                header("Location: " . BASE_URL . "estudiantes");
            } else {

                $estudiante = $this->model->getEstudiante($NDNIEditar);
                $this->views->ShowFormularioEdición($estudiante, "El DNI que quiere agregar ya forma parte de la base de datos.");
            }
        } else {

            $estudiante = $this->model->getEstudiante($NDNIEditar);
            $this->views->ShowFormularioEdición($estudiante, "Debe completar todos los campos para poder añadir un estudiante.");
        }
    }




    function filtrarEstudiantes()
    {
        $this->helperAutentificacion->useauth();
        $NDNI = $_POST['NDNI'];
        $estudianteFiltrado = $this->model->getEstudiantelIKE($NDNI);
        if (!empty($estudianteFiltrado)) {
            $this->views->showEstudiante($estudianteFiltrado);
        } else {
            $this->views->showEstudiante($estudianteFiltrado, 'No hay estudiantes registrados con el DNI ingresado');
        }
    }
}
