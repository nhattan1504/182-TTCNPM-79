<?php require_once __DIR__."/autoload/autoload.php";

$data=
    [
        
        "email" => postInput("email"),
        "password"=>(postInput("password"))
    ];
    $error=[];
    if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(postInput('email')=='')
    {
        $error['email']="Bạn vui lòng nhập email";
    }
    if(postInput('password')=='')
    {
        $error['password']="MOI BAN NHAP mat khau";
    }
    
    if(empty($error))
    {
        $is_check=$db->fetchOne("users","email='".$data['email']."' AND password='".md5($data['password'])."'");
        
        if($is_check!=NULL)
        {
            $_SESSION['name_user']=$is_check['name'];
             $_SESSION['name_id']=$is_check['id'];
             echo "<script> alert('dang nhap thanh cong');location.href='showcate.php'</script>";
        }
        else {
            $_SESSION['error']="dang nhap that bai";
        }

    }
}


?>
<?php require_once __DIR__. "/layouts/header.php"; ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/frontend/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/frontend/css/style_login.css" >



<div class="content">
    <div class="col span-2-of-11"></div>

    <div class="col span-3-of-11">
        <img class="img-login" src="<?php echo base_url() ?>public/frontend/img/background2.jpeg" alt="backgroundLogin">
    </div>

    <div class="col span-4-of-11 content-login">
        <div class="title-main">
            Welcome Back!
        </div>
        <?php if(isset($_SESSION['success'])): ?>
            <div class="alert alert-success">
                <strong>Success
                </strong> <?php echo $_SESSION['success'];unset($_SESSION['success'])?></div>
            <?php endif ?>
            <?php if(isset($_SESSION['error'])): ?>
            <div class="alert alert-danger">
                <strong>Fail
                </strong> <?php echo $_SESSION['error'];unset($_SESSION['error'])?></div>
        <?php endif ?>
            <form action="" method="POST" class="form-horizontal" role="form" style="margin-top: 20px">
                <div class="form-group">
                    <input type="text" class="form-login" id="inputName" placeholder="Enter Email Address..." name="email" value="<?php echo $data['email']?>">
                    <?php if(isset($error['email'])):?>
                    <p class="text-fail"><?php echo $error['email']?> <?php endif ?>
                </div>

                <div class="form-group">
                    <input type="password" class="form-login" id="inputName" placeholder="Password" name="password">
                    <?php if(isset($error['password'])):?>
                    <p class="text-fail"><?php echo $error['password']?> <?php endif ?>
                </div>
                
                <input type="checkbox" class="check-remember"> 
                <div class="remember-text"> Remember Me </div>
                <div class="form-group">
                    <input type="submit" class="button-login fab" value="Login">
                </div>

                <hr class="hr-signup">
            </form>

            <form action="https://www.google.com.vn/">
                <div class="login-group-other">
                    <input type="submit" value="&#xf1a0 Login with Google" class="login-other1 fab fa-google">
                </div>
            </form>
            <form action="https://www.facebook.com/" class="login-group-other">
                <div class="login-group-other">
                    <input type="submit" value="&#xf39e Login with Facebook" class="login-other2 fab fa-facebook-f">
                </div>
            </form>
            
            <hr class="hr-login">

            <div class="other-content1">
                <a href="#" class="forget-pass">Forgot Password ?</a> <br> 
            </div>

            <div class="other-content2">
                <a href="dki.php" class="create-pass">Create an Account !</a>  
            </div>
    </div>

    <div class="col span-2-of-11"></div>
</div>

<div class="clearfix"></div>

<?php require_once __DIR__. "/layouts/footer.php"; ?>
