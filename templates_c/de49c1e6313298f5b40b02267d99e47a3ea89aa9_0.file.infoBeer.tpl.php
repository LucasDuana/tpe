<?php
/* Smarty version 4.2.1, created on 2022-10-14 16:50:37
  from 'C:\xampp\htdocs\proyectos\tpe\templates\infoBeer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349773df124d6_20023476',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de49c1e6313298f5b40b02267d99e47a3ea89aa9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\tpe\\templates\\infoBeer.tpl',
      1 => 1665759036,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6349773df124d6_20023476 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    
    <h2>Informacion de producto:</h2>
    <ul class="list-group">
        <li class="list-group-item">Nombre: <?php echo $_smarty_tpl->tpl_vars['beer']->value->nombre;?>
</li>
        <li class="list-group-item">Descripcion: <?php echo $_smarty_tpl->tpl_vars['beer']->value->descripcion;?>
</li>
        <li class="list-group-item">Tipo de cerveza: <?php echo $_smarty_tpl->tpl_vars['beer']->value->tipo;?>
</li>
        <li class="list-group-item">Su precio es de: <?php echo $_smarty_tpl->tpl_vars['beer']->value->precio;?>
$</li>
        
    </ul>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
