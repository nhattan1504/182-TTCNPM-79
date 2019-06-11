<?php require_once __DIR__."/autoload/autoload.php";
if(isset($_SESSION['name_id']))
{
    echo "<script>alert('Bạn đã có tài khoản không thể vào đây');location.href='index.php' </script>";
}
$data=
    [
        "name" =>postInput('name'),
        "email" => postInput("email"),
        "phone"=>postInput("phone"),
        "password"=>MD5(postInput("password")),
        "address"=>postInput("address"),
    ];
    $error=[];
if($_SERVER["REQUEST_METHOD"]=="POST")
{
     if(postInput('name')=='')
    {
        $error['name']="MOI BAN NHAP DAY DU THONG TIN";
    }
     if(postInput('email')=='')
    {
        $error['email']="Bạn vui lòng nhập email";
    }
    else {
        
        $is_check=$db->fetchOne("users","email='".$data['email']."'");
        if($is_check!=NULL)
        {
            $error['email']="Bạn vui lòng nhập email khác, email này đã tồn tại";
        }
    }
     if(postInput('phone')=='')
    {
        $error['phone']="MOI BAN NHAP GIA email";
    }
     if(postInput('password')=='')
    {
        $error['password']="MOI BAN NHAP mat khau";
    }
    if(postInput('address')=='')
    {
        $error['address']="MOI BAN NHAP dia chi";
    }
    if($data['password']!=MD5(postInput("re_password")))
    {
         $error['password']="mât khẩu không khớp";
    }
    if(empty($error))
    {
        $id_insert= $db->insert("users",$data);
        if($id_insert>0)
        {  
            $_SESSION['success']="Dang ki thanh cong, moi ban dang nhap";
            header("location:dnhap.php");
             //echo "dang ki thành công";
             
        }
          else
        {
            //echo "dang ki  thất bại";
        }
    }

}




?>
<?php require_once __DIR__. "/layouts/header.php"; ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/frontend/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/frontend/css/style_signup.css" >





<div class="content">
    <div class="col span-2-of-11"></div>

    <div class="col span-3-of-11">
        <img class="img-signup" src="<?php echo base_url() ?>public/frontend/img/background2.jpeg" alt="backgroundLogin">
    </div>

    <div class="col span-4-of-11 content-signup">
        <div class="title-main">
            Create an Account!
        </div>

        <form action="" method="POST" class="form-horizontal" role="form" style="margin-top: 20px">
            <div class="form-group">
                <input type="text" class="form-signup" id="inputName" placeholder="Your Name" name="name" value="<?php echo $data['name']?>">
                <?php if(isset($error['name'])):?>
                    <p class="text-fail"><?php echo $error['name']?> 
                <?php endif ?>         
            </div>

            <div class="form-group">
                <input type="text" class="form-signup" id="inputName" placeholder="Email Address" name="email" value="<?php echo $data['email']?>">
                <?php if(isset($error['email'])):?>
                    <p class="text-fail"><?php echo $error['email']?> 
                <?php endif ?>     
            </div>

            <div class="form-group">
                <input type="number" class="form-signup" id="inputName" placeholder="Phone Number" name="phone" value="<?php echo $data['phone']?>">
                <?php if(isset($error['phone'])):?>
                    <p class="text-fail"><?php echo $error['phone']?> 
                <?php endif ?>
            </div>

            <div class="col span-1-of-2">
                <div class="form-group-pass1">
                    <input type="password" class="form-signup-pass" id="inputName" placeholder="Password" name="password">
                    <?php if(isset($error['password'])):?>
                        <p class="text-fail"><?php echo $error['password']?> 
                    <?php endif ?>
                </div>
            </div>

            <div class="col span-1-of-2">
                <div class="form-group-pass2">
                    <input type="password" class="form-signup" id="inputName" placeholder="Repeat Password" name="re_password" require="">
                </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="form-group">
                <input type="text" class="form-signup" id="inputName" placeholder="Address" name="address" value="<?php echo $data['address']?>">
                <?php if(isset($error['address'])):?>
                    <p class="text-fail"><?php echo $error['address']?> 
                <?php endif ?>
            </div>

            <div class="form-group">
                <input type="submit" class="button-signup fab" value="Register Account">
            </div>

            <hr class="hr-signup">
        </form>

        <form action="https://www.google.com.vn/">
            <div class="signup-group-other">
                <input type="submit" value="&#xf1a0 Register with Google" class="signup-other1 fab fa-google">
            </div>
        </form>
        <form action="https://www.facebook.com/" class="login-group-other">
            <div class="signup-group-other">
                <input type="submit" value="&#xf39e Register with Facebook" class="signup-other2 fab fa-facebook-f">                </div>
        </form>
            
        <hr class="hr-signup">

        <div class="other-content1">                
            <a href="#" class="forget-pass">Forgot Password ?</a> <br> 
        </div>

        <div class="other-content2">
            <a href="dnhap.php" class="already-have">Already have an Account? Login!</a>  
        </div>
    </div>

    <div class="col span-2-of-11"></div>
</div>
<div class="clearfix"></div>

<?php require_once __DIR__. "/layouts/footer.php"; ?>
