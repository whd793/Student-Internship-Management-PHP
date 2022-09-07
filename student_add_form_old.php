<?php
include("err.php");
ob_start();
session_start();
include("connection.php");

$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";


if (strpos($actual_link, "?") !== false) {
	$linkPeices = explode("?", $actual_link);
	$uniqueName = $linkPeices[1];
	$result = mysqli_query($con, "SELECT * FROM `internship_form` WHERE `super_user` = '$uniqueName'");
	
	while($row=mysqli_fetch_array($result)) {
		$_SESSION["student_review_ID"] = $row[0];
		$_SESSION['adminLevel'] = 3;
		$_SESSION['studentReviewName'] = $row[5];
	}
	
}
else{
	if($_SESSION['adminLevel'] !='2') {
		header("location:index.php");
	}
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
            <form action="" method="GET" accept-charset="utf-8">
                    
					<?php 
					if ($_SESSION['adminLevel'] == '2'){
						?>
					<div class='new-form-tables'>
                        <div class=''>
                            <table class='tc new-form-tables'>
                                <thead>
                                    <tr>
                                        <th class='tpl-bar-breadcrumbs' colspan='3'>JOB TITLE</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td class='item alter'>Did you work in an office or in site?</td>

                                        <td class='item alter'><input name='workInOffice' type='text'  value='' required></td>
                                    </tr>

                                    <tr>
                                        <td class='item'>List 5 activities that you regularly performed during internship.</td>

                                        <td class='item'><input name='fiveActivies' type='text'  value='' required></td>
                                    </tr>

                                    <tr>
                                        <td class='item alter'>Did supervisor give you relevant work to accomplish-specify!</td>

                                        <td class='item alter'><input name='relevantWork' type='text'  value='' required></td>
                                    </tr>

                                    <tr>
                                        <td class='item'>Difficulties or problem areas encountered during internship.</td>

                                        <td class='item'><input name='difficulties' type='text'  value='' required></td>
                                    </tr>

                                    <tr>
                                        <td class='item alter'>Explain how work experience related to your major.</td>

                                        <td class='item alter'><input name='workExpRelation' type='text'  value='' required></td>
                                    </tr>

                                    <tr>
                                        <td class='item'>Is there anything you wanted to learn during internship that you were not able to?</td>

                                        <td class='item'><input name='wantToLearn' type='text'  value='' required></td>
                                    </tr>

                                    <tr>
                                        <td class='item'>Has this work experience changed your mind about which sector of CGT you might be most interested in pursuing?</td>

                                        <td class='item'><input name='changedYourMind' type='text'  value='' required></td>
                                    </tr>

                                    <tr>
                                        <td class='item'>Internship provided me with contacts which may lead to future employment. Type Yes or No.</td>

                                        <td class='item'><input name='providedContacts' type='checkbox'  value='' required></td>
                                    </tr>

                                    <tr>
                                        <td class='item'>Considering your overall experience - how would you rate this internship? (1 = Very Dissatisfied, 5 = Very Satisfied)</td>

                                        <td class='item'><input name='internshipRating' type='number' min="1" max="5" value='' required></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
					<br>

                    <div class='new-form-tables'>
                        <div class=''>
                            <table class='tc'>
                                <thead>
                                    <tr>
                                        <th class='tpl-bar-breadcrumbs' colspan='3'>COMPANY INFORMATION</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td class='item'>Company Name</td>
                                        <td class='item'><select name='company_id' onchange='x(this)'>
                                                <option name='company_id_selected' value=''> select </option>
                                                <?php
                                                    require "connection.php";
                                                    $str1='select * from company_details';
                                                    $result1=mysqli_query($con, $str1);
                                                    while ($row1=mysqli_fetch_array($result1)) {
                                                        echo "<option value=".$row1[1].">".$row1[1]."</option>";
                                                    }?>
                                            </select></td>
                                    </tr>

                                </tbody>

                                <tbody>


                                    <tr>
                                        <td class='item'>Work Start Date</td>

                                        <td class='item'><input name='startDate' type='date'  value='' required></td>
                                    </tr>

                                    <tr>
                                        <td class='item alter'>Work End Date</td>

                                        <td class='item alter'><input name='endDate' type='date'  value='' required></td>
                                    </tr>

                                    <tr>
                                        <td class='item'>Address of Home/Main Office</td>

                                        <td class='item'><input name='internshipAddress' type='text'  value='' required></td>
                                    </tr>

                                    <tr>
                                        <td class='item alter'>Total Hours worked during the period noted</td>

                                        <td class='item alter'><input name='hoursWorked' type='number'  value='' required></td>
                                    </tr>

                                    <tr>
                                        <td class='item alter'>Type/Sector of CGT industry</td>

                                        <td class='item alter'><input name='cgtIndustry' type='text'  value='' required></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <br>
                    
                    <div class='new-form-tables'>
                        <div class=''>
                            <table class='tc'>
                                <thead>
                                    <tr>
                                        <th class='tpl-bar-breadcrumbs' colspan='3'>SALARY/HOURLY RATE</th>
                                    </tr>
                                </thead>


                                <tbody>


                                    <tr>
                                        <td class='item'>Were you paid?</td>

                                        <td class='item'><input name='aaa' type='checkbox'  value=''></td>
                                    </tr>

                                    <tr>
                                        <td class='item alter'>If so, how much?</td>

                                        <td class='item alter'><input name='bbb' type='text'  value='' required></td>
                                    </tr>

                                    <tr>
                                        <td class='item'>Did you receive housing stipened?</td>

                                        <td class='item'><input name='ccc' type='text'  value='' required></td>
                                    </tr>

                                    <tr>
                                        <td class='item alter'>Did you receive any other financial assistance from the company for your internship? Please select all that apply.</td>

                                        <td class='item alter'><input name='dddd' type='text'  value='' required></td>
                                    </tr>

                                 
                                </tbody>
                            </table>
                        </div>
                    </div>
                    

				<?php
				}
				if($_SESSION['adminLevel'] == '3' || $_SESSION['adminLevel'] == '1') {
				?>
				
				<h1 style="text-align:center;color:white;"> Reviewing  <?php echo $_SESSION['studentReviewName'] ?> </h1>
				<br>

                    <!--                SUPERVISOR SECTION-->
                    <div class='new-form-tables'>
                        <div>
                            <table class='tc'>
                                <thead>
                                    <tr>
                                        <th class='tpl-bar-breadcrumbs' colspan='3'> SUPERVISOR INFORMATION</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td class='item'>Supervisor's name</td>

                                        <td class='item'><input name='sname' type='text'  value=''></td>
                                    </tr>
                                    
                                    <tr>
                                        <td class='item'>Supervisor's email</td>

                                        <td class='item'><input name='semail' type='text'  value=''></td>
                                    </tr>

                                    <tr>
                                        <td class='item alter'>Supervisor's phone</td>

                                        <td class='item alter'><input name='sphone' type='text'  value=''></td>
                                    </tr>



                                </tbody>
                            </table>
                        </div>
                    </div>
					<br>
                    <div class='new-form-tables'>
                        <div>
                            <table class='tc'>
                                <thead>
                                    <tr>
                                        <th class='tpl-bar-breadcrumbs' colspan='6'> REVIEW OF INTERN</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td class='item'></td>

                                        <td class='item'>2</td>

                                        <td class='item'>1</td>

                                        <td class='item'>0</td>

                                        <td class='item'>N/A</td>

                                        <!--                                    <td class='item'>N/A</td>-->


                                    </tr>

                                    <tr>
                                        <td class='item alter'>Performs in a depandable manner</td>
                                        <td onclick='z(this)' class='item alter'><input name='Qa' value='3' checked type='radio'></td>
                                        <td onclick='z(this)' class='item alter'><input name='Qa' value='2' type='radio'></td>
                                        <td onclick='z(this)' class='item alter'><input name='Qa' value='1' type='radio'></td>
                                        <td onclick='z(this)' class='item alter'><input name='Qa' value='0' type='radio'></td>
                                    </tr>

                                    <tr>
                                        <td class='item'>Cooperates with co-workers and supervisors</td>
                                        <td onclick='z(this)' class='item'><input name='Qb' value='3' checked type='radio'></td>
                                        <td onclick='z(this)' class='item'><input name='Qb' value='2' type='radio'></td>
                                        <td onclick='z(this)' class='item'><input name='Qb' value='1' type='radio'></td>
                                        <td onclick='z(this)' class='item'><input name='Qb' value='0' type='radio'></td>
                                    </tr>

                                    <tr>
                                        <td class='item alter'>Show interests in work</td>
                                        <td onclick='z(this)' class='item alter'><input name='Qc' value='3' checked type='radio'></td>
                                        <td onclick='z(this)' class='item alter'><input name='Qc' value='2' type='radio'></td>
                                        <td onclick='z(this)' class='item alter'><input name='Qc' value='1' type='radio'></td>
                                        <td onclick='z(this)' class='item alter'><input name='Qc' value='0' type='radio'></td>

                                    </tr>

                                    <tr>
                                        <td class='item'>Learns quickly</td>
                                        <td onclick='z(this)' class='item'><input name='Qd' value='3' checked type='radio'></td>
                                        <td onclick='z(this)' class='item'><input name='Qd' value='2' type='radio'></td>
                                        <td onclick='z(this)' class='item'><input name='Qd' value='1' type='radio'></td>
                                        <td onclick='z(this)' class='item'><input name='Qd' value='0' type='radio'></td>
                                    </tr>

                                    <tr>
                                        <td class='item alter'>Show initiative</td>
                                        <td onclick='z(this)' class='item alter'><input name='Qe' value='3' checked type='radio'></td>
                                        <td onclick='z(this)' class='item alter'><input name='Qe' value='2' type='radio'></td>
                                        <td onclick='z(this)' class='item alter'><input name='Qe' value='1' type='radio'></td>
                                        <td onclick='z(this)' class='item alter'><input name='Qe' value='0' type='radio'></td>
                                    </tr>

                                    <tr>
                                        <td class='item'>Produces high quality work</td>
                                        <td onclick='z(this)' class='item'><input name='Qf' value='3' checked type='radio'></td>
                                        <td onclick='z(this)' class='item'><input name='Qf' value='2' type='radio'></td>
                                        <td onclick='z(this)' class='item'><input name='Qf' value='1' type='radio'></td>
                                        <td onclick='z(this)' class='item'><input name='Qf' value='0' type='radio'></td>
                                    </tr>

                                    <tr>
                                        <td class='item alter'>Accepts responsibility</td>
                                        <td onclick='z(this)' class='item alter'><input name='Qg' value='3' checked type='radio'></td>
                                        <td onclick='z(this)' class='item alter'><input name='Qg' value='2' type='radio'></td>
                                        <td onclick='z(this)' class='item alter'><input name='Qg' value='1' type='radio'></td>
                                        <td onclick='z(this)' class='item alter'><input name='Qg' value='0' type='radio'></td>
                                    </tr>

                                    <tr>
                                        <td class='item'>Accepts criticism</td>
                                        <td onclick='z(this)' class='item'><input name='Qh' value='3' checked type='radio'></td>
                                        <td onclick='z(this)' class='item'><input name='Qh' value='2' type='radio'></td>
                                        <td onclick='z(this)' class='item'><input name='Qh' value='1' type='radio'></td>
                                        <td onclick='z(this)' class='item'><input name='Qh' value='0' type='radio'></td>
                                    </tr>

                                    <tr>
                                        <td class='item alter'>Demonstrates organizational skills</td>
                                        <td onclick='z(this)' class='item alter'><input name='Qi' value='3' checked type='radio'></td>
                                        <td onclick='z(this)' class='item alter'><input name='Qi' value='2' type='radio'></td>
                                        <td onclick='z(this)' class='item alter'><input name='Qi' value='1' type='radio'></td>
                                        <td onclick='z(this)' class='item alter'><input name='Qi' value='0' type='radio'></td>
                                    </tr>

                                    <tr>
                                        <td class='item'>Demonstrate technological knowledge and expertise</td>
                                        <td onclick='z(this)' class='item'><input name='Qj' value='3' checked type='radio'></td>
                                        <td onclick='z(this)' class='item'><input name='Qj' value='2' type='radio'></td>
                                        <td onclick='z(this)' class='item'><input name='Qj' value='1' type='radio'></td>
                                        <td onclick='z(this)' class='item'><input name='Qj' value='0' type='radio'></td>
                                    </tr>

                                    <tr>
                                        <td class='item alter'>Show good judgement</td>
                                        <td onclick='z(this)' class='item alter'><input name='Qk' value='3' checked type='radio'></td>
                                        <td onclick='z(this)' class='item alter'><input name='Qk' value='2' type='radio'></td>
                                        <td onclick='z(this)' class='item alter'><input name='Qk' value='1' type='radio'></td>
                                        <td onclick='z(this)' class='item alter'><input name='Qk' value='0' type='radio'></td>

                                    </tr>
                                    
                                      <tr>
                                        <td class='item alter'>  Demonstrates creativity/originality</td>
                                        <td onclick='z(this)' class='item alter'><input name='Ql' value='3' checked type='radio'></td>
                                        <td onclick='z(this)' class='item alter'><input name='Ql' value='2' type='radio'></td>
                                        <td onclick='z(this)' class='item alter'><input name='Ql' value='1' type='radio'></td>
                                        <td onclick='z(this)' class='item alter'><input name='Ql' value='0' type='radio'></td>

                                    </tr>
                                    
                                     <tr>
                                        <td class='item alter'>  Analyzes problems effectively</td>
                                        <td onclick='z(this)' class='item alter'><input name='Qm' value='3' checked type='radio'></td>
                                        <td onclick='z(this)' class='item alter'><input name='Qm' value='2' type='radio'></td>
                                        <td onclick='z(this)' class='item alter'><input name='Qm' value='1' type='radio'></td>
                                        <td onclick='z(this)' class='item alter'><input name='Qm' value='0' type='radio'></td>

                                    </tr>
                                    
                                      <tr>
                                        <td class='item alter'>  Is self-reliant</td>
                                        <td onclick='z(this)' class='item alter'><input name='Qn' value='3' checked type='radio'></td>
                                        <td onclick='z(this)' class='item alter'><input name='Qn' value='2' type='radio'></td>
                                        <td onclick='z(this)' class='item alter'><input name='Qn' value='1' type='radio'></td>
                                        <td onclick='z(this)' class='item alter'><input name='Qn' value='0' type='radio'></td>

                                    </tr>
                                    
                                    <tr>
                                        <td class='item alter'> Communicates well</td>
                                        <td onclick='z(this)' class='item alter'><input name='Qo' value='3' checked type='radio'></td>
                                        <td onclick='z(this)' class='item alter'><input name='Qo' value='2' type='radio'></td>
                                        <td onclick='z(this)' class='item alter'><input name='Qo' value='1' type='radio'></td>
                                        <td onclick='z(this)' class='item alter'><input name='Qo' value='0' type='radio'></td>

                                    </tr>
                                    
                                       <tr>
                                        <td class='item alter'>Writes effectively</td>
                                        <td onclick='z(this)' class='item alter'><input name='Qp' value='3' checked type='radio'></td>
                                        <td onclick='z(this)' class='item alter'><input name='Qp' value='2' type='radio'></td>
                                        <td onclick='z(this)' class='item alter'><input name='Qp' value='1' type='radio'></td>
                                        <td onclick='z(this)' class='item alter'><input name='Qp' value='0' type='radio'></td>

                                    </tr>

                                        <tr>
                                        <td class='item alter'>Has a professional attitude</td>
                                        <td onclick='z(this)' class='item alter'><input name='Qq' value='3' checked type='radio'></td>
                                        <td onclick='z(this)' class='item alter'><input name='Qq' value='2' type='radio'></td>
                                        <td onclick='z(this)' class='item alter'><input name='Qq' value='1' type='radio'></td>
                                        <td onclick='z(this)' class='item alter'><input name='Qq' value='0' type='radio'></td>

                                    </tr>
                                    
                                        <tr>
                                        <td class='item alter'>Gives a professional appearance</td>
                                        <td onclick='z(this)' class='item alter'><input name='Qr' value='3' checked type='radio'></td>
                                        <td onclick='z(this)' class='item alter'><input name='Qr' value='2' type='radio'></td>
                                        <td onclick='z(this)' class='item alter'><input name='Qr' value='1' type='radio'></td>
                                        <td onclick='z(this)' class='item alter'><input name='Qr' value='0' type='radio'></td>

                                    </tr>
                                    
                                      <tr>
                                        <td class='item alter'>Is punctual</td>
                                        <td onclick='z(this)' class='item alter'><input name='Qs' value='3' checked type='radio'></td>
                                        <td onclick='z(this)' class='item alter'><input name='Qs' value='2' type='radio'></td>
                                        <td onclick='z(this)' class='item alter'><input name='Qs' value='1' type='radio'></td>
                                        <td onclick='z(this)' class='item alter'><input name='Qs' value='0' type='radio'></td>

                                    </tr>
                                    
                                      <tr>
                                        <td class='item alter'>Uses time effectively</td>
                                        <td onclick='z(this)' class='item alter'><input name='Qt' value='3' checked type='radio'></td>
                                        <td onclick='z(this)' class='item alter'><input name='Qt' value='2' type='radio'></td>
                                        <td onclick='z(this)' class='item alter'><input name='Qt' value='1' type='radio'></td>
                                        <td onclick='z(this)' class='item alter'><input name='Qt' value='0' type='radio'></td>

                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
					<?php
					
					}
					?>





                    <br><br>
                        <input type="submit" name="submit" value="Submit" id="submit" class="edit-button">
                    <br><br>

                </form>
            </div>
        </div>
		<?php
		
		function generateRandomString($length = 10) {
			return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
		}

		
		if(isset($_GET['submit'])) {
            require "connection.php";
			if($_SESSION['adminLevel'] == '2')
			{
				$studentID = $_SESSION['currentid'];
				$newFormID = 0;
				
				$studentName = "";
				$result = mysqli_query($con, "SELECT * FROM `student_details` WHERE STUDENT_ID = '$studentID'");
				while($row=mysqli_fetch_array($result)) {
					$studentName = $row[1] . " " . $row[3];
				}
				
				$result = mysqli_query($con, "SELECT MAX(`form_number`) FROM `internship_form`");
				while($row=mysqli_fetch_array($result)) {
					$newFormID = $row[0] + 1;
				}
				$superUsername = generateRandomString() . strval($newFormID);
				$superPassword = generateRandomString();
				$companyChosen = $_GET['company_id'];
				$workInOffice = $_GET['workInOffice'];
				$fiveActivies = $_GET['fiveActivies']; 
				$relevantWork = $_GET['relevantWork'];
				$difficulties = $_GET['difficulties'];
				$workExpRelation = $_GET['workExpRelation'];
				$wantToLearn = $_GET['wantToLearn'];
				$changedYourMind = $_GET['changedYourMind'];
				$providedContacts = $_GET['providedContacts'];
				$internshipRating = $_GET['internshipRating'];
				$startDate = "1992-03-12";
				$endDate = "1992-03-12";
				$internshipAddress = $_GET['internshipAddress'];
				$hoursWorked = $_GET['hoursWorked'];
				$cgtIndustry = $_GET['cgtIndustry'];
				
				
				$str="INSERT INTO `internship_form`(`student_ID`, `super_user`, `super_pass`, `company_name`, `student_name`, `workInOffice`, `fiveActivies`, `relevantWork`, `difficulties`, `workExpRelation`, `wantToLearn`, `changedYourMind`, `providedContacts`, `internshipRating`, `startDate`, `endDate`, `internshipAddress`, `hoursWorked`, `cgtIndustry`, `performsDependable`, `cooperatesWell`, `showsInterest`, `learnsQuickly`, `showsInitiative`, `producesHighQuality`, `acceptsResponsibility`, `acceptsCriticism`, `demonstratesOrgSkills`, `demonstratesTechKnowledge`, `showsGoodJudgement`) VALUES ('$studentID','$superUsername','$superPassword','Boblys','Bigsly Bog',0,'Five Activities',0,'Difficulties','Yea',0,0,0,2,'1992/2/14','1992/2/28','Bug Frog Lane',20,'Fun',0,0,0,0,0,0,0,0,0,0,0)";
				mysqli_query($con, $str);
				header('location:index.php');
			}
		}
		?>
	</body>

</html>
