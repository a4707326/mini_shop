<?php
/* Smarty version 3.1.29, created on 2017-09-25 17:38:38
  from "E:\PHP\UniServerZ\www\mini_shop\templates\side_tools.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59c8ce9e12fe57_95131057',
  'file_dependency' => 
  array (
    'f7bed2145405849fafb82e0f7d7bc120c122f62a' => 
    array (
      0 => 'E:\\PHP\\UniServerZ\\www\\mini_shop\\templates\\side_tools.html',
      1 => 1506332083,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59c8ce9e12fe57_95131057 ($_smarty_tpl) {
?>
<div class="alert alert-success">
  <?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
您好！歡迎光臨<?php echo $_smarty_tpl->tpl_vars['shop_name']->value;?>

</div>
<a href="index.php" class="btn btn-block btn-primary">回首頁</a>
<a href="tool.php?op=goods_form" class="btn btn-block btn-success">發布商品</a>
<a href="index.php?op=user_logout" class="btn btn-block btn-danger">登出</a>
<?php }
}
