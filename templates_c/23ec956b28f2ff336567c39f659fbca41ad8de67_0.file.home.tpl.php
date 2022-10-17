<?php
/* Smarty version 4.2.1, created on 2022-10-14 15:14:27
  from 'C:\xampp\htdocs\proyectos\tpe\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634960b31b9676_33515466',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23ec956b28f2ff336567c39f659fbca41ad8de67' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\tpe\\templates\\home.tpl',
      1 => 1665753265,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_634960b31b9676_33515466 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<table class="table">
    <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
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
                <td><?php echo $_smarty_tpl->tpl_vars['beer']->value->descripcion;?>
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

<button type="button" class="btn btn-primary">Crear Producto</button>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
