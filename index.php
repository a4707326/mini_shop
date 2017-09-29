<?php
session_start();//前不可有任何輸出
////引入
require_once "header.php";



////流程控制
echo "1";
$op = isset($_REQUEST['op']) ? my_filter($_REQUEST['op'],"string") : '';
//$op = $_REQUEST['op'];
echo "$op";
switch ($op) {
  case 'user_login':
    user_login();
    header("location:{$_SERVER['PHP_SELF']}");
    exit;//結束
    break;
  case 'user_logout':
    unset($_SESSION['user_name']);
    header("location:{$_SERVER['PHP_SELF']}");
    exit;//結束
    break;


  default:
    echo "2b";
    list_goods();
    break;
}
/*
if (isset($_POST['user_name'])) {
    $smarty->assign('user_name', $_POST['user_name']);
}*/

////輸出

require_once "footer.php";

////本檔案使用函數

//商品列表
function list_goods(){
  //echo "3";
  global $smarty ,$mysqli;
    $sql     = "SELECT * FROM `goods` ORDER BY `goods_date` desc";
  $result  = $mysqli->query($sql);// or die($mysqli->connect_error);
  $i = 0;

  while ($goods = $result->fetch_assoc()) {
      $all_goods[$i]        = $goods;
      $all_goods[$i]['pic'] = get_goods_pic($goods['goods_sn'], 'thumbs');
      $i++;
  }
  $smarty->assign('all_goods', $all_goods);
}

//取得商品圖片
function get_goods_pic($goods_sn = '', $type = "goods")
{
    $filename = "uploads/{$type}/{$goods_sn}.png";
    if (file_exists($filename)) {
        return $filename;
    } else {
        $size = ($type == 'thumbs') ? "300x200" : "600x400";
        return "http://dummyimage.com/{$size}/889dd1/ffffff.gif&text=無商品照片";
    }
}
