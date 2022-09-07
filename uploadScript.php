<?php
session_start();
include("connection.php");
$student_id = $_SESSION['currentid'];
$target_dir = "studentWork/";
$imgDesc = $_POST["imgDesc"];
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
echo "<br>";
echo $imageFileType;
echo "<br>";



$sql="SELECT work_id FROM `internship_work` WHERE work_id=(SELECT max(work_id) FROM `internship_work`)"; 
$result=$con->query($sql);
$newName = "studentWorkNum";
while ($row = $result->fetch_assoc()) {
	$imgNum = $row['work_id'] + 1;
	$newName = $newName . strval($imgNum);
	$newName = $newName . "." . $imageFileType;
}
echo $newName;
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 1500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir . $newName )) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		$str="INSERT INTO `internship_work`(`student_id`, `work_name`, `file_name`) VALUES ('$student_id','$imgDesc','$newName')";	
		mysqli_query($con, $str);
		$_SESSION["uploadedImgName"] = $imgDesc;
		header('Location: student_add_form.php');
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>