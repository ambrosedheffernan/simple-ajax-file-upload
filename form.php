	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


	<form id="uploading_files"  name="uploading_files" action="upload_files.php" method="post" enctype="multipart/form-data">
	  <a>Upload files:</a>
	  <div id="upload_files" >
	  <input name="file[]" id="file" type="file" multiple="true" >
	  </div>
	  <input id="submit_files" name="submit_files" type="submit" value="Send">
	</form>


	<div id="response"></div>

	<?php// $current_dir_url = $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']); echo $current_dir_url; ?>
	<script>
		
		
	jQuery('#uploading_files').submit(function(e) {
				e.preventDefault();
			  
			 	var data = new FormData(this);
			    
			    jQuery.ajax({
			        url: 'upload_files.php', // check this is correct path
			        type: 'POST',
			        data: data,
			        cache: false,
			        contentType: false,
			        processData: false,
			        
			        success: function(data){
			            console.log(data);
			            $('#response').html(data);
			        }
			    }); 
			    
			});
	    
	</script>
