<?php 
require_once APPROOT . "/Views/templates/Header.php";
?>

<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center text-white mb-4">Bootstrap 4 Login Form</h2>
            <div class="row">
                <div class="col-md-6 mx-auto">

                    <!-- form card login -->
                    <div class="card rounded-0">
                        <div class="card-header">
                            <h3 class="mb-0">Login</h3>
                        </div>
                        <div class="card-body">
                            <form class="form" role="form" action="<?= URLROOT ?>?url=user/login" id="formLogin" novalidate="" method="POST">
                                <div class="form-group">
                                    <label for="uname1">Username</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="username" id="uname1">
                                    <?php if (isset($data['username_err'])) { ?>
                                            <p class="form-text text-danger">
                                                <?php echo $data['username_err'] ?>
                                            </p>
                                    <?php 
                                } ?>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control form-control-lg rounded-0" id="pwd1" name="password">
                                    <?php if (isset($data['password_err'])) { ?>
                                            <p class="form-text text-danger">
                                                <?php echo $data['password_err'] ?>
                                            </p>
                                    <?php 
                                } ?>
                                </div>
                                 <div class="form-group">
                                    <button name="login" type="submit" class="btn btn-success btn-lg float-right">Login</button>
                                    <a href="<?= URLROOT ?>?url=user/register" name='register' type="submit" class="btn btn-success btn-lg float-left" id="btnLogin">Register</a>
                                </div>
                            </form>
                        </div>
                        <!--/card-block-->
                    </div>
                    <!-- /form card login -->

                </div>


            </div>
            <!--/row-->

        </div>
        <!--/col-->
    </div>
    <!--/row-->
</div>
<!--/container-->

<?php require_once APPROOT . "/Views/templates/Footer.php" ?>
