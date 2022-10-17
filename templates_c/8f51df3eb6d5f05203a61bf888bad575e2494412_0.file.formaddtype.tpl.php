<?php
/* Smarty version 4.2.1, created on 2022-10-17 20:28:54
  from 'C:\xampp\htdocs\proyectos\tpe\templates\formaddtype.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634d9ee69e9624_21203271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f51df3eb6d5f05203a61bf888bad575e2494412' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\tpe\\templates\\formaddtype.tpl',
      1 => 1666031332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634d9ee69e9624_21203271 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <form action="createType" method=post>
        <div class="mb-3">
            <label for="exampleInputText" class="form-label">Nombre del tipo de producto</label>
            <input name ="name" type="text" class="form-control" id="exampleInputText" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputText" class="form-label">Descripcion del tipo de producto</label>
            <input name="summary" type="text" class="form-control" id="exampleInputText" required >
        </div>
        <button id="botonadd" type="submit" class="btn btn-primary">Agregar Tipo</button>
    </form>
<?php }
}
