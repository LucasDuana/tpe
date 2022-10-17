<?php
/* Smarty version 4.2.1, created on 2022-10-14 21:17:22
  from 'C:\xampp\htdocs\proyectos\tpe\templates\itemsbycategory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349b5c27ad7b5_99839727',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c730bcf6bd20fba4403352457a76ceac019e171' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\tpe\\templates\\itemsbycategory.tpl',
      1 => 1665775037,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6349b5c27ad7b5_99839727 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h2>Nuestra lista de productos en la categoria <?php echo $_smarty_tpl->tpl_vars['categoria']->value->tipo;?>
:</h2>
<ul class="list-group"> 
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['beers']->value, 'beer');
$_smarty_tpl->tpl_vars['beer']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['beer']->value) {
$_smarty_tpl->tpl_vars['beer']->do_else = false;
?>
        <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['beer']->value->nombre;?>
</li> 
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    


</ul>
<?php }
}
