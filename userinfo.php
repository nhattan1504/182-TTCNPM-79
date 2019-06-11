<?php require_once __DIR__."/autoload/autoload.php";
$id=intval(getInput('id'));
$EditUser=$db->fetchID("users",$id);
?>

<?php require_once __DIR__. "/layouts/header.php"; ?>



<h1> <br> About Yourself</h1>

<h5>

    <h5>
        <h5>Information <h5>
                <h5>
                    Tên:<?php echo  $EditUser['name']?>
                    <h5>
                        <h5>SĐT:<?php echo  $EditUser['phone']?><h5>
                                <h5>Địa chỉ:<?php echo  $EditUser['address']?><h5>

                                        <?php require_once __DIR__. "/layouts/footer.php"; ?>
