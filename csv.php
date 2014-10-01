<?php
	$directorio = 'documents/';
	if(is_dir($directorio)){
		if($dir = opendir($directorio)){
			while (($file = readdir($dir)) !== false) {
				if (strcmp(filetype($directorio.$file), 'file') === 0) {
					$pi = pathinfo($directorio.$file, PATHINFO_EXTENSION);
					if (strcmp($pi, 'csv') === 0) {
						if (($handle = fopen($directorio.$file, 'r')) !== FALSE) {
							echo 'Archivo: ',$directorio.$file,'<br>' ;
							while (($data[] = fgetcsv($handle, 0, ',')) !== FALSE);
							foreach ($data as $row) {
								print_r($row);
								echo '<br>';
							}
						}	
					}
				}
			}
		}
	}
	
?>