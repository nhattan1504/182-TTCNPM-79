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

<script src="<?php echo base_url() ?>public/frontend/js/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url() ?>public/frontend/js/bootstrap.min.js"></script>

<a href="showcate.php"><img class="bannerfull" src="<?php echo base_url() ?>public/frontend/img/banner1.png"
        alt="img"></a>
<h2> <br> New Arrival</h2>
</header>

<section class="about-section">
    <div class="row">
        <div class="col span-1-of-2 picture-about">
            <a href="danh_muc_sp.php?id=8"><img src="<?php echo base_url() ?>public/frontend/img/iPhoneXsBanner.png"
                    alt="activities1"></a>
            <p class="picture-title">
                BUY NOW
            </p>
        </div>
        <div class="col span-1-of-2 picture-about">
            <a href="danh_muc_sp.php?id=7">
                <img src="<?php echo base_url() ?>public/frontend/img/MacbookProBanner.png" alt="activities2"></a>
            <p class="picture-title">
                BUY NOW
            </p>
        </div>
    </div>
</section>
<h2> <br> Our Policy</h2>
<section class="Polocy-Banner">
    <div class="row">
        <div class="col span-1-of-2 polocy">
            <a href="policy.php"><img src="<?php echo base_url() ?>public/frontend/img/recyclebanner.png" alt="activities1"></a>
        </div>
        <div class="col span-1-of-2 polocy">
            <a href="policy.php"><img src="<?php echo base_url() ?>public/frontend/img/givingbackbanner.png"
                    alt="activities2"></a>
        </div>
    </div>
</section>

<section class="Accesstories-Banner">
    <div class="accesstories">
        <a href="danh_muc_sp.php?id=10"><img src="<?php echo base_url() ?>public/frontend/img/accesstories.png"
                alt="activities1"></a>
    </div>
</section>

<section class="sellingList" id="shop">
    <h2><br>OUR BEST SELLING EQUIPMENT</h2>
    <div class="row">
        <?php foreach($productNew as $item) :?>
        <div class="col span-1-of-4 product">
            <a href="chi_tiet_sp.php?id=<?php echo $item['id'] ?>"> <img
                src="<?php echo uploads() ?>product/<?php echo $item['thunbar']?>" width=" 500"
                height="500" alt="activities1"></a>
            <p class="product-title">Detail</p>
            <h5><?php echo $item['name']?></h5>
            <?php if($item['sale'] >0):?>
            <h5>Gía:<?php echo formatPrice($item['price']) ?></h5>
            <h5>Giá sau khi giảm: <?php echo formatPriceSale($item['price'],$item['sale']) ?></h5>
            <?php else: ?>
            <h5>Giá : <?php echo formatPrice($item['price']) ?></h5>
            <?php endif ?>
        </div>
        <?php endforeach; ?>
    </div>
</section>


<?php require_once __DIR__. "/layouts/footer.php"; ?>
