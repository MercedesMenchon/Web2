<?php
/* Smarty version 4.2.1, created on 2022-11-15 00:06:14
  from 'C:\xampp\htdocs\web2\TrabajoFinal\templates\formularioLogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6372c9e63ae152_76606554',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '236bf509a16edf60f1a5f6125e19646280715bfa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TrabajoFinal\\templates\\formularioLogin.tpl',
      1 => 1665953686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_6372c9e63ae152_76606554 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<form action="login" method="POST" class="my-4">
  <div class="row">
    <div class="col-9">
      <div class="form-group">

        <div>
          <label>Email:</label>
          <input type="text" name="email" id="" required>
        </div>
        <div>
          <label>Clave:</label>
          <input type="password" name="password" id="" required>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
          <div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
        <?php }?>

        <button type="submit" class="btn btn-primary mt-2">Iniciar sesión</button>

      </div>
</form><?php }
}
