<?php
/* Smarty version 4.2.1, created on 2022-10-15 02:39:57
  from 'C:\xampp\htdocs\proyectos\tpe\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634a015dc2a6b2_90946808',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a12703023b6f289d1f67672ab05f2d0d1335260' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\tpe\\templates\\header.tpl',
      1 => 1665794394,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634a015dc2a6b2_90946808 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo BASE_URL;?>
">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo BASE_URL;?>
assets/style.css">
    <title>La Buena Bija</title>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-light justify-content-center">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tipos">Tipos</a>
        </li>
        <?php if (!$_smarty_tpl->tpl_vars['props']->value['login']) {?>
          <li class="nav-item">
            <a class="nav-link" href="menulogin">Login</a>
          </li>
        <?php } else { ?>
          <li class="nav-item">
            <a class="nav-link" href="logout">Logout</a>
          </li>
        <?php }?>

        <li class="nav-item">
          <a class="nav-link" href="register">Registrarse</a>
        </li>
    
      </ul>
    </div>
  </div>
</nav><?php }
}
