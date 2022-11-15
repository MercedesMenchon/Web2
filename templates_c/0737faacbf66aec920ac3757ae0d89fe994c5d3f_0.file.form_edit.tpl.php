<?php
/* Smarty version 4.2.1, created on 2022-11-15 23:29:50
  from 'C:\xampp\htdocs\web2\TrabajoFinal\templates\form_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_637412de2bb399_32777891',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0737faacbf66aec920ac3757ae0d89fe994c5d3f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TrabajoFinal\\templates\\form_edit.tpl',
      1 => 1668551385,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_637412de2bb399_32777891 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- formulario de edicion de estudiante -->

<form action="editado/<?php echo $_smarty_tpl->tpl_vars['estudiante']->value->ndni;?>
" method="POST" class="my-4">
        <div class="row">
                <div class="col-9">
                        <div class="form-group">
                                <div>
                                        <label>Número de DNI:</label>
                                        <input type="number" name="ndni" id="" value="<?php echo $_smarty_tpl->tpl_vars['estudiante']->value->ndni;?>
">
                                </div>
                                <div>
                                        <label>Nombre:</label>
                                        <input type="text" name="nombre" id="" value="<?php echo $_smarty_tpl->tpl_vars['estudiante']->value->nombre;?>
">
                                </div>
                                <div>
                                        <label>Dirección:</label>
                                        <input type="text" name="direccion" id="" value="<?php echo $_smarty_tpl->tpl_vars['estudiante']->value->direccion;?>
">
                                </div>
                                <div>
                                        <label>Telefono:</label>
                                        <input type="number" name="telefono" value="<?php echo $_smarty_tpl->tpl_vars['estudiante']->value->telefono;?>
">
                                </div>
                                <div>
                                        <label>Curso:</label>
                                        <input type="number" name="curso" value="<?php echo $_smarty_tpl->tpl_vars['estudiante']->value->curso;?>
">
                                </div>
                                <div>
                                        <label>División:</label>
                                        <input type="text" name="division" value="<?php echo $_smarty_tpl->tpl_vars['estudiante']->value->division;?>
">
                                </div>


                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
                                <div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
                        <?php }?>

                        <button type="submit" class="btn btn-primary mt-2">Guardar</button>

                </div>
</form><?php }
}
