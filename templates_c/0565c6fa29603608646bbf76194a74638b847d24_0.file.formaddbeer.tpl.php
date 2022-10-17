<?php
/* Smarty version 4.2.1, created on 2022-10-17 21:08:00
  from 'C:\xampp\htdocs\proyectos\tpe\templates\formaddbeer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634da8101b14b2_44360136',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0565c6fa29603608646bbf76194a74638b847d24' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\tpe\\templates\\formaddbeer.tpl',
      1 => 1666033657,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634da8101b14b2_44360136 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['props']->value['login']) {?>
<div class="containerform">
    <form action="createBeer" method=post>
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
    
    <button id="botonadd" type="submit" class="btn btn-primary">Agregar</button>
    </form>
</div>
    <?php }?>



<?php }
}
