<?php require_once("includes/connection.php"); ?>
<?php
$folder_name=$_POST['folder_name'];
$uploadDir = 'uploads/'.$folder_name;
// Set the allowed file extensions
$fileTypes = array('jpg', 'jpeg', 'gif', 'png','pdf'); // Allowed file extensions

$verifyToken = md5('unique_salt' . $_POST['timestamp']);
if (!empty($_FILES) && $_POST['token'] == $verifyToken) {
	$tempFile   = $_FILES['Filedata']['tmp_name'];
	$targetFile = $uploadDir . $_FILES['Filedata']['name'];
	$file_name= $_FILES['Filedata']['name'];
	// Validate the filetype
	$fileParts = pathinfo($_FILES['Filedata']['name']);
	if (in_array(strtolower($fileParts['extension']), $fileTypes)) {
		// Save the file
		$file_id_upload=rand(10,100);
		// Save the file
		$query="INSERT INTO `folder_database`(`id`, `file_name`, `folder_name`, `type`) VALUES 	
											('$file_id_upload','$file_name','$folder_name','pic')";//insert query
		
		if(is_dir($uploadDir)==false){
                mkdir("$uploadDir", 0777);		// Create directory if it does not exist
            }
            if(is_dir("$uploadDir/".$file_name)==false){
					 move_uploaded_file($tempFile,"$uploadDir/".$file_name);
              
            }else{	// rename the file if another one exist
                $new_dir="$uploadDir/".$file_name.time();
                 rename($file_tmp,$new_dir) ;				
            }
			 move_uploaded_file($tempFile, $targetFile);
			mysql_query($query); //database query execute command
		echo 'success';

	} else {
		// The file type wasn't allowed
		echo 'Invalid file type.';

	}
}
?>