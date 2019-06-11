<?php require_once __DIR__."/autoload/autoload.php";

if(!isset($_SESSION['name_id']))
{
    echo "<script>alert('Bạn phải đăng nhập mới dungf được tính năng này');location.href='showcate.php' </script>";
}
$id=intval(getInput('id'));
 $product=$db->fetchID("product",$id);
 if(! isset($_SESSION['cart'][$id]))
 {
     $_SESSION['cart'][$id]['name']=$product['name'];
     $_SESSION['cart'][$id]['thunbar']=$product['thunbar'];
    // $_SESSION['cart'][$id]['price']=$product['price'];
     $_SESSION['cart'][$id]['qty']=1;
     $_SESSION['cart'][$id]['price']=$product['price']*(100-$product['sale'])/100;
 }
 else
 {
     $_SESSION['cart'][$id]['qty'] +=1;
 }
 echo "<script>alert('Bạn đã thêm hàng thành công');location.href='giohang.php' </script>";



?>
