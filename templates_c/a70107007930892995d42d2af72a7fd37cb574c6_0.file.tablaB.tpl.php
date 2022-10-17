<?php
/* Smarty version 4.2.1, created on 2022-10-14 17:16:49
  from 'C:\xampp\htdocs\proyectos\tpe\templates\tablaB.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63497d611137d4_13927541',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a70107007930892995d42d2af72a7fd37cb574c6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\tpe\\templates\\tablaB.tpl',
      1 => 1665760606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63497d611137d4_13927541 (Smarty_Internal_Template $_smarty_tpl) {
?>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Tipo</th>
        </tr>
    </thead>
    <tbody id="tableBody">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['beers']->value, 'beer');
$_smarty_tpl->tpl_vars['beer']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['beer']->value) {
$_smarty_tpl->tpl_vars['beer']->do_else = false;
?>
            <tr>
                <td><a href="beerInfo/<?php echo $_smarty_tpl->tpl_vars['beer']->value->id_cerveza;?>
"><?php echo $_smarty_tpl->tpl_vars['beer']->value->nombre;?>
</a></td>
                <td><?php echo $_smarty_tpl->tpl_vars['beer']->value->resumen;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['beer']->value->tipo;?>
</td>
                <td><a href="deleteBeer/<?php echo $_smarty_tpl->tpl_vars['beer']->value->id_cerveza;?>
">DELETE</td>
                <td><a href="updateBeer/<?php echo $_smarty_tpl->tpl_vars['beer']->value->id_cerveza;?>
">UPDATE</td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>

    
</table>

<button type="button" class="btn btn-primary">Crear Producto</button> <?php }
}
