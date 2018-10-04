                <?php
                session_start();
               
                ?>
<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand-centered">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button> 
            <div class="navbar-brand navbar-brand-centered">
                <a href="<?= URLROOT ?>">Hello</a>
            </div>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-brand-centered">
            <ul class="nav navbar-nav navbar-right">
            
                
        <?php 
            if (isset($_SESSION['id'])) { ?>
                <li><a href="<?= URLROOT ?>?url=user/info" class="" title=""><?= $_SESSION['name'] ?></a></li>
                <li><a href="<?= URLROOT ?>?url=user/logout" class="fas fa-sign-out-alt" title="Logout"></a></li>
        <?php 
            if($_SESSION['level'] == 0){ ?> 
                <li>
                    <a href="<?= URLROOT ?>?url=post/add" title="add new post">
                        <i class="fas fa-plus-circle"></i>
                        <span>Add new post</span>
                    </a>
                </li>
            <?php } ?>
        <?php 
            } else { ?>
                <li><a href="<?= URLROOT ?>?url=user/login" class="fas fa-sign-in-alt" title="Login"></a></li>
                <li><a href="<?= URLROOT ?>?url=user/register" class="fas fa-registered" title="Register"></a></li>
        <?php
            }
        ?>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>