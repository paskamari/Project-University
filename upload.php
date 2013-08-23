<?php
	require_once('library/php/function.php');
	session();
	$user = $_SESSION['username'];
	$path = "./library/image/upload/$user";
	
	if(isset($_POST['submit'])){
		
		$file=$_FILES['myfile'];		
		
		if($file['error']!=0){
			
			echo 'Error in uploading file.';
			
		}else{
			
			if( strpos($file['type'],'image/')===0 ){
							
				if (!is_dir($path)) {
				
					if (!mkdir($path,0755, true)) {
					
						session_msg('message' ,'Failed to create folders...');
						linkbox('./');
					}else {
						mkdir($path,0755, true);
						chmod($path,0755);
					};
				};
				umask(0);
				chmod($path,0755);
				
				move_uploaded_file($file['tmp_name'],"library/image/upload/$user/".$file['name']);
				session_msg('message' ,'file uploaded.');
				linkbox('./');
			}else{
				session_msg('message' ,'only image is supported');
				linkbox('./');	
			};	
		};
	};
?>