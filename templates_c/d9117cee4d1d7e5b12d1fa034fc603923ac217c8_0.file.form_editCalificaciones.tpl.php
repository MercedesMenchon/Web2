<?php
/* Smarty version 4.2.1, created on 2022-11-15 23:34:54
  from 'C:\xampp\htdocs\web2\TrabajoFinal\templates\form_editCalificaciones.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6374140eead7d7_05177252',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9117cee4d1d7e5b12d1fa034fc603923ac217c8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TrabajoFinal\\templates\\form_editCalificaciones.tpl',
      1 => 1668551653,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_6374140eead7d7_05177252 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!-- formulario de alta de calificaciones -->
<form action="calificacioneditada/<?php echo $_smarty_tpl->tpl_vars['calificacion']->value->id;?>
" method="POST" class="my-4">
        <div class="row">
                <div class="col-9">
                        <div class="form-group">
                                <div>
                                        <label>Número de DNI:</label>
                                        <select name="ndni" value="<?php echo $_smarty_tpl->tpl_vars['calificacion']->value->ndni;?>
">
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['estudiantes']->value, 'estudiante');
$_smarty_tpl->tpl_vars['estudiante']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['estudiante']->value) {
$_smarty_tpl->tpl_vars['estudiante']->do_else = false;
?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['estudiante']->value->ndni;?>
"><?php echo $_smarty_tpl->tpl_vars['estudiante']->value->ndni;?>
</option>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </select>
                                </div>
                                <div>
                                        <label>Materia:</label>
                                        <input type="text" name="materia" id="" value="<?php echo $_smarty_tpl->tpl_vars['calificacion']->value->materia;?>
">
                                </div>
                                <div>
                                        <label>Año correspondiente:</label>
                                        <input type="number" name="anio_correspondiente" id=""
                                                value="<?php echo $_smarty_tpl->tpl_vars['calificacion']->value->anio_correspondiente;?>
">
                                </div>
                                <div>
                                        <label>Docente:</label>
                                        <input type="text" name="docente" value="<?php echo $_smarty_tpl->tpl_vars['calificacion']->value->docente;?>
">
                                </div>
                                <div>
                                        <label>Calificación:</label>
                                        <input type="number" name="calificacion" value="<?php echo $_smarty_tpl->tpl_vars['calificacion']->value->calificacion;?>
">
                                </div>

                        </div>


                        <button type="submit" class="btn btn-primary mt-2">Editar</button>
                        <button class="btn btn-primary mt-2">Volver</button>
                </div>
</form><?php }
}
