<?php
include("err.php");
ob_start();
session_start();
include("connection.php");

$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";


if($_SESSION['adminLevel'] !='2') {
	header("location:index.php");
}

include("includes/header.php");



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title></title>
    <link rel="stylesheet" href="style_admin.css">
    <link href="t.css" rel="stylesheet">
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+sans+light|Open+sans+light'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>
        body {
            font-family: Gotham, "Helvetica Neue", Helvetica, Arial, "sans-serif";
            background-image: url(images/campusbkg.png);
             background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
         .menu{
            font-family: 'Montserrat', sans-serif;
        }
                .container-fluid{
            display: flex;
            flex-direction: column;
            align-content: center;
            justify-content: center;
        }
        .row{
            display: flex;
            flex-direction: row;
            align-content: center;
            justify-content: center;
        }
        .row:hover{
            background-color: rgba(0,0,0,0);
        }
        .left{
            text-align: left;
        }
        .edit-button{
        
            padding-top: 7px;
            padding-bottom: 7px;
            font-family: 'Montserrat', sans-serif;
            font-size: 14px;
            cursor: pointer;
            border: 2px solid darkgoldenrod;
            color: white;
            background: goldenrod;
            border-radius: 0px;
            width: 100%;
           
        }
        .edit-button:hover{
      
            font-size: 14px;
            cursor: pointer;
            color: white;
            background: darkgoldenrod;
            border-radius: 0px;
            align-items: center;
        }
        .col-md-8{
            padding-left: 0px;
            padding-right: 0px;
        }
        .col-md-4{
            padding-right: 0px;
        }
        .menu:hover{
            text-decoration: none;
        }
        .menu-item:hover{
            text-decoration: none;
        }
        #student_tc:hover{
            text-decoration: none;
        }
        .fas{
            color: white;
            font-size: 35px;
        }
        i:hover{
            color: goldenrod;
        }
      
    </style>
    <style type="text/css">
        a:link {
        text-decoration: none;
        }
        a:visited {
            text-decoration: none;
        }
        a:hover {
            text-decoration: none;
        }
        a:active {
            text-decoration: none;
        }
		
		.new-form-tables{
			padding-right:7%;padding-left:7%;
		}
    </style>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300" rel="stylesheet">
    <link href="css/bootstrap-4.0.0.css" rel="stylesheet" type="text/css">
</head>


<?php

    
    ?>

