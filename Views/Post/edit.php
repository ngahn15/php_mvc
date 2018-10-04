<?php  require_once APPROOT . "/Views/templates/Header.php"; ?>

<div class="container">
	<div class="row">
	    
	    <div class="col-md-8 col-md-offset-2">
	        
    		<h1>Edit post</h1>
    		
    		<form action="<?= URLROOT ?>?url=post/edit/<?= $data['id']?>" method="POST">
    		    
    		    <div class="form-group">
    		        <label for="title">Title <span class="require">*</span></label>
    		        <input type="text" class="form-control" name="title" value="<?= $data['title'] ?>" />
					<?php if (isset($data['title_err'])) { ?>
							<p class="form-text text-danger"> (*)
								<?php echo $data['title_err'] ?>
							</p>
					<?php } ?>
    		    </div>
    		    
    		    <div class="form-group">
    		        <label for="description">Description</label>
    		        <textarea rows="5" class="form-control" name="content" value="" ><?= $data['content'] ?></textarea>
					<?php if (isset($data['content_err'])) { ?>
							<p class="form-text text-danger"> (*)
								<?php echo $data['content_err'] ?>
							</p>
					<?php } ?>
    		    </div>
    		    
    		    <div class="form-group">
    		        <button name="save" type="submit" class="btn btn-primary">
    		            Save
    		        </button>
    		        <a href="<?= URLROOT ?>" name='cancel' class="btn btn-default">
    		            Cancel
    		        </a>
    		    </div>
    		    
    		</form>
		</div>
		
	</div>
</div>

<?php require_once APPROOT . "/Views/templates/Footer.php" ?>
