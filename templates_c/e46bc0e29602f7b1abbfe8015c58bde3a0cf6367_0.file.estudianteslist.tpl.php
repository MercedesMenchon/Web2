<?php
/* Smarty version 4.2.1, created on 2022-11-13 00:01:24
  from 'C:\xampp\htdocs\web2\TrabajoFinal\templates\estudianteslist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_637025c4eda142_41881601',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e46bc0e29602f7b1abbfe8015c58bde3a0cf6367' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TrabajoFinal\\templates\\estudianteslist.tpl',
      1 => 1668204939,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:filtroestudiantes.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_637025c4eda142_41881601 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:filtroestudiantes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- tabla de estudiantes -->



<h2>Estudiantes:</h2>

<table class="table table-striped-columns">
    <thead>
        <tr>
            <td>DNI </td>
            <td> Nombre</td>
            <td> Dirección </td>
            <td> Teléfono</td>
            <td> Curso</td>
            <td> División</td>
            <?php if ((isset($_SESSION['USER_ID']))) {?>
                <td> Edicion</td>
            <?php }?>
        </tr>
    </thead>
    </tr>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['estudiantes']->value, 'estudiante');
$_smarty_tpl->tpl_vars['estudiante']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['estudiante']->value) {
$_smarty_tpl->tpl_vars['estudiante']->do_else = false;
?>
        <tr class='<?php if ($_smarty_tpl->tpl_vars['empleado']->value->ndni) {?>Editar<?php }?>
        '>
            <td><?php echo $_smarty_tpl->tpl_vars['estudiante']->value->ndni;?>
</td>
            <!--accedemos a las propiedades del objeto con ->  -->
            <td><?php echo $_smarty_tpl->tpl_vars['estudiante']->value->nombre;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['estudiante']->value->direccion;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['estudiante']->value->telefono;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['estudiante']->value->curso;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['estudiante']->value->division;?>
</td>
            <?php if ((isset($_SESSION['USER_ID']))) {?>
                <td>
                    <?php if ($_smarty_tpl->tpl_vars['estudiante']->value->ndni) {?>
                        <a href='editar/<?php echo $_smarty_tpl->tpl_vars['estudiante']->value->ndni;?>
' type="button" class="btn btn-primary">Editar</a>
                    <?php }?>
                    <a href='delete/<?php echo $_smarty_tpl->tpl_vars['estudiante']->value->ndni;?>
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
