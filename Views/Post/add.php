<?php  require_once APPROOT . "/Views/templates/Header.php"; ?>

<div class="container">
	<div class="row">
	    
	    <div class="col-md-8 col-md-offset-2">
	        
    		<h1>Create post</h1>
    		
    		<form action="<?= URLROOT ?>?url=post/add" method="POST">
    		    
    		    <div class="form-group">
    		        <label for="title">Title <span class="require">*</span></label>
    		        <input type="text" class="form-control" name="title" />
					<?php if (isset($data['title_err'])) { ?>
							<p class="form-text text-danger"> (*)
								<?php echo $data['title_err'] ?>
							</p>
					<?php } ?>
    		    </div>
    		    
    		    <div class="form-group">
    		        <label for="description">Description</label>
    		        <textarea rows="5" class="form-control" name="content" ></textarea>
					<?php if (isset($data['content_err'])) { ?>
							<p class="form-text text-danger"> (*)
								<?php echo $data['content_err'] ?>
							</p>
					<?php } ?>
    		    </div>
    		    
    		    <div class="form-group">
    		        <button type="submit" class="btn btn-primary">
    		            Create
    		        </button>
    		        <button class="btn btn-default">
    		            Cancel
    		        </button>
    		    </div>
    		    
    		</form>
		</div>
		
	</div>
</div>

<?php require_once APPROOT . "/Views/templates/Footer.php" ?>
