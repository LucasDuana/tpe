<?php
/* Smarty version 4.2.1, created on 2022-10-17 20:55:16
  from 'C:\xampp\htdocs\proyectos\tpe\templates\formupdatetype.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634da514f0e7d6_03572035',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3d809f5bf7c7cc059d51dfa9bf0dbccdc8aa5dd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\tpe\\templates\\formupdatetype.tpl',
      1 => 1666032915,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634da514f0e7d6_03572035 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['props']->value['login']) {?>
    <h3>¿Queres modificar el tipo de producto?</h3>
    <form action="updateType/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" method=post>
        <div class="mb-3">
            <label for="exampleInputText" class="form-label">Nombre del tipo de producto</label>
            <input name ="name" type="text" class="form-control" id="exampleInputText" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputText" class="form-label">Descripcion del tipo de producto</label>
            <input name="summary" type="text" class="form-control" id="exampleInputText" required >
        </div>
        <button id="botonadd" type="submit" class="btn btn-primary">Editar Tipo</button>
    </form>
    
<?php }
}
}
