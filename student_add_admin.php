<?php
include("err.php");
ob_start();
session_start();
if($_SESSION['adminLevel'] !='1' && $_SESSION['adminLevel'] !='2') {
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
    </style>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300" rel="stylesheet">
    <link href="css/bootstrap-4.0.0.css" rel="stylesheet" type="text/css">
</head>


<?php

    if(isset($_GET['submit'])) {
        require "connection.php";
        
        /* inserting into student_details */
        $str_student_details="insert into student_details values('".$_GET['student_id']."', '".$_GET['first_name']."', '".$_GET['middle_name']."', '".$_GET['last_name']."', '".$_GET['email']."', '".$_GET['telephone']."', '".$_GET['campus']."', '".$_GET['company_id']."', '".$_GET['a_advisor']."')";
        mysqli_query($con, $str_student_details);
      
        /* inserting into job_title */
        $c=uniqid();
        $code=substr($c, -5);
        $str_edu_training="insert into job_title values('".$code."', '".$_GET['student_id']."', '".$_GET['a']."', '".$_GET['b']."', '".$_GET['c']."', '".$_GET['d']."', '".$_GET['e']."', '".$_GET['f']."', '".$_GET['g']."', '".$_GET['h']."', '".$_GET['i']."')";
        mysqli_query($con, $str_edu_training);
        
        
         $cdz=uniqid();
        $code22=substr($cdz, -5);
        $str_edu_trainingzz="insert into salary_rate values('".$code22."', '".$_GET['student_id']."', '".$_GET['aaa']."', '".$_GET['bbb']."', '".$_GET['ccc']."', '".$_GET['dddd']."')";
        mysqli_query($con, $str_edu_trainingzz);

        
         /* inserting into supervisor_details */
         $b=uniqid();
        $codez=substr($b, -5);
        $str_supervisor_details="insert into supervisor_details values('".$codez."', '".$_GET['sname']."', '".$_GET['semail']."', '".$_GET['sphone']."')";
        mysqli_query($con, $str_supervisor_details);
        
        
        /* inserting into company_information */
        $str_work_experience="insert into company_info values('".$code."', '".$_GET['student_id']."', '".$_GET['company_id']."', '".$_GET['start_date']."', '".$_GET['end_date']."', '".$_GET['address']."', '".$_GET['totalhours']."', '".$_GET['cgttype']."')";
        mysqli_query($con, $str_work_experience);



        /* inserting into os */
        $os_name='default';
        $sreview=$_GET['Qa'].''.$_GET['Qb'].''.$_GET['Qc'].''.$_GET['Qd'].''.$_GET['Qe'].''.$_GET['Qf'].''.$_GET['Qg'].''.$_GET['Qh'].''.$_GET['Qi'].''.$_GET['Qj'].''.$_GET['Qk'].''.$_GET['Ql'].''.$_GET['Qm'].''.$_GET['Qn'].''.$_GET['Qo'].''.$_GET['Qp'].''.$_GET['Qq'].''.$_GET['Qr'].''.$_GET['Qs'].''.$_GET['Qt'];

        $str_os="insert into supervisor_review values('".$code."', '".$_GET['student_id']."', '".$os_name."', '".$sreview."')";
    // echo $str_os;
        mysqli_query($con, $str_os);

    
        header('location:show_student.php');
    }
    ?>

<body>
    <!-- Title and top navigation -->
    <?php //include("includes/topnav.php"); ?>
 

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
				if($_SESSION['adminLevel'] =='1') {
				?>
                <div class="table_container">
                    <div class="sub-table-container">
                        <table class="tc">
                                <thead>
                                    <tr>
                                        <th class='tpl-bar-breadcrumbs' colspan='3'>STUDENT INFORMATION</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td class='item'>First Name</td>

                                        <td class='item'><input name='first_name' type='text' required value=''></td>
                                    </tr>

                                    <tr>
                                        <td class='item alter'>Middle Name</td>

                                        <td class='item alter'><input name='middle_name' type='text' value=''></td>
                                    </tr>

                                    <tr>
                                        <td class='item'>Last Name</td>

                                        <td class='item'><input name='last_name' type='text' required value=''></td>
                                    </tr>

                                    <tr>
                                        <td class='item'>Campus</td>

                                        <td class='item'><input name='campus' type='text' required value=''></td>
                                    </tr>

                                    <tr>
                                        <td class='item alter'>Student ID</td>

                                        <td class='item alter'><input name='student_id' type='text' required value=''></td>
                                    </tr>

                                    <tr>
                                        <td class='item'>Academic Advisor</td>
<!--
                                        <td class='item'><select name='company_id' onchange='x(this)'>
                                                <option value=''> select </option>
                                                <?php
                                                    require "connection.php";
                                                    $str1='select * from company_details';
                                                    $result1=mysqli_query($con, $str1);
                                                    while ($row1=mysqli_fetch_array($result1)) {
                                                        echo "<option value=".$row1[0].">".$row1[1]."</option>";
                                                    }?>
                                            </select></td>

-->
                                         <td class='item alter'><input name='a_advisor' type='text' required value=''></td>
                                   
                                    </tr>



                                    <tr>
                                        <td class='item alter'>Students Email</td>

                                        <td class='item alter'><input name='email' type='text' required value=''></td>
                                    </tr>

                                    <tr>
                                        <td class='item'>Students Phone </td>

                                        <td class='item'><input name='telephone' type='text' required value=''></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
				<?php
				}
				?>




                    <div class='table_container'>
                        <div class='sub-table-container'>
                            <table class='tc'>
                                <thead>
                                    <tr>
                                        <th class='tpl-bar-breadcrumbs' colspan='3'>JOB TITLE</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td class='item alter'>Did you work in an office or in site?</td>

                                        <td class='item alter'><input name='a' type='text' required value=''></td>
                                    </tr>

                                    <tr>
                                        <td class='item'>List 5 activities that you regularly performed during internship.</td>

                                        <td class='item'><input name='b' type='text' required value=''></td>
                                    </tr>

                                    <tr>
                                        <td class='item alter'>Did supervisor give you relevant work to accomplish-specify!</td>

                                        <td class='item alter'><input name='c' type='text' required value=''></td>
                                    </tr>

                                    <tr>
                                        <td class='item'>Difficulties or problem areas encountered during internship.</td>

                                        <td class='item'><input name='d' type='text' required value=''></td>
                                    </tr>

                                    <tr>
                                        <td class='item alter'>Explain how work experience related to your major.</td>

                                        <td class='item alter'><input name='e' type='text' required value=''></td>
                                    </tr>

                                    <tr>
                                        <td class='item'>Is there anything you wanted to learn during internship that you were not able to?</td>

                                        <td class='item'><input name='f' type='text' required value=''></td>
                                    </tr>

                                    <tr>
                                        <td class='item'>Has this work experience changed your mind about which sector of CGT you might be most interested in pursuing?</td>

                                        <td class='item'><input name='g' type='text' required value=''></td>
                                    </tr>

                                    <tr>
                                        <td class='item'>Internship provided me with contacts which may lead to future employment. Type Yes or No.</td>

                                        <td class='item'><input name='h' type='text' required value=''></td>
                                    </tr>

                                    <tr>
                                        <td class='item'>Considering your overall experience - how would you rate this internship? (1 = Very Dissatisfied, 5 = Very Satisfied)</td>

                                        <td class='item'><input name='i' type='text' required value=''></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class='table_container'>
                        <div class='sub-table-container'>
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
                                                <option value=''> select </option>
                                                <?php
                                                    require "connection.php";
                                                    $str1='select * from company_details';
                                                    $result1=mysqli_query($con, $str1);
                                                    while ($row1=mysqli_fetch_array($result1)) {
                                                        echo "<option value=".$row1[0].">".$row1[1]."</option>";
                                                    }?>
                                            </select></td>
                                    </tr>

                                </tbody>

                                <tbody>


                                    <tr>
                                        <td class='item'>Work Start Date</td>

                                        <td class='item'><input name='start_date' type='text' required value=''></td>
                                    </tr>

                                    <tr>
                                        <td class='item alter'>Work End Date</td>

                                        <td class='item alter'><input name='end_date' type='text' required value=''></td>
                                    </tr>

                                    <tr>
                                        <td class='item'>Address of Home/Main Office</td>

                                        <td class='item'><input name='address' type='text' required value=''></td>
                                    </tr>

                                    <tr>
                                        <td class='item alter'>Total Hours worked during the period noted</td>

                                        <td class='item alter'><input name='totalhours' type='text' required value=''></td>
                                    </tr>

                                    <tr>
                                        <td class='item alter'>Type/Sector of CGT industry</td>

                                        <td class='item alter'><input name='cgttype' type='text' required value=''></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    
                    <div class='table_container'>
                        <div class='sub-table-container'>
                            <table class='tc'>
                                <thead>
                                    <tr>
                                        <th class='tpl-bar-breadcrumbs' colspan='3'>SALARY/HOURLY RATE</th>
                                    </tr>
                                </thead>


                                <tbody>


                                    <tr>
                                        <td class='item'>Were you paid?</td>

                                        <td class='item'><input name='aaa' type='text' required value=''></td>
                                    </tr>

                                    <tr>
                                        <td class='item alter'>If so, how much?</td>

                                        <td class='item alter'><input name='bbb' type='text' required value=''></td>
                                    </tr>

                                    <tr>
                                        <td class='item'>Did you receive housing stipened?</td>

                                        <td class='item'><input name='ccc' type='text' required value=''></td>
                                    </tr>

                                    <tr>
                                        <td class='item alter'>Did you receive any other financial assistance from the company for your internship? Please select all that apply.</td>

                                        <td class='item alter'><input name='dddd' type='text' required value=''></td>
                                    </tr>

                                 
                                </tbody>
                            </table>
                        </div>
                    </div>
                    

				<?php
				if($_SESSION['adminLevel'] == '3' || $_SESSION['adminLevel'] == '1') {
				?>

                    <!--                SUPERVISOR SECTION-->
                    <div class='table_container'>
                        <div class='sub-table-container'>
                            <table class='tc'>
                                <thead>
                                    <tr>
                                        <th class='tpl-bar-breadcrumbs' colspan='3'>(SUPERVISOR ONLY) SUPERVISOR INFORMATION</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td class='item'>Supervisor's name</td>

                                        <td class='item'><input name='sname' type='text' required value=''></td>
                                    </tr>
                                    
                                    <tr>
                                        <td class='item'>Supervisor's email</td>

                                        <td class='item'><input name='semail' type='text' required value=''></td>
                                    </tr>

                                    <tr>
                                        <td class='item alter'>Supervisor's phone</td>

                                        <td class='item alter'><input name='sphone' type='text' required value=''></td>
                                    </tr>



                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class='table_container'>
                        <div class='sub-table-container'>
                            <table class='tc'>
                                <thead>
                                    <tr>
                                        <th class='tpl-bar-breadcrumbs' colspan='6'>(SUPERVISOR ONLY) REVIEW OF INTERN</th>
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
</body>

</html>
