<?php
		foreach($_FILES['file'] as $attr=>$file):
		$x=0;
			foreach($file as $items):
				$files[$x][$attr]= $items;	
				$x++;
			endforeach;
		endforeach;


		foreach($files as $file=>$key):
			echo basename($key['name']);
			move_uploaded_file($key["tmp_name"], 'pathname here!!!!!!!!!....   /'.$key['name']);
		endforeach;

?>
