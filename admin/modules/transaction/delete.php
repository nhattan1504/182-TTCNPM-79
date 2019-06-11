<?php 
$open = "product";
require_once __DIR__."/../../autoload\autoload.php";
 $id=intval(getInput('id'));
 $Edittransaction=$db->fetchID("transaction",$id);
 if(empty($Edittransaction))
 {
     $_SESSION['error']="Dữ liệu k tồn tại";
     redirectAdmin("transaction");
 }
 $num=$db->delete("transaction",$id);
 if($num>0)
 {
    $_SESSION['success']="Xóa thành công";
    redirectAdmin("transaction");
 }
 else
 {
    $_SESSION['eror']="Xóa thất bại";
}
 ?>
