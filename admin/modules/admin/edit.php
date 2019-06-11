<?php 
$open = "admin";
require_once __DIR__."/../../autoload\autoload.php";
$id=intval(getInput('id'));
 $EditAdmin=$db->fetchID("admin",$id);
 if(empty($EditAdmin))
 {
     $_SESSION['error']="Dữ liệu k tồn tại";
     redirectAdmin("admin");
 }

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $data=
    [
        "name" =>postInput('name'),
        "email" => postInput("email"),
        "phone"=>postInput("phone"),
        "address"=>postInput("address"),
        "level"=>postInput("level")
    ];
    $error=[];
     if(postInput('name')=='')
    {
        $error['name']="MOI BAN NHAP DAY DU THONG TIN";
    }
     if(postInput('email')=='')
    {
        $error['email']="Bạn vui lòng nhập email";
    }
    else {
        if(postInput('email')!=$EditAdmin['email'])
        {
         $is_check=$db->fetchOne("admin","email='".$EditAdmin['email']."'");
        if($is_check!=NULL)
          {
           $error['email']="Bạn vui lòng nhập email khác, email này đã tồn tại";
          }
        }
    }
     if(postInput('phone')=='')
    {
        $error['phone']="MOI BAN NHAP GIA TIEN";
    } 
    if(postInput('address')=='')
    {
        $error['address']="MOI BAN NHAP dia chi";
    }
   // if($EditAdmin['password']!=MD5(postInput("re_password")))
   // {
   //      $error['password']="mât khẩu không khớp";
   // }
   if(postInput('password')!=NULL && postInput("re_password")!=NULL)
   {
       if(postInput('password')!=postInput("re_password"))
       {
           $error['password']="Bạn vui lòng nhập lại mật khẩu";
       }
       else
       {
           $data['password']=MD5(postInput('password'));
       }
   }
    if(empty($error))
    {
        $id_update= $db->update("admin",$data,array("id"=>$id));
        if($id_update>0)
        {  
             $_SESSION['success']="Cập nhật  thành công";
             redirectAdmin("admin");
        }
          else
        {
            $_SESSION['error']="Cập nhật thất bại";
            redirectAdmin("admin");
        }
    }
}
?>

<?php require_once __DIR__. "/../../layouts/header.php"; ?>
<!-- Page Heading  NOi dung cua trang -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Thêm mới sản phẩm
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a>
            </li>
            <li>
                <i></i> <a href="index.php">Admin</a>
            </li>
            <li class="active">
                <i class="fa fa-file"></i> Thêm mới
            </li>
        </ol>
        <div class="clearfix"></div>
        <!-- hiển thị thông báo lỗi -->
        <?php require_once __DIR__."/../../../partials/nofications.php";
        ?>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">Họ và tên </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputName" placeholder="Ten san pham" name="name" value="<?php echo $EditAdmin['name'] ?>">
                    <?php
                    if(isset($error['name'])):?>
                    <p class="text-danger"> <?php echo $error['name']?></p>
                    <?php endif ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">Email </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputName" placeholder="00000000" name="email"value="<?php echo $EditAdmin['email']?>">
                    <?php
                    if(isset($error['email'])):?>
                    <p class="text-danger"> <?php echo $error['email']?> </p>
                    <?php endif ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">Phone </label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputName" placeholder="" name="phone" value="<?php echo $EditAdmin['phone']?>">
                     <?php
                    if(isset($error['phone'])):?>
                    <p class="text-danger"> <?php echo $error['phone']?> </p>
                    <?php endif ?>
                </div>
            </div>

            <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">Password </label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputName" placeholder="00000000" name="password">
                    <?php
                    if(isset($error['password'])):?>
                    <p class="text-danger"> <?php echo $error['password']?> </p>
                    <?php endif ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">Confirm password </label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputName" placeholder="00000000" name="re_password" >
                    <?php
                    if(isset($error['re_password'])):?>
                    <p class="text-danger"> <?php echo $error['re_password']?> </p>
                    <?php endif ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">Address </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputName" placeholder="00000000" name="address"value="<?php echo $EditAdmin['address']?>">
                    <?php
                    if(isset($error['address'])):?>
                    <p class="text-danger"> <?php echo $error['address']?> </p>
                    <?php endif ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">Level </label>
                <div class="col-sm-10">
                    <select class="form-control" name="level">
                    <option value="1"  <?php echo isset($EditAdmin['level'])&& $EditAdmin['level']==1 ?"selected='selected'":'' ?>>Quản lí</option>
                    <option value="2" <?php echo isset($EditAdmin['level'])&& $EditAdmin['level']==2 ?"selected='selected'":'' ?>>Admin</option>
                    </select>
                    <?php
                    if(isset($error['level'])):?>
                    <p class="text-danger"> <?php echo $error['level']?> </p>
                    <?php endif ?>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success"> Lưu </button>
                </div>
            </div>
        </form>

    </div>
</div>
<!-- /.row -->
<?php require_once __DIR__. "/../../layouts/footer.php"; ?>
