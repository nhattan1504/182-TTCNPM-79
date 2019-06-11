<?php require_once __DIR__."/autoload/autoload.php";
unset($_SESSION['cart']);
        unset($_SESSION['total']);




?>
<?php require_once __DIR__. "/layouts/header.php"; ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/frontend/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/frontend/css/style_thong_bao.css">

<h1>Thông báo đơn hàng</h1>
<div class="box-main1">
    <h1 class="title-main">
        <?php if(isset($_SESSION['success'])): ?>
        <div class="alert alert-success">
            <strong>Success
            </strong> <?php echo $_SESSION['success'];unset($_SESSION['success'])?></div>
        <?php endif ?>
    </h1>
    <div class="button-thongbao">
        <a href="showcate.php" class="btn-success">Trở về trang chủ</a>
    </div>
</div>

</div>
<?php require_once __DIR__. "/layouts/footer.php"; ?>
