<?php require_once __DIR__."/autoload/autoload.php";
$id=intval(getInput('id'));
$EditProduct=$db->fetchID("product",$id);


?>
<?php require_once __DIR__. "/layouts/header.php"; ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/frontend/css/font-awesome.min.css">

<script src="public/frontend/js/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url() ?>public/frontend/js/bootstrap.min.js"></script>
<!---->

<!-- <link rel="stylesheet" type="text/css" href="public/frontend/css/style.css"> -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/frontend/css/style_chi_tiet.css">

<div class="row1">

    <video autoplay muted loop id="myVideo">
        <source src="<?php echo base_url() ?>public/frontend/video/Background_video_sp.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>

    <div class="col span-2-of-8 background">
        <!-- <img src="Resources/Image/backgroundleft.jpg" alt="Bgl"> -->
    </div>

    <div class="col span-4-of-8 content-all">
        <!-- Link to Home Page -->
        <div class="col span-1-of-2 info-product">
            <!-- <div class="clearfix"></div> -->
            <img class="product-picture" src="<?php echo uploads() ?>/product/<?php echo $EditProduct['thunbar']?>"
                alt="macbookimg">
        </div>
        <div class="col span-1-of-2" class="order-product">
            <h3>
                <?php echo $EditProduct['name']?>
            </h3>
            <ul class="sale-info">

                <?php if($EditProduct['sale'] >0):?>
                    <p><strike class="price">
                        <?php echo formatPrice($EditProduct['price']) ?> &#8363;
                    </strike>
                    <b class="price">
                        <?php echo formatPriceSale($EditProduct['price'],$EditProduct['sale']) ?> &#8363;
                    </b>
                    <?php else: ?>
                    <b class="price">
                        <?php echo formatPriceSale($EditProduct['price'],$EditProduct['sale']) ?> <?php endif ?> &#8363;
                    </b>
                    <li>
                        <a href="addcart.php?id=<?php echo $EditProduct['id']?>" class="button">Add To Cart</a>
                    </li>
            </ul>

            <button class="collapsible active">PRODUCT INFO</button>
            <div class="content" style="max-height: 44px;">
                <?php echo $EditProduct['infoPro']?>
            </div>
            <button href="about.php" class="collapsible">RETURN & REFUND POLICY</button>
            <div>
                <!-- <a href="about.php"></a> -->

            </div>
            <ul class="icon-contact">
                <li>
                    <i class="fab fa-facebook"></i>
                </li>
                <li>
                    <i class="fab fa-google-plus-square"></i>
                </li>
                <li>
                    <i class="fab fa-twitter-square"></i>
                </li>
            </ul>

        </div>
    </div>
    <div class="col span-2-of-8 background">
        <!-- <img src="Resources/Image/backgroundleft.jpg" alt="Bgr"> -->
    </div>
</div>

<script src="<?php echo base_url() ?>/public/frontend/js/collapsible.js"></script>
<?php require_once __DIR__. "/layouts/footer.php"; ?>
