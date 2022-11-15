<?php
/* Smarty version 4.2.1, created on 2022-11-15 23:32:22
  from 'C:\xampp\htdocs\web2\TrabajoFinal\templates\form_alta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63741376af4294_48386680',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c53841b6a053ba47a814f172f00422b03f834dd4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TrabajoFinal\\templates\\form_alta.tpl',
      1 => 1668205263,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_63741376af4294_48386680 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!-- formulario de alta de estudiante -->
<h2>Ingrese en el formulario los datos de un nuevo estudiante:</h2>
<form action="estudianteagregado" method="POST" class="my-4">
        <div class="row">
                <div class="col-9">
                        <div class="form-group">
                                <div>
                                        <label>Número de DNI:</label>
                                        <input type="number" name="ndni" id="" required>
                                </div>
                                <div>
                                        <label>Nombre:</label>
                                        <input type="text" name="nombre" id="" required>
                                </div>
                                <div>
                                        <label>Dirección:</label>
                                        <input type="text" name="direccion" id="" required>
                                </div>
                                <div>
                                        <label>Telefono:</label>
                                        <input type="number" name="telefono" required>
                                </div>
                                <div>
                                        <label>Curso:</label>
                                        <input type="number" name="curso" required>
                                </div>
                                <div>
                                        <label>División:</label>
                                        <input type="text" name="division" required>
                                </div>


                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
                                <div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
                        <?php }?>

                        <button type="submit" class="btn btn-primary mt-2">Agregar</button>

                </div>
</form><?php }
}
