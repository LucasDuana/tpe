<?php
/* Smarty version 4.2.1, created on 2022-10-15 00:50:21
  from 'C:\xampp\htdocs\proyectos\tpe\templates\formLogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349e7addd9672_23747841',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a7670ba92acd866effeed219e6b4e16f70dcb2d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\tpe\\templates\\formLogin.tpl',
      1 => 1665787817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6349e7addd9672_23747841 (Smarty_Internal_Template $_smarty_tpl) {
?><form  action="validatelogin" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input name="email" required type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input name="password" required type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input required type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Mantener sesion iniciada</label>
  </div>
  <button type="submit" class="btn btn-primary">Iniciar Sesion</button>
</form><?php }
}
