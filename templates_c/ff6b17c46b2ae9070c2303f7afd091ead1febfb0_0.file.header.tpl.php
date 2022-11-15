<?php
/* Smarty version 4.2.1, created on 2022-11-15 23:27:14
  from 'C:\xampp\htdocs\web2\TrabajoFinal\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63741242b19529_18704001',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff6b17c46b2ae9070c2303f7afd091ead1febfb0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TrabajoFinal\\templates\\header.tpl',
      1 => 1668551207,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63741242b19529_18704001 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
  <base href="<?php echo BASE_URL;?>
">

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Escuela</title>
</head>

<body>
  <header>

    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="">HOME</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <?php if ((isset($_SESSION['USER_ID']))) {?>
                <a class="nav-link" aria-current="page" href="logout">(<?php echo $_SESSION['USER_EMAIL'];?>
)Cerrar sesión</a>

              <?php } else { ?>
                <a class="nav-link" aria-current="page" href="login">Ingresar</a>


              <?php }?>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="estudiantes">Lista de Estudiantes</a>
            </li>
            <?php if ((isset($_SESSION['USER_ID']))) {?>
              <li class="nav-item">

                <a class="nav-link" href="addestudiante">Agregar estudiantes</a>
              </li>
            <?php }?>
            <li class="nav-item">
              <a class="nav-link" href="calificaciones">Lista de calificaciones</a>
            </li>
            <?php if ((isset($_SESSION['USER_ID']))) {?>
              <li class="nav-item">
                <a class="nav-link" href="addcalificaciones">Agregar calificaciones</a>
              </li>
            <?php }?>
          </ul>
        </div>
      </div>
    </nav>
</header><?php }
}
