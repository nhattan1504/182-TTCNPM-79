<?php require_once __DIR__."/autoload/autoload.php";
$sqlHomecate="SELECT  name,id FROM category WHERE home = 1 ORDER BY updated_at";
//unset($_SESSION['cart']);
$CategoryHome=$db->fetchsql($sqlHomecate);
$data=[];
foreach($CategoryHome as $item)
{
    $cateId=intval($item['id']);
    $sql="SELECT * FROM product WHERE category_id=$cateId";
    $ProductHome=$db->fetchsql($sql);
    $data[$item['name']]=$ProductHome;
}
?>
<?php require_once __DIR__. "/layouts/header.php"; ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/frontend/css/font-awesome.min.css">


<script src="<?php echo base_url() ?>public/frontend/js/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url() ?>public/frontend/js/bootstrap.min.js"></script>
<!---->
<!--slide-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/frontend/css/style_showcase.css">

<body>
    <div id="wrapper">
        <!--ENDMENUNAV-->
        <div class="row">
            <div class="col span 1-of-5 product">
                <div id="maincontent">
                    <div class="container">
                        <div class="col-md-3  fixside">
                            <div class="box-left box-menu">
                                <h6 class="box-title"><i class="fa fa-list"></i> Danh mục</h6>
                                <ul>
                                    <?php foreach($category as $item) :?>
                                    <li><a href="danh_muc_sp.php?id=<?php echo $item['id'] ?>">
                                            <?php echo $item['name']?></a>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <div class="box-left box-menu">
                                <h6 class="box-title"><i class="fa fa-star"></i> Sản phẩm mới </h6>
                                <ul>
                                    <?php foreach($productNew as $item) :?>
                                        <li class="clearfix">
                                            <a href="chi_tiet_sp.php?id=<?php echo $item['id'] ?>">
                                                <img src="<?php echo uploads() ?>product/<?php echo $item['thunbar']?>"
                                                    class="" width="100%" height="100">
                                                <div class="info pull-right">
                                                    <p class="name"> <?php echo $item['name']?></p>
                                                    <?php if($item['sale'] >0):?>
                                                        <b class="price">Giá Mới:
                                                            <?php echo $item['price']*(1-$item['sale'])?></b><br>
                                                        <b class="sale">Giá Gốc: <?php echo $item['price']?></b><br>
                                                    <?php else: ?>
                                                        <b class="price">Giá:
                                                            <?php echo $item['price']*(1-$item['sale'])?></b><br>
                                                    <?php endif ?>
                                                </div>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col span-1-of-12 category"></div>
            <div class="col span-9-of-12 category">
                <section class="box-main1">
                    <?php foreach($data as $key =>$value): ?>
                    <h1><?php echo  $key ?></h1>
                    <div class="showitem">
                        <?php  foreach($value as $item):?>
                        <div class="col span-1-of-4 product">
                            <a href="chi_tiet_sp.php?id=<?php echo $item['id'] ?>"> <img
                                    src="<?php echo uploads() ?>product/<?php echo $item['thunbar']?>" width=" 500"
                                    height="500" alt="activities1"></a>
                            <p class="product-title">Detail</p>
                            <h5><?php echo $item['name']?></h5>
                            <h5><?php echo formatPrice($item['price'])?></h5>
                        </div>
                        <?php endforeach ?>
                    </div>
                    <div class="clearfix"></div>
                    <?php endforeach ?>
                </section>
            </div>

        </div>

    </div>
    <?php require_once __DIR__. "/layouts/footer.php"; ?>
    </div>
