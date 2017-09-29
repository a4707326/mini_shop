<?php
/* Smarty version 3.1.29, created on 2017-09-29 21:01:36
  from "E:\PHP\UniServerZ\www\mini_shop\templates\goods_list.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59ce44304760d0_62864877',
  'file_dependency' => 
  array (
    '7fc043dc0fb35c5fff9a3e481781d33d9d07b2e7' => 
    array (
      0 => 'E:\\PHP\\UniServerZ\\www\\mini_shop\\templates\\goods_list.html',
      1 => 1506690078,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ce44304760d0_62864877 ($_smarty_tpl) {
?>
<div class="row">
  <?php
$_from = $_smarty_tpl->tpl_vars['all_goods']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_goods_0_saved_item = isset($_smarty_tpl->tpl_vars['goods']) ? $_smarty_tpl->tpl_vars['goods'] : false;
$_smarty_tpl->tpl_vars['goods'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['goods']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['goods']->value) {
$_smarty_tpl->tpl_vars['goods']->_loop = true;
$__foreach_goods_0_saved_local_item = $_smarty_tpl->tpl_vars['goods'];
?>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <a href="index.php?goods_sn=<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_sn'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['goods']->value['pic'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_title'];?>
"></a>
      <div class="caption">
        <div style="height: 60px;">
          <h3><a href="index.php?goods_sn=<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_sn'];?>
"><?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_title'];?>
</a></h3>
        </div>
        <div class="row">
          <div class="col-md-6">售價：<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_price'];?>
</div>
        </div>
      </div>
    </div>
  </div>
  <?php
$_smarty_tpl->tpl_vars['goods'] = $__foreach_goods_0_saved_local_item;
}
if ($__foreach_goods_0_saved_item) {
$_smarty_tpl->tpl_vars['goods'] = $__foreach_goods_0_saved_item;
}
?>
</div>

<!--  共有 <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 件商品 <?php echo $_smarty_tpl->tpl_vars['bar']->value;?>
 -->



<php>

</php>
<?php }
}
