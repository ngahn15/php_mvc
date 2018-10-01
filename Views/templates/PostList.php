<?php 
    // echo "<pre>";
    // print_r($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>All Post</title>
</head>
<body>
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
                <div class="navbar-brand navbar-brand-centered">Hello</div>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="navbar-brand-centered">
                <ul class="nav navbar-nav navbar-right">
                
                    <li>
                        <a href="#" title="add new post">
                            <i class="fas fa-plus-circle"></i>
                            <span>Add new post</span>
                        </a>
                    </li>
                    <li><a href="#" class="fas fa-sign-in-alt" title="Login"></a></li>
                    <li><a href="#" class="fas fa-sign-out-alt" title="Logout"></a></li>		        
                </ul>
		    </div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>

    
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-9">
<?php   foreach ($data as $value) { ?>
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
<?php    }     ?>
            </div>
            <!-- <div class="text-center"><a href="#" id="loadmore" class="btn btn-primary">Older Posts...</a></div> -->
        </div>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/js/bootstrap.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</body>
</html>