<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class CalificacionesView
{
    private $smarty;

    public function __construct()
    {
        $this->smarty = new Smarty(); // inicializo Smarty

    }

    public function showCalificaciones($calificaciones, $estudiantes, $error = null)
    {

        // asigno variables al tpl smarty
        $this->smarty->assign('calificaciones', $calificaciones);
        $this->smarty->assign('estudiantes', $estudiantes);
        $this->smarty->assign('error', $error);
        //mostrar el tpl
        $this->smarty->display('calificacionestable.tpl');
    }

    public function ShowFormularioEdicion($calificacion, $estudiantes)
    {
        $this->smarty->assign('calificacion', $calificacion);
        $this->smarty->assign('estudiantes', $estudiantes);

        //mostrar el tpl
        $this->smarty->display('form_editCalificaciones.tpl');
    }




    public function showFormAddCalificaciones($estudiantes)
    {


        $this->smarty->assign('estudiantes', $estudiantes);

        //mostrar el tpl
        $this->smarty->display('form_altacalificaciones.tpl');
    }
}
