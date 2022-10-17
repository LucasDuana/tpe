<?php
/* Smarty version 4.2.1, created on 2022-10-15 02:47:55
  from 'C:\xampp\htdocs\proyectos\tpe\templates\beertable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634a033b74cdc6_08458484',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b663aae891cbe6e2b3dbdec84d44b094f7f751c5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\tpe\\templates\\beertable.tpl',
      1 => 1665794874,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/formaddbeer.tpl' => 1,
  ),
),false)) {
function content_634a033b74cdc6_08458484 (Smarty_Internal_Template $_smarty_tpl) {
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
                <?php if ($_smarty_tpl->tpl_vars['props']->value['login']) {?>
                    <td><a href="deleteBeer/<?php echo $_smarty_tpl->tpl_vars['beer']->value->id_cerveza;?>
"><button type="button" class="btn btn-danger">DELETE</button></td>
                    <td><a href="updateBeer/<?php echo $_smarty_tpl->tpl_vars['beer']->value->id_cerveza;?>
"><button type="button" class="btn btn-secondary">UPDATE</button></td>
                <?php }?>

            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table>

<?php $_smarty_tpl->_subTemplateRender("file:templates/formaddbeer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
