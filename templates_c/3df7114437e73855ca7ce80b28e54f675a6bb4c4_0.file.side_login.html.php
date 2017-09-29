<?php
/* Smarty version 3.1.29, created on 2017-09-25 17:06:49
  from "E:\PHP\UniServerZ\www\mini_shop\templates\side_login.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59c8c729e93429_21913578',
  'file_dependency' => 
  array (
    '3df7114437e73855ca7ce80b28e54f675a6bb4c4' => 
    array (
      0 => 'E:\\PHP\\UniServerZ\\www\\mini_shop\\templates\\side_login.html',
      1 => 1506330403,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59c8c729e93429_21913578 ($_smarty_tpl) {
?>
<form action="index.php" method="post" role="form" class="form-horizontal">
  <div class="form-group">
    <label class="col-md-4 control-label">帳號：</label>
    <div class="col-md-8">
      <input type="text" name="user_name" value="" class="form-control" placeholder="請輸入帳號">
    </div>
  </div>
  <div class="form-group">
    <label class="col-md-4"></label>
    <div class="col-md-8">
      <input type="text" name="op" value='user_login'>
      <button type="submit" name="button" class="btn btn-primary btn-block">登入</button>
    </div>
  </div>
</form>
<?php }
}
