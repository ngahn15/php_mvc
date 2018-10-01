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
                                        <a href="">
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
                        <a href="#">Read more</a> <br>
                    </div>
                    
                    <!-- <div class="panel-footer">
                        <span class="label label-default">Welcome</span> <span class="label label-default">Updates</span> <span class="label label-default">July</span>
                    </div> -->
                </div>
    <?php 
    } ?>
            </div>
            <!-- <div class="text-center"><a href="#" id="loadmore" class="btn btn-primary">Older Posts...</a></div> -->
        </div>
    </div>

<?php require_once APPROOT . "/Views/templates/Footer.php" ?>
