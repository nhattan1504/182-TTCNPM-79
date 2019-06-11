<!DOCTYPE html>
<html>

<head>
    <title>NIX - Official Technology Market</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap&subset=vietnamese"
        rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>public/frontend/css/grid.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/frontend/css/stylesHomePage.css">
    <link rel="stylesheet" href="resources/css/queries.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="<?php echo base_url() ?>public/frontend/js/scripts.js"></script>
    <script src="<?php echo base_url() ?>public/frontend/js/jquery.waypoints.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div id="header">
        <div class="container">
            <div class="row" id="header-main">
                <nav class="sticky">
                    <div href="index.php" title="NIX - Official Technology Market"><img class="logo" 
                        src="<?php echo base_url() ?>public/frontend/img/logonix.png" alt="logo"></div>
                    <ul class="main-nav">
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="showcate.php">SHOP</a></li>
                        <li><a href="about.php">ABOUT</a></li>
                        <li><a href="contact.php">CONTACT</a></li>
                        <li><a href="policy.php">STORE POLICY</a></li>
                        <li class="dropdown">
                            <?php if(isset($_SESSION['name_user'])):?>
                            <a href="showcate.php" class="dropbtn">CUSTOMERS</a>
                            <div class="dropdown-content">
                                <a>Hello:<?php echo $_SESSION['name_user']?> </a>
                                <a href=" userinfo.php?id=<?php echo $_SESSION['name_id'] ?>">User Info</a>
                                <a href="thoat.php">Log-Out</a>
                            </div>
                            <?php else: ?>
                            <a href="showcate.php" class="dropbtn">CUSTOMERS</a>
                            <div class="dropdown-content">
                                <a href="dnhap.php">Login</a>
                                <a href="dki.php">Register</a>
                            </div>
                            <?php endif; ?>
                        </li>
                        <a href="giohang.php"><img src=" <?php echo base_url() ?>public/frontend/img/cartlogo.png" 
                            salt="logo" class="cartbtn"></a>
                    </ul>
                    <!-- unorderlist -->
                </nav>
            </div>
        </div>
    </div>                    
                
    <div class="clearfix"></div>
