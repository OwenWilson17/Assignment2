<?php
$target_dir = "images/";
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

// Check if file already exists
if (file_exists($target_dir . "pic02.jpg")) {
		if(file_exists($target_dir . "pic03.jpg"))
		{
    		$uploadOk = 0;
		}else
		{
			echo "File Uploaded!";
		}
	
}else
{
	echo "File Uploaded!";
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

if ($uploadOk == 0) {
	echo "Sorry, no more uploads!";
	header('Refresh: 3; URL=index.html');
} else {
	
	if(!file_exists($target_dir . "pic02.jpg"))
	{
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir . "pic02.jpg")) {
		    header('Refresh: 3; URL=index.html');
	    }
	}else
	{
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir . "pic03.jpg")) {
		    header('Refresh: 3; URL=index.html');
		}	
	}
}
?>