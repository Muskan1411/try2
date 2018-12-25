<?php
	// function get_image_name($image_name) {
	// 	if(isset($_FILES['chooseFile1']['name'])) {
	// 		$name = $_FILES['chooseFile1']['name'];
	// 		return $img_name;
	// 	}
	// }
	// function upload_image($img_name, $image_name, $category) {
	// 	$name = $img_name;
	// 	$extension = explode('.', $name);
	// 	$newName = $image_name.".".$extension[1];
	// 	return $newName;
		
	// }

// File upload configuration
function fileUpload($image_name, $category) {
    $targetDir = 'img/advertisements/'.$category.'/';
    $allowTypes = array('jpg','png','jpeg');
    
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = '';
    if(!empty(array_filter($_FILES['files']['name']))){
        foreach($_FILES['files']['name'] as $key=>$val){
            // File upload path
            // $fileName = basename($_FILES['files']['name'][$key]);
            $name = $_FILES['files']['name'][$key];
            $extension = explode('.', $name);
            $newName = $image_name.".".$extension[1];
            $targetFilePath = $targetDir . $newName;
            
            // Check whether file type is valid
            $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
            if(in_array($fileType, $allowTypes)){
                // Upload file to server
                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){
                    // Image db insert sql
                    $insertValuesSQL .= "'".$newName."',";
                }else{
                    $errorUpload .= $_FILES['files']['name'][$key].', ';
                }
            }else{
                $errorUploadType .= $_FILES['files']['name'][$key].', ';
            }
        }
        
        if(!empty($insertValuesSQL)){
            $insertValuesSQL = trim($insertValuesSQL,',');
            // Insert image file name into database
            $insert = $db->query("INSERT INTO images (file_name) VALUES $insertValuesSQL");
            if($insert){
                $errorUpload = !empty($errorUpload)?'Upload Error: '.$errorUpload:'';
                $errorUploadType = !empty($errorUploadType)?'File Type Error: '.$errorUploadType:'';
                $errorMsg = !empty($errorUpload)?'<br/>'.$errorUpload.'<br/>'.$errorUploadType:'<br/>'.$errorUploadType;
                $statusMsg = "Files are uploaded successfully.".$errorMsg;
            }else{
                $statusMsg = "Sorry, there was an error uploading your file.";
            }
        }
    }else{
        $statusMsg = 'Please select a file to upload.';
    }
}
	if(isset($_POST['ad_added_by_user'])) {
		$category = $_POST['category'];
		$location = $_POST['location'];
		$address = $_POST['address'];

		$ad_title = $_POST['ad_title'];
		$ad_desc = $_POST['ad_desc'];

		$name = $_POST['name'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];

		$nameWithoutSpace = str_replace(' ', '', $name)
		$image_name = $category.''.$name;

		$image = fileUpload($image_name, $category);
		// ///////////image1////////////////////////
		// if($_FILES['chooseFile1']['name'] != '') {
		// 	if(isset($_FILES['chooseFile1']['name'])) {
		// 		$img_name = $_FILES['chooseFile1']['name'];
			
		// 		$image1 = upload_image($img_name, $image_name, $category);
		// 		$destination = 'img/advertisements/'.$category.'/'.$newName;
		// 		move_uploaded_file($_FILES['chooseFile1']['tmp_name'], $destination);
		// }
		// } else {
		// 	$image1 = '';
		// }

		// ///////////image2////////////////////////
		// if($_FILES['chooseFile2']['name'] != '') {
		// 	if(isset($_FILES['chooseFile2']['name'])) {
		// 		$img_name = $_FILES['chooseFile2']['name'];
			
		// 		$image2 = upload_image($img_name, $image_name, $category);
		// 		$destination = 'img/advertisements/'.$category.'/'.$newName;
		// 		move_uploaded_file($_FILES['chooseFile2']['tmp_name'], $destination);
		// }
		// } else {
		// 	$image2 = '';
		// }

		// ///////////image3////////////////////////
		// if($_FILES['chooseFile3']['name'] != '') {
		// 	if(isset($_FILES['chooseFile3']['name'])) {
		// 		$img_name = $_FILES['chooseFile3']['name'];
			
		// 		$image3 = upload_image($img_name, $image_name, $category);
		// 		$destination = 'img/advertisements/'.$category.'/'.$newName;
		// 		move_uploaded_file($_FILES['chooseFile3']['tmp_name'], $destination);
		// }
		// } else {
		// 	$image3 = '';
		// }

		// ///////////image4////////////////////////
		// if($_FILES['chooseFile4']['name'] != '') {
		// 	if(isset($_FILES['chooseFile4']['name'])) {
		// 		$img_name = $_FILES['chooseFile4']['name'];
			
		// 		$image4 = upload_image($img_name, $image_name, $category);
		// 		$destination = 'img/advertisements/'.$category.'/'.$newName;
		// 		move_uploaded_file($_FILES['chooseFile4']['tmp_name'], $destination);
		// }
		// } else {
		// 	$image4 = '';
		// }

		// ///////////image5////////////////////////
		// if($_FILES['chooseFile5']['name'] != '') {
		// 	if(isset($_FILES['chooseFile5']['name'])) {
		// 		$img_name = $_FILES['chooseFile5']['name'];
			
		// 		$image5 = upload_image($img_name, $image_name, $category);
		// 		$destination = 'img/advertisements/'.$category.'/'.$newName;
		// 		move_uploaded_file($_FILES['chooseFile5']['tmp_name'], $destination);
		// }
		// } else {
		// 	$image5 = '';
		// }

		// ///////////image6////////////////////////
		// if($_FILES['chooseFile6']['name'] != '') {
		// 	if(isset($_FILES['chooseFile6']['name'])) {
		// 		$img_name = $_FILES['chooseFile6']['name'];
			
		// 		$image6 = upload_image($img_name, $image_name, $category);
		// 		$destination = 'img/advertisements/'.$category.'/'.$newName;
		// 		move_uploaded_file($_FILES['chooseFile6']['tmp_name'], $destination);
		// }
		// } else {
		// 	$image6 = '';
		// }

		// ///////////image7////////////////////////
		// if($_FILES['chooseFile7']['name'] != '') {
		// 	if(isset($_FILES['chooseFile7']['name'])) {
		// 		$img_name = $_FILES['chooseFile7']['name'];
			
		// 		$image7 = upload_image($img_name, $image_name, $category);
		// 		$destination = 'img/advertisements/'.$category.'/'.$newName;
		// 		move_uploaded_file($_FILES['chooseFile7']['tmp_name'], $destination);
		// }
		// } else {
		// 	$image7 = '';
		// }

		// ///////////image8////////////////////////
		// if($_FILES['chooseFile8']['name'] != '') {
		// 	if(isset($_FILES['chooseFile8']['name'])) {
		// 		$img_name = $_FILES['chooseFile8']['name'];
			
		// 		$image8 = upload_image($img_name, $image_name, $category);
		// 		$destination = 'img/advertisements/'.$category.'/'.$newName;
		// 		move_uploaded_file($_FILES['chooseFile8']['tmp_name'], $destination);
		// }
		// } else {
		// 	$image8 = '';
		// }

		// ///////////image9////////////////////////
		// if($_FILES['chooseFile9']['name'] != '') {
		// 	if(isset($_FILES['chooseFile9']['name'])) {
		// 		$img_name = $_FILES['chooseFile9']['name'];
			
		// 		$image9 = upload_image($img_name, $image_name, $category);
		// 		$destination = 'img/advertisements/'.$category.'/'.$newName;
		// 		move_uploaded_file($_FILES['chooseFile9']['tmp_name'], $destination);
		// }
		// } else {
		// 	$image9 = '';
		// }

		// ///////////image10////////////////////////
		// if($_FILES['chooseFile10']['name'] != '') {
		// 	if(isset($_FILES['chooseFile10']['name'])) {
		// 		$img_name = $_FILES['chooseFile10']['name'];
			
		// 		$image10 = upload_image($img_name, $image_name, $category);
		// 		$destination = 'img/advertisements/'.$category.'/'.$newName;
		// 		move_uploaded_file($_FILES['chooseFile10']['tmp_name'], $destination);
		// }
		// } else {
		// 	$image10 = '';
		// }




	}
?>