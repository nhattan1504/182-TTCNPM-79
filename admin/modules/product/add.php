<?php 
$open = "product";
require_once __DIR__."/../../autoload\autoload.php";
$category=$db->fetchAll("category");
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $data=
    [
        "name" =>postInput('name'),
        "slug" => to_slug(postInput("name")),
        "category_id"=>postInput("category_id"),
        "number"=>postInput("number"),
        "price"=>postInput("price"),
        "infoPro"=>postInput("infoPro"),
        "content"=>postInput("content")
    ];
    $error=[];
     if(postInput('name')=='')
    {
        $error['name']="Bạn vui lòng nhập đầy đủ thông tin sản phẩm";
    }
     if(postInput('category_id')=='')
    {
        $error['category_id']="Bạn vui lòng chọn tên danh mục";
    }
     if(postInput('price')=='')
    {
        $error['price']="Gía tiền không được để trống";
    }
    if(postInput('infoPro')=='')
    {
        $error['infoPro']="Bạn vui lòng nhập thông số kỹ thuật của sản phẩm";
    }
    if(postInput('category_id')=='')
    {
        $error['category_id']="Vui lòng không để trống";
    }
    if(postInput('number')=='')
    {
        $error['number']="Bạn vui lòng nhập số lượng sản phẩm";
    }
    if(!isset($_FILES['thunbar']))
    {
        $error['thunbar']="Hình ảnh sản phẩm không được để trống";
    }
    if(empty($error))
    {
        if(isset($_FILES['thunbar']))
        {
            $file_name=$_FILES['thunbar']['name'];
            $file_tmp=$_FILES['thunbar']['tmp_name'];
            $file_type=$_FILES['thunbar']['type'];
            $file_erro=$_FILES['thunbar']['error'];
            
            if($file_erro==0)
            {
                $part= ROOT."product/";
                $data['thunbar']=$file_name;
            }
        }
        $id_insert= $db->insert("product",$data);
        if($id_insert>0)
        {
              move_uploaded_file($file_tmp,$part.$file_name);
             $_SESSION['success']="Thêm thành công";
             redirectAdmin("product");
        }
          else
        {
            $_SESSION['error']="Thêm thất bại";
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
                <i></i> <a href="index.php">Sản phẩm</a>
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
                <label for="inputName" class="col-sm-2 control-label">Danh Mục Sản Phẩm </label>
                <div class="col-sm-10">
                    <select class="form-control col-md-8" name="category_id">
                        <option value=""> Mời bạn chọn danh mục</option>
                        <?php  foreach ($category as $item ):?>
                        <option value="<?php echo $item['id']?>"><?php echo $item['name'] ?> </option>
                        <?php endforeach ;?>
                    </select> <?php
                    if(isset($error['category_id'])):?>
                    <p class=" text-danger"> <?php echo $error['category_id']?></p>
                    <?php endif ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">Tên Sản Phẩm</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputName" placeholder="Ten san pham" name="name">
                    <?php
                    if(isset($error['name'])):?>
                    <p class="text-danger"> <?php echo $error['name']?></p>
                    <?php endif ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">Giá Sản Phẩm</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputName" placeholder="000.000.000" name="price">
                    <?php
                    if(isset($error['price'])):?>
                    <p class="text-danger"> <?php echo $error['price']?> </p>
                    <?php endif ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">Sale </label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputName" placeholder="0%" name="sale" value="0">
                </div>
            </div>
            <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">Số Lượng Sản Phẩm</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputName" placeholder="0" name="number">
                    <?php
                    if(isset($error['number'])):?>
                    <p class="text-danger"> <?php echo $error['number']?> </p>
                    <?php endif ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">Hình Ảnh</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="inputName" placeholder="" name="thunbar">
                    <?php
                    if(isset($error['thunbar'])):?>
                    <p class="text-danger"> <?php echo $error['thunbar']?> </p>
                    <?php endif ?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">Thông tin sản phẩm </label>
                <div class="col-sm-10">
                    <div class="form-group">
                        <textarea class="form-control" name="infoPro" row="4"></textarea>
                        <?php
                    if(isset($error['infoPro'])):?>
                        <p class="text-danger"> <?php echo $error['infoPro']?> </p>
                        <?php endif ?>
                    </div>
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
