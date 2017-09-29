<?php
/* Smarty version 3.1.29, created on 2017-09-27 21:43:53
  from "E:\PHP\UniServerZ\www\mini_shop\templates\goods_form.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59cbab19af77a7_35521132',
  'file_dependency' => 
  array (
    'b9ef3f1a64f86ee41ee4fb300c96a4b347621abe' => 
    array (
      0 => 'E:\\PHP\\UniServerZ\\www\\mini_shop\\templates\\goods_form.html',
      1 => 1506519802,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59cbab19af77a7_35521132 ($_smarty_tpl) {
?>
<h1>編輯商品</h1>
<?php echo '<script'; ?>
 src="class/ckeditor/ckeditor.js"><?php echo '</script'; ?>
>

<form action="tool.php" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">
  <div class="form-group">
    <label class="col-md-2 control-label">商品名稱</label>
    <div class="col-md-10">
      <input type="text" class="form-control" name="goods_title" id="goods_title" placeholder="請輸入商品名" value="">
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-2 control-label">商品內容</label>
    <div class="col-md-10">
      <textarea class="form-control" name="goods_content" id="goods_content" placeholder="請輸入商內容">
      </textarea>
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-2 control-label">商品價格</label>
    <div class="col-md-10">
      <input type="text" class="form-control" name="goods_price" id="goods_price" placeholder="請輸入商價格" value="">
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-2 control-label">商品圖片</label>
    <div class="col-md-10">
      <input type="file" name="goods_pic" id="goods_pic">
    </div>
  </div>

  <div class="form-group">
    <div class="col-md-offset-2 col-md-10">
      <input type="hidden" class="form-control" name="op" value="insert_goods">
      <button type="submit" class="btn-primary">儲存商品<button>
    </div>
  </div>

</form>

<?php echo '<script'; ?>
>
    CKEDITOR.replace( 'goods_content' );
<?php echo '</script'; ?>
>
<?php }
}
