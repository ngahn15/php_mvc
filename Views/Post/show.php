<?php require_once APPROOT . "/Views/templates/Header.php"; ?>

    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-9">
                <div id="postlist">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="text-left">
                                <div class="row">
                                    <div class="col-sm-9">
                                        <h3 class="pull-left"><?= $data['title'] ?></h3>
                                    </div>
                                    <div class="col-sm-3">
                                        <h4 class="pull-right">
                                        <small><em><?= $data['time'] ?></em></small>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="panel-body">
                        <?= $data['content'] ?> </br>
                        <?php if (isset($_SESSION['level']) && $_SESSION['level'] == 0) { ?>
                            <a href="<?= URLROOT ?>?url=post/edit/<?= $data['id'] ?>" class="btn btn-primary a-btn-slide-text pull-right ml-5">
                                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                <span><strong>Edit</strong></span>            
                            </a>
                            <a href="<?= URLROOT ?>?url=post/delete/<?= $data['id'] ?>" class="btn btn-primary a-btn-slide-text pull-right">
                                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                <span><strong>Delete</strong></span>            
                            </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php require_once APPROOT . "/Views/templates/Footer.php";