<body>
    <!-- Title and top navigation -->
    <?php include("includes/topnavLimited.php"); ?>
 

    <div class="container-fluid">
        <div class="row">
            <!-- Side navigation -->
			
            <?php
			if($_SESSION['adminLevel'] =='1') {
				include("includes/sidenav.php"); 
			}
			
			
			?>

        <div class="col">
            <form action="uploadScript.php" method="post" enctype="multipart/form-data">
					<div class='new-form-tables'>
                        <div class=''>
                            <table class='tc'>
                                <thead>
                                    <tr>
                                        <th class='tpl-bar-breadcrumbs' colspan='3'>Upload Document</th>
                                    </tr>
                                </thead>
                                <tbody>
									<tr>
                                        <td class='item'>Image Description</td>
                                        <td class='item'><input id="ImgDescription" name='imgDesc' type='text'  value='' required></td>
                                    </tr>
                                    <tr>
                                        <td class='item'>Upload</td>
										<td class='item' ><input required type="file" name="fileToUpload" id="fileToUpload"></td>
                                    </tr>
								</tbody>
							</table>
						</div>
					</div>
					
                    <br><br>
                        <input type="submit" name="submit" value="Submit" id="submit" class="edit-button">
                    <br><br>

                </form>
            </div>
        </div>
		<?php
				/*
				$str="INSERT INTO `internship_form`(`student_ID`, `super_user`, `super_pass`, `company_name`, `student_name`, `workInOffice`, `fiveActivies`, `relevantWork`, `difficulties`, `workExpRelation`, `wantToLearn`, `changedYourMind`, `providedContacts`, `internshipRating`, `startDate`, `endDate`, `internshipAddress`, `hoursWorked`, `cgtIndustry`, `performsDependable`, `cooperatesWell`, `showsInterest`, `learnsQuickly`, `showsInitiative`, `producesHighQuality`, `acceptsResponsibility`, `acceptsCriticism`, `demonstratesOrgSkills`, `demonstratesTechKnowledge`, `showsGoodJudgement`) VALUES ('$studentID','$superUsername','$superUsername','$companyChosen','$studentName','$workInOffice','$fiveActivies','$relevantWork','$difficulties','$workExpRelation','$wantToLearn','$changedYourMind','$providedContacts','$internshipRating','1992/2/14','1992/2/28','$internshipAddress','$hoursWorked','$cgtIndustry',0,0,0,0,0,0,0,0,0,0,0)";	
				mysqli_query($con, $str);
				$_SESSION["correctlyFilled"] = true;
				header('location:index.php');
				*/
		?>
		
		<?php
		/*
		if(isset($_GET['submit'])) {
			$imgDesc = $_GET['imgDesc']; 
						
			$target_dir = "studentWork/";
			$target_file = $target_dir . basename($_FILES['fileToUpload']['name']);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			$fileName =  $_FILES["fileToUpload"]["name"];
			echo $fileName;
			echo "<br>";
			$sql="SELECT work_id FROM `internship_work` WHERE work_id=(SELECT max(work_id) FROM `internship_work`)"; 
			$result=$con->query($str);
			/*
			$newName = 0;

			$imgNum = 0;

			$oldName = $fileName;
			while ($row = $result->fetch_assoc()) {
				if ($birdType == 1) {
					$newName = "red";
				}
				else if ($birdType == 2) {
					$newName = "blue";
				}
				else if ($birdType == 3) {
					$newName = "yellow";
				}
				else if ($birdType == 4) {
					$newName = "green";
				}
				else if ($birdType == 5) {
					$newName = "black";
				}
				$imgNum = $row['uniqueid'] + 1;
				$newName = $newName . strval($imgNum);
			}
			$imageFileType = "." . $imageFileType;
			$target_file = $target_dir . $newName;

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
			// Check if file already exists
			if (file_exists($target_file)) {
				echo "Sorry, file already exists.";
				$uploadOk = 0;
			}
			// Check file size
			if ($_FILES["fileToUpload"]["size"] > 500000) {
				echo "Sorry, your file is too large.";
				$uploadOk = 0;
			}
			// Allow certain file formats
			if($imageFileType != ".jpg" && $imageFileType != ".png" && $imageFileType != ".gif" ) {
				echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				$uploadOk = 0;
			}

			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
				echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {
				//if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file . $imageFileType)) {
				if (copy($_FILES['fileToUpload']['tmp_name'], $target_file . $imageFileType)) {
					echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
					$sql="INSERT INTO ImageDatabase (uniqueid, imageCategory, extension, description, imgName) VALUES ('$imgNum', '$birdType','$imageFileType','$imgDesc','$oldName')"; 
					$result= $conn->query($sql);
					if ($birdType == 1)
						header('Location: redBirds.php');
					else if ($birdType == 2)
						header('Location: blueBirds.php');
					else if ($birdType == 3)
						header('Location: yellowBirds.php');
					else if ($birdType == 4)
						header('Location: greenBirds.php');
					else if ($birdType == 5)
						header('Location: blackBirds.php');
				
				} else {
					echo "Sorry, there was an error uploading your file.";
				}
			}
		}	
		*/
		?>
		
		<script>
		
		
		
		/*
		$( "#submit" ).click(function() {
			var imgDesc = $('#ImgDescription').val();
			$.ajax({
				type: "POST",
				url: 'uploadScript.php',
				data:{imgDescUpload:imgDesc},
				success:function(html) {
					window.location = "uploadScript.php";
				}
			});
		});
		*/
		</script>
	</body>

</html>
