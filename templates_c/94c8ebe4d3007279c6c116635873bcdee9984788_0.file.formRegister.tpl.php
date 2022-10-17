<?php
/* Smarty version 4.2.1, created on 2022-10-15 01:08:38
  from 'C:\xampp\htdocs\proyectos\tpe\templates\formRegister.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349ebf6c5b055_59052304',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94c8ebe4d3007279c6c116635873bcdee9984788' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\tpe\\templates\\formRegister.tpl',
      1 => 1665788472,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6349ebf6c5b055_59052304 (Smarty_Internal_Template $_smarty_tpl) {
?><form  action="registeruser" method="POST">

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre de usuario</label>
        <input name="username" required type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input name="email" required type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input name="password" required type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Registrarse</button>
</form><?php }
}
