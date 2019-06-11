<?php 

session_start();
require_once __DIR__."/../libraries/Database.php";
require_once __DIR__."/../libraries/Function.php";
$db=new Database;
$error=[];
$data=
    [
        
        "email" => postInput("email"),
        "password"=>(postInput("password"))
    ];
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
        $is_check=$db->fetchOne("admin","email='".$data['email']."' AND password='".md5($data['password'])."'");
        
        if($is_check!=NULL)
        {
            $_SESSION['admin_name']=$is_check['name'];
             $_SESSION['admin_id']=$is_check['id'];
             echo "<script> alert('dang nhap thanh cong');location.href='/tutphp/admin/'</script>";
        }
        else {
            echo "<script> alert('dang nhap that bai');</script>";
        }

    }
}

?>
<style type="text/css">
body {
    margin: 0;
    padding: 0;
    background-color: #17a2b8;
    height: 100vh;
}

#login .container #login-row #login-column #login-box {
    margin-top: 120px;
    max-width: 600px;
    height: 320px;
    border: 1px solid #9C9C9C;
    background-color: #EAEAEA;
}

#login .container #login-row #login-column #login-box #login-form {
    padding: 20px;
}

#login .container #login-row #login-column #login-box #login-form #register-link {
    margin-top: -85px;
}

</style>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="POST">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Email:</label><br>
                                <input type="text" name="email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Remember me</span> <span><input
                                            id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="#" class="text-info">Register here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
