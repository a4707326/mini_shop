<?php
/* Smarty version 3.1.29, created on 2017-09-25 17:38:37
  from "E:\PHP\UniServerZ\www\mini_shop\templates\index_side.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59c8ce9df1be86_08818665',
  'file_dependency' => 
  array (
    '4ce644daea78c88b844e91938afa614beaa231ea' => 
    array (
      0 => 'E:\\PHP\\UniServerZ\\www\\mini_shop\\templates\\index_side.html',
      1 => 1506331933,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:side_tools.html' => 1,
    'file:side_login.html' => 1,
  ),
),false)) {
function content_59c8ce9df1be86_08818665 ($_smarty_tpl) {
?>
<div class="panel panel-primary">
  <div class="panel-heading">功能表</div>
  <div class="panel-body">
    <?php if (isset($_smarty_tpl->tpl_vars['user_name']->value)) {?> <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:side_tools.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
; <?php } else { ?> <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:side_login.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
; <?php }?>


  </div>
</div>
<?php }
}
