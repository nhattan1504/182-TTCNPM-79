<?php require_once __DIR__."/autoload/autoload.php";
$id=intval(getInput('id'));
$EditCategory=$db->fetchID("category",$id);
if(isset($_GET['p']))
{
    $p=$_GET['p'];
}
else
{
    $p=1;
}
$sql="SELECT *FROM product WHERE category_id = $id";
$total=count($db->fetchsql($sql));
$product=$db->fetchJones("product",$sql,$total,$p,10, true);
$sotrang=$product['page'];
unset($product['page']);

$path=$_SERVER['SCRIPT_NAME'];
 
?>
<?php require_once __DIR__. "/layouts/header.php"; ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/frontend/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/frontend/css/danh_muc_sp_style.css">


<body>
    <div class="box-main">
        <h2><?php echo $EditCategory['name'] ?> </h2>
        <div class="showitem">
            <?php  foreach($product as $item):?>
            <div class="col span-1-of-4">
                <div class="content-danhmucsp">
                    <a href="chi_tiet_sp.php?id=<?php echo $item['id'] ?>" class="img-product">
                        <img src="<?php echo uploads() ?>/product/<?php echo $item['thunbar']?>" class="" width="100%">
                    </a>
                    <?php if($item['sale'] >0):?>
                    <div class="info-item">
                        <a href="chi_tiet_sp.php?id=<?php echo $item['id'] ?>">
                            <?php echo $item['name']?>
                        </a>
                        <p>
                            <b class="price">
                                <?php echo formatPriceSale($item['price'],$item['sale'])?> &#8363;
                            </b>
                            <strike class="sale"><?php echo formatPrice($item['price'])?></strike> &#8363;
                        </p>
                    </div>
                    <?php else: ?>
                    <div class="info-item">
                        <a href="chi_tiet_sp.php?id=<?php echo $item['id'] ?>">
                            <?php echo $item['name']?>
                        </a>
                        <p>
                            <b class="price">
                                <?php echo formatPrice($item['price'])?> &#8363;
                            </b>
                        </p>
                    </div>
                    <?php endif ?>
                    <div class="hidenitem">
                        <p><a href=""><i class="fa fa-search"></i></a></p>
                        <p><a href=""><i class="fa fa-heart"></i></a></p>
                        <p><a href=""><i class="fa fa-shopping-basket"></i></a></p>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
        <div class="clearfix"></div>

        <ul class="pagination">
            <?php for($i=1;$i<=$sotrang;$i++):?>
            <li class="<?php echo isset($_GET['p'])&&$_GET['p']==$i ? 'active':''?>"><a
                    href="<?php echo $path ?> ?id=<?php echo $id ?> &&p=<?php echo $i?>"><?php echo $i;?></a>
            </li>
            <?php endfor; ?>
        </ul>

        <div class="clearfix"></div>
    </div>

    <?php require_once __DIR__. "/layouts/footer.php"; ?>
