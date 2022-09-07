<?php
include("err.php");
ob_start();
session_start();

if (isset($_SESSION["logIn"])){
	?>
	<div id="myPopUp">
	</div>
	<?php
	unset($_SESSION["logIn"]);
}
if (isset($_SESSION["correctlyFilled"])){
	?>
	<div id="myPopUpFilledCorrect">
	</div>
	<?php
	unset($_SESSION["correctlyFilled"]);
}

if (isset($_GET['submit'])) {
	include("connection.php");
	//require "connection.php";
	$str="select * from users;";
	$result=$con->query($str);
	//$result=mysqli_query($con, $str);
	while($row=mysqli_fetch_array($result)) {
		if ($_GET['password'] == $row[2]){
			echo "You got the password right";
		}
		if($_GET['username'] == $row[1] && $_GET['password'] == $row[2] ) {
			$_SESSION['a']=$row[1];
			$_SESSION['adminLevel'] = $row[3];
			$_SESSION['currentid'] = $row[0];
			if ($_SESSION['adminLevel'] == 1)
				header("location:show_student.php");
			else if ($_SESSION['adminLevel'] == 2) {
				header("location:student_add_form.php");
			}
		}
		else  {
			//$_SESSION["logIn"] = true;
			//header("location:index.php");
		}
	}
	$str="select * from internship_form;";
	$result=$con->query($str);
	//$result=mysqli_query($con, $str);
	while($row=mysqli_fetch_array($result)) {
		if ($_GET['username'] == $row[1] && $_GET['password'] == $row[2]){
			$_SESSION["student_review_ID"] = $row[0];
			$_SESSION['adminLevel'] = 3;
			$_SESSION['studentReviewName'] = $row[5];
			header("location:student_add_form.php");
		}
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Internship Reporting Survey</title>

<link href="css/bootstrap-4.0.0.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



<!--<link rel='stylesheet' href='css/style.css' />-->

<style>

	.modal {
		position: fixed; /* Stay in place */
		border-radius:15px;
		z-index: 10; /* Sit on top */
		left: 0;
		top: 0;
		width: 100%; /* Full width */
		height: 100%; /* Full height */
		overflow: auto; /* Enable scroll if needed */
		background-color: rgb(0,0,0); /* Fallback color */
		background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
	}

	/* Modal Content/Box */
	.modal-content {
		background-color: #fefefe;
		margin: 15% auto; /* 15% from the top and centered */
		padding: 20px;
		border: 1px solid #888;
		width: 400px; 
		height:100px;
	}

	/* The Close Button */
	.close {
	  color: #aaa;
	  float: right;
	  font-size: 28px;
	  font-weight: bold;
	}

    body, html{
        height: 100%;
        display: grid;
    }
    body{
            background-image: url(images/homebkg.png);
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            color: white;           
            margin: 0px;
        }
        div.login{
            margin: auto;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            text-align: center;
            padding-top: 40px;
            padding-bottom: 20px;
            padding-left: 70px;
            padding-right: 70px;
            font-family: Gotham, "Helvetica Neue", Helvetica, Arial, "sans-serif";
            background-image: url(images/bg.png);
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
        div.container-fluid{
            margin: auto;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-content: center;
        }
        div.row{
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-content: center;
        }
        #logo{
            
            text-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
        #email{
            border: 2px solid white;
            padding: 5px;
            padding-top:10px;
            padding-bottom: 10px;
            background-color: rgba(0,0,0,0);
            color: white;
        }
        #password{
            border: 2px solid white;
            padding: 5px;
            padding-top:10px;
            padding-bottom: 10px;
            background-color: rgba(0,0,0,0);
            color: white;
        }
        #button{
            border: none;
            padding-top: 7px;
            padding-bottom: 7px;
            padding-left: 25px;
            padding-right: 25px;
            background-color: goldenrod;
            color: white;
            width: 100%;
            cursor: pointer;
        }
        #button:hover{
            background-color: darkgoldenrod;
        }
        h1{
            color: white;
            font-family: 'Fjalla One', sans-serif;
            font-size: 25px;
        }
        ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: white;
  opacity: 1; /* Firefox */
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
  color: white;
}

::-ms-input-placeholder { /* Microsoft Edge */
  color: white;
}
        input{
            width: 100%;
            border-radius: 4px;
        }
        .small{
            font-size: 12px;
            color: white;
        }
        
 
</style>

</head>

<body>
  <div class="container-fluid">
    <div class="row">
            <div class="col-md-4">&nbsp;</div>
            <div class="col-md-4 login" style=""><a href="https://polytechnic.purdue.edu/"><img src="images/purduelogo.png" alt="Purdue logo" width="211" id="logo" height="66" /></a><br><h1>Login</h1><br>
			<form class="form-login" method="GET" action="index.php">
                     <!-- <label for='username'>Username:</label> -->
                  <input type="text" id="email" required name="username" placeholder="Username" /><br><br>
                    <!-- <label for='password'>Password:</label> -->
                  <input type="password" id="password" required name="password" placeholder="Password" /><br><br>
                  <input type="submit" value="Login" name="submit" id="button" class="signups btn default"><br><br>
            </form>
        </div>
        <div class="col-md-4">&nbsp;</div>
    </div>
    </div>
	<div id="incorrectLoginModal" class="modal">
		<div class="modal-content">
		<span id="closeBtn" class="close">&times;</span>
		<p style="color:black;"><strong>Error:</strong> Incorrect Login</p>
		</div>
	</div>
	
	<div id="filledCorrect" class="modal">
		<div class="modal-content">
		<span id="closeBtn2" class="close">&times;</span>
		<p style="color:black;"><strong>Internship Form Submitted</strong></p>
		</div>
	</div>
	
	<script>
	
	var myEle = document.getElementById("myPopUp");
	var myEle2 = document.getElementById("myPopUpFilledCorrect");
    
	if(myEle2){
		$("#filledCorrect").show();
	}
	else if(myEle){
		$("#incorrectLoginModal").show();
	}
	$( "#closeBtn2" ).click(function() {
		$("#filledCorrect").hide();
		location.reload();
	});
	$( "#closeBtn" ).click(function() {
		$("#incorrectLoginModal").hide();
		location.reload();
	});
	
	</script>
	
</body>

</html>
