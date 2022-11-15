<?php
/* Smarty version 4.2.1, created on 2022-11-13 00:01:24
  from 'C:\xampp\htdocs\web2\TrabajoFinal\templates\filtroestudiantes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_637025c4ef51f1_34351749',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f8ffdc8785b46ee42638d393a7cd6ce25ba6af8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TrabajoFinal\\templates\\filtroestudiantes.tpl',
      1 => 1668205848,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_637025c4ef51f1_34351749 (Smarty_Internal_Template $_smarty_tpl) {
?><h4>Filtrar estudiante:</h4>
<form action="filtroestudiante" method="POST" class="my-4">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <div>
                    <label>Número de DNI:</label>
                    <input type="number" name="ndni" id="" required>
                </div>

                <button type="submit" class="btn btn-primary mt-2">Filtrar</button>
                <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
                    <div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
                <?php }?>
</table><?php }
}
