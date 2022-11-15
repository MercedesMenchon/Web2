<?php
/* Smarty version 4.2.1, created on 2022-11-13 00:01:28
  from 'C:\xampp\htdocs\web2\TrabajoFinal\templates\calificacionestable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_637025c86e92e2_71311322',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7820f6d8acf66959b639ac9e60b63eb25f7359c1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TrabajoFinal\\templates\\calificacionestable.tpl',
      1 => 1668205624,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:filtrocalificaciones.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_637025c86e92e2_71311322 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>




<!-- tabla de estudiantes -->

<h1>ESCUELA</h1>

<?php $_smarty_tpl->_subTemplateRender("file:filtrocalificaciones.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div>
    <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
        <div class="alert alert-danger" role="alert"> <?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
    <?php }?>
</div>

<h2>Calificaciones:</h2>

<table class="table table-striped-columns">
    <thead>
        <tr>
            <td>ID Comprobante </td>
            <td>DNI </td>
            <td>Materia</td>
            <td>Año correspondiente </td>
            <td>Docente</td>
            <td>Calificación</td>
            <?php if ((isset($_SESSION['USER_ID']))) {?>
                <td> Edicion</td>
            <?php }?>

    </thead>
    </tr>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['calificaciones']->value, 'calificacion');
$_smarty_tpl->tpl_vars['calificacion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['calificacion']->value) {
$_smarty_tpl->tpl_vars['calificacion']->do_else = false;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['calificacion']->value->id;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['calificacion']->value->ndni;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['calificacion']->value->materia;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['calificacion']->value->anio_correspondiente;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['calificacion']->value->docente;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['calificacion']->value->calificacion;?>
</td>
            <?php if ((isset($_SESSION['USER_ID']))) {?>
                <td> <?php if ($_smarty_tpl->tpl_vars['calificacion']->value->ndni) {?>
                        <a href='editarcalificacion/<?php echo $_smarty_tpl->tpl_vars['calificacion']->value->id;?>
' type="button" class="btn btn-primary">Editar</a>
                    <?php }?>
                    <a href='deletecalificacion/<?php echo $_smarty_tpl->tpl_vars['calificacion']->value->id;?>
' type="button" class="btn btn-primary">Borrar</a>
                </td>
            <?php }?>
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</table>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
