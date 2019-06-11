
	<!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800">Add New Member</h1>
        </div>
        <body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user">
                                <div class="form-group">
                                    <input type="name" class="form-control form-control-user" id="InputName" placeholder="Your Name" name="name">
                                    <?php if (isset($error['name'])): ?>
                                        <p class="text-danger"> <?php echo $error['name']?></p>
                                    <?php endif?>
                                </div>
                                <div class="form-group">
                                    <input type="username" class="form-control form-control-user" id="InputUsername" placeholder="Username" name="username">
                                    <?php if (isset($error['username'])): ?>
                                        <p class="text-danger"> <?php echo $error['username']?></p>
                                    <?php endif?>   
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="InputEmail" placeholder="Email Address" name="email">
                                    <?php if (isset($error['email'])): ?>
                                        <p class="text-danger"> <?php echo $error['email']?></p>
                                    <?php endif?>   
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" id="InputPassword" placeholder="Password" name="password">
                                        <?php if (isset($error['password'])): ?>
                                            <p class="text-danger"> <?php echo $error['password']?></p>
                                        <?php endif?>   
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" id="RepeatPassword" placeholder="Repeat Password" name="re_password">
                                        <?php if (isset($error['re_password'])): ?>
                                            <p class="text-danger"> <?php echo $error['re_password']?></p>
                                        <?php endif?>   
                                    </div>
                                </div>
                                 <div class="form-group">
								    <label for="permissionselected">Permission Selected</label>
								    <select class="form-control" id="permissionselected" name="level">
									    <option value="1">Seller</option>
									    <option value="2">Admin</option>
									</select>
                                    <?php if (isset($error['level'])): ?>
                                        <p class="text-danger"> <?php echo $error['level']?></p>
                                    <?php endif?>  
								  </div>
                                <a href="login.html" class="btn btn-primary btn-user btn-block">
                  				Register Account
                				</a>
                            	<hr>
                            	<div class="text-center">
                                	<a class="small" href="forgot-password.html">Forgot Password?</a>
                            	</div>
                            	<div class="text-center">
                                	<a class="small" href="login.html">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>
    <!-- /.container-fluid -->
