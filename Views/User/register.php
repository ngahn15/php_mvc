<?php 
require_once APPROOT . "/Views/templates/Header.php";
?>

    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center mb-5">Bootstrap 4 Register Form</h2>
                <div class="row">
                    <div class="col-md-6 ml-auto">
                        <div class="card border-secondary">
                            <div class="card-header">
                                <h3 class="mb-0 my-2">Sign Up</h3>
                            </div>
                            <div class="card-body">
                                <form class="form" enctype="multipart/form-data" role="form" autocomplete="off" method='post' action='<?= URLROOT ?>?url=user/register'>
                                    <div class="form-group">
                                        <label for="inputName">Name</label>
                                        <input name="username" type="text" class="form-control" id="username" placeholder="username">
                                        <?php if (isset($data['username_err'])) { ?>
                                            <p class="form-text text-danger">
                                                <?php echo $data['username_err'] ?>
                                            </p>
                                    <?php 
                                        } ?>
                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input name="password" type="password" class="form-control" >
                                        <?php if (isset($data['password_err'])) { ?>
                                                    <p class="form-text text-danger">
                                                        <?php echo $data['password_err'] ?>
                                                    </p>
                                        <?php } ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputName">Name</label>
                                        <input name="name" type="text" class="form-control" id="inputName" placeholder="full name">
                                    </div>
                                    
                                    <div class="form-group">
                                        <button name="register" type="submit" class="btn btn-success btn-lg float-right">Register</button>
                                        <a href="<?= URLROOT ?>?url=user/login" name='register' type="submit" class="btn btn-success btn-lg float-left" id="btnLogin">Login</a>
                                            
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/row-->
            </div>
            <!--/col-->
        </div>
        <!--/row-->
    </div>

<?php require_once APPROOT . "/Views/templates/Footer.php" ?>
