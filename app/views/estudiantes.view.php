<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class EstudiantesView
{
  private $smarty;

  public function __construct()
  {
    $this->smarty = new Smarty(); // inicializo Smarty

  }

  public function showEstudiante($estudiantes, $error = null)
  {

    // asigno variables al tpl smarty

    $this->smarty->assign('estudiantes', $estudiantes);
    $this->smarty->assign('error', $error);

    //mostrar el tpl
    $this->smarty->display('estudianteslist.tpl');
  }

  public function showFormularioEdición($estudiante, $error = null)
  { // asigno variables al tpl smarty
    $this->smarty->assign('estudiante', $estudiante);
    $this->smarty->assign('error', $error);
    $this->smarty->display('form_edit.tpl');
  }

  public function showFormularioadd($error = null)
  {
    $this->smarty->assign('error', $error);
    $this->smarty->display('form_alta.tpl');
  }
}
