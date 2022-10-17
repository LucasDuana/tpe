<?php
/* Smarty version 4.2.1, created on 2022-10-17 15:47:26
  from 'C:\xampp\htdocs\proyectos\tpe\templates\formupdatebeer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634d5ceebf8a96_69536335',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c813283232e8e059fc6bdd1866fbc7bd5190f45' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\tpe\\templates\\formupdatebeer.tpl',
      1 => 1665978957,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634d5ceebf8a96_69536335 (Smarty_Internal_Template $_smarty_tpl) {
?><h3>¿Vas a cambiar el producto?</h3>
<div class="containerform">
    <form action="changeBeer/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" method=post>
    <div class="mb-3">
        <label for="exampleInputText" class="form-label">Nombre del producto</label>
        <input name ="name" type="text" class="form-control" id="exampleInputText" required>
    </div>
    <div class="mb-3">
        <label for="exampleInputText" class="form-label">Descripcion del producto</label>
        <input name="summary" type="text" class="form-control" id="exampleInputText" required >
    </div>
    <div class="mb-3">
        <label for="exampleInputNumber" class="form-label">Precio</label>
        <input name="price"type="number" class="form-control" id="exampleInputNumber" required>
    </div>
    <select name="idtype" class="form-select" aria-label="Default select example" required>
        <option selected>Que tipo es:</option>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value->id_tipo;?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value->tipo;?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
    <button id="botonadd" type="submit" class="btn btn-primary">Editar</button>
    </form>

</div>
<?php }
}
