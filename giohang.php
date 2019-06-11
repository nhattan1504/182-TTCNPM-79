<?php require_once __DIR__."/autoload/autoload.php";

if(!isset($_SESSION['cart'])||count($_SESSION['cart'])==0)
{
    echo "<script> alert('khong co hang trong gio');location.href='showcate.php'</script>";
}

?>
<?php require_once __DIR__. "/layouts/header.php"; ?>
<h1>
    Thông Tin Đơn Hàng
</h1>

<script src="<?php echo base_url() ?>public/frontend/js/jquery-3.2.1.min.js"></script>

<div class="table-responsive" >
        <?php if(isset($_SESSION['success'])): ?>
        <div class="alert alert-success">
            <strong>Success
            </strong> <?php echo $_SESSION['success'];unset($_SESSION['success'])?></div>
        <?php endif ?>
        <div class="row">
            <div class="col span-8-of-10">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên sản phẩm</th>
                            <th>Hình ảnh</th>
                            <th>Số lượng</th>
                            <th>Giá</th>
                            <th>Tổng tiền</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody id="tbody" class="tbody">
                        <?php $sum=0;?>
                        <?php $stt=1; foreach($_SESSION['cart'] as $key => $value):?>
                        <tr>
                            <th>
                                <?php echo $stt?></td>
                            <th>
                                <?php echo $value['name'] ?></td>
                            <th>
                                <img src="<?php echo uploads() ?>/product/<?php echo $value['thunbar']?>" width="80px">
                            </th>
                            <th>
                                <input type="number" name="qty" value="<?php echo $value['qty']?>" class="form-control qty"
                                    id="qty" size="30">
                            </th>
                            <th>
                                <?php echo $value['price']?>
                            </th>
                            <th>
                                <?php echo $value['qty']*$value['price']?>
                            </th>
                            <th>
                                <a href="remove.php?key=<?php echo $key?>" class="btn btn-danger"> <i
                                        class="fa fa-remove"></i>Remove</a>
                                <a href="#" class="btn btn-info updatecart" data-key=<?php echo $key?>><i
                                        class="fa fa-refresh"></i>Update</a>
                            </th>
                        </tr>
                        <?php $sum+=$value['price']*$value['qty'];$_SESSION['tongtien']=$sum ?>
                        <?php $stt++;endforeach ?>
                    </tbody>
                </table>
            </div>
            <div class="col span-2-of-10">
                    <div class="col-md-5 pull-left">
                        <ul class="list-group">
                            <div class="clearfix"></div>
                            <li class="list-group-item">
                                Số tiền:    
                                <span >
                                    <?php echo formatPrice($_SESSION['tongtien'])?>
                                </span>
                            </li>
                            <li class="list-group-item">
                                Thuế VTA:
                                <span >
                                    10%
                                </span>

                            </li>
                            <li class="list-group-item">
                                Tổng tiền
                                <span>
                                    <?php $_SESSION['total']=$_SESSION['tongtien']*110/100 ;echo formatPrice($_SESSION['total'])?>
                                </span>

                            </li>
                            <li>
                                <a href="thanhtoan.php" class="btn-success">Thanh toán</a>
                            </li>
                        </ul>
                </div>
            </div>
            <div class="col span-4-of-9">
            </div>
            <div class="col span-2-of-9">
                <a href="showcate.php" class="btn-success"> Tiếp tục mua hàng</a>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__. "/layouts/footer.php"; ?>
