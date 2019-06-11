<?php require_once __DIR__."/autoload/autoload.php";


$user=$db->fetchID("users",intval($_SESSION['name_id']));
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $data=
    [
        'amount' =>$_SESSION['total'],
        'user_id'=>$_SESSION['name_id'],
        'note'=>postInput("note")
    ];
    $idtran=$db->insert("transaction",$data);
    if($idtran>0)
    {
        foreach($_SESSION['cart'] as $key=>$value)
        {
            $data2=
            [
              'transaction_id'=>$idtran,
              'product_id'=>$key,
              'qty'=>$value['qty'],
              'price'=>$value['price']  
            ];
            
            $id_insert=$db->insert("orders",$data2);
            
        }
        
        $_SESSION['success']="Luu thông tin đơn hàng thành công, chúng tôi sẽ liên hệ khi giao hàng";
        header("location:thong-bao.php");
    }
}


?>
<?php require_once __DIR__. "/layouts/header.php"; ?>

<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/frontend/css/style_thanh_toan.css">

<h1 class="title-tt">
    Thanh toán đơn hàng
</h1>
<div>
    <div class="col span-1-of-4"></div>
    <div class="col span-2-of-4">
        <form action="" method="POST" class="form-horizontal" role="form" style="margin-top: 20px">
            <div class="form-group-tt">
                <div class="input-title">
                    Họ và tên
                </div>
                <div class="input-tt">
                    <input type="text" class="form-tt" id="inputName" placeholder="" name="name" value="<?php echo $user['name']?>">
                </div>
            <div class="form-group-tt">
                <div class="input-title">
                    Email
                </div>
                <div class="input-tt">
                    <input type="text" class="form-tt" id="inputName" placeholder="" name="email" value="<?php echo $user['email']?>">

                </div>
            </div>
            <div class="form-group-tt">
                <div class="input-title">
                    Phone
                </div>
                <div class="input-tt">
                    <input type="number" class="form-tt" id="inputName" placeholder="" name="phone" value="<?php echo $user['phone']?>">
                </div>
            </div>


            <div class="form-group-tt">
                <div class="input-title">
                    Address
                </div>
                <div class="input-tt">
                    <input type="text" class="form-tt" id="inputName" placeholder="" name="address" value="<?php echo $user['address']?>">
                </div>
            </div>
            <div class="form-group-tt">
                <div class="input-title">
                    Ghi chú
                </div>
                
                <div class="input-tt">
                    <input type="text" class="form-tt" id="inputName" placeholder="" name="note" value="">
                </div>
            </div>
            <div class="button-tt">
                <button type="" class="btn-success" style="">
                    Thanh toán
                </button>
            </div>
        </form>

    </div>

    <div class="col span-1-of-4"></div>
    <div class="clearfix"></div>
</div>
<?php require_once __DIR__. "/layouts/footer.php"; ?>
