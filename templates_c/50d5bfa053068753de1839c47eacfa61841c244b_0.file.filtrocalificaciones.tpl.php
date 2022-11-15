<?php
/* Smarty version 4.2.1, created on 2022-11-13 00:01:28
  from 'C:\xampp\htdocs\web2\TrabajoFinal\templates\filtrocalificaciones.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_637025c8709fa1_64828692',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50d5bfa053068753de1839c47eacfa61841c244b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TrabajoFinal\\templates\\filtrocalificaciones.tpl',
      1 => 1668205881,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_637025c8709fa1_64828692 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="filtroCalificacionByEstudiante" method="POST" class="my-4">
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

                    <button type="submit" class="btn btn-primary mt-2">Filtrar por dni</button>
                </div>
</form>


<form action="filtroCalificacionByID" method="POST" class="my-4">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <div>
                    <label>Número de comprobante:</label>
                    <input type="text" name="id" id="" required>

                    <button type="submit" class="btn btn-primary mt-2">Filtrar por comprobante</button>
                </div>
</form><?php }
}
