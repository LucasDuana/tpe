<?php
/* Smarty version 4.2.1, created on 2022-10-17 20:27:07
  from 'C:\xampp\htdocs\proyectos\tpe\templates\typelist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634d9e7bbb4110_42639974',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a0bb9f3608265f974f8900ded3a38b0f8cb84d7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\tpe\\templates\\typelist.tpl',
      1 => 1666031225,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:formaddtype.tpl' => 1,
  ),
),false)) {
function content_634d9e7bbb4110_42639974 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="list-group">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
        <a href="tipo/<?php echo $_smarty_tpl->tpl_vars['category']->value->id_tipo;?>
" class="list-group-item list-group-item" aria-current="true">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1"><?php echo $_smarty_tpl->tpl_vars['category']->value->tipo;?>
</h5>
            </div>
            <p class="mb-1"><?php echo $_smarty_tpl->tpl_vars['category']->value->descripcion;?>
</p>
            <?php if ($_smarty_tpl->tpl_vars['props']->value['login']) {?>
                <div>
                <a href="deleteType/<?php echo $_smarty_tpl->tpl_vars['category']->value->id_tipo;?>
"><button type="button" class="btn btn-danger mb-3">Delete</button>
                
            </div>
            <?php }?>
        </a>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php if ($_smarty_tpl->tpl_vars['props']->value['login']) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:formaddtype.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>


<?php }
}
