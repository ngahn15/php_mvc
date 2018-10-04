<?php 
    require_once APPROOT . "/Views/templates/Header.php";
?>

    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-9">
    <?php foreach ($data as $value) { ?>
                <div id="postlist">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="text-left">
                                <div class="row">
                                    <div class="col-sm-9">
                                        <a href="<?= URLROOT ?>?url=post/show/<?= $value['id'] ?>">
                                            <h3 class="pull-left"><?= $value['title'] ?></h3>
                                        </a>
                                    </div>
                                    <div class="col-sm-3">
                                        <h4 class="pull-right">
                                            <small><em><?= $value['time'] ?></em></small>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    <div class="panel-body">
                        <?= $value['content'] ?> <br>
                        <a href="<?= URLROOT ?>?url=post/show/<?= $value['id'] ?>">Read more</a> <br>

                    <?php    if(isset($_SESSION['level']) && $_SESSION['level'] == 0){ ?>
                        <a href="<?= URLROOT ?>?url=post/edit/<?= $value['id'] ?>" class="btn btn-primary a-btn-slide-text pull-right ml-5">
                            <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                            <span><strong>Edit</strong></span>            
                        </a>
                        <a href="<?= URLROOT ?>?url=post/delete/<?= $value['id'] ?>" class="btn btn-primary a-btn-slide-text pull-right">
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                            <span><strong>Delete</strong></span>            
                        </a>
                    <?php    }   ?>
                        
                    </div>
                </div>
    <?php } ?>
            </div>
        </div>
    </div>

<?php require_once APPROOT . "/Views/templates/Footer.php" ?>
