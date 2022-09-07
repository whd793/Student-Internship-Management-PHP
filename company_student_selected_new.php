<?php
include("err.php");
ob_start();
session_start();
if($_SESSION['a'] !='admin') {
	header('location:index.php');
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta content="'"text/html; charset=utf-8"'" http-equiv="'"Content-Type"'">
    <title>iMIS - Internship Management Information System</title>
    <link rel="tylesheet" href="style_admin.css">
    <link href="t.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+sans+light|Open+sans+light">
    <link href="css/bootstrap-4.0.0.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">


    <style>
        body {
			font-family: Gotham, "Helvetica Neue", Helvetica, Arial, "sans-serif";
            background: url(images/campusbkg-testing.png) no-repeat fixed center center/cover;
        }

        td a {
            display: block;
            text-decoration: none;
        }
        .menu{
            font-family: 'Montserrat', sans-serif;
            border-radius: 4px;
        }
        .menu-item{
            border-radius: 0px;
        }
      
        .container-fluid{
            display: flex;
            flex-direction: column;
            align-content: center;
            justify-content: center;
        }
        .col-md-2{
            padding-right: 0px;
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

        .edit-button{
        font-family: Gotham, "Helvetica Neue", Helvetica, Arial, "sans-serif";
            font-size: 14px;
            cursor: pointer;
        }
        .left{
            text-align: left;
        }
        .fas{
            color: white;
            font-size: 35px;
        }
        i:hover{
            color: goldenrod;
        }
    </style>
    <script type='text/javascript' language='javascript'>
        function x(sel) {
            sel.form.submit();
        }

    </script>

    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0px";
        }

    </script>
</head>

<div class="container-fluid1">
    <div class="row1" style="padding-bottom: 60px;">
        <div class="col-md-12">
            <a href="https://www.purdue.edu/"><img src="images/purduelogo2.png" alt="Purdue Logo" width="461" height="108" class="img-fluid" style="float: left; max-width: 100%; height: auto; text-align: left;" /></a>
        <div style="text-align: right; padding-top: 40px;"><a href="index.php"><i class="fas fa-home"></i></a>&nbsp;&nbsp;&nbsp;
<a href="logout.php"><i class="fas fa-sign-out-alt"></i></a></div>
        </div>
    </div><br>
    </div>
    <div class="container-fluid" style="float: left;">
        <div class="row">
        <div class="col-md-2">
            <div id="sidebar">
                <div class="menu">

                    <a href="show_student.php"><div class="menu menu-item" id="student_tc">Student Record</div></a>
                    <a href="show_company.php"><div class="menu menu-item" id="company_tc">Company Record</div></a>
                </div>
            </div>
        </div>

    <div class="col-md-9">
            <form action="" method="get" accept-charset="utf-8">
                <div class="table_container">
                    <div class="sub-table-container">
                        <table class="tc">
                            <thead>
                                <tr>
                                    <th class="tpl-bar-breadcrumbs" colspan="2">SELECT COMPANY</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td class="item">Company Name</td>
                                    <td class="item"><select name="company_id" onchange="x(this)">
                                            <option value=""> select </option>
                                            <?php
                                                    require "connection.php";
                                                    $str1='select * from company_details';
                                                    $result1=mysqli_query($con, $str1);
                                                    while ($row1=mysqli_fetch_array($result1)) {
                                                        echo "<option value=".$row1[0].">".$row1[1]."</option>";
                                                    }
                                                    echo "</select></td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </form>
            ";?>
                                            <?php
                            if(isset($_GET['company_id'])) {
                                require "connection.php";
                                $company_id=$_GET['company_id'];
                                echo "<div class='table_container'>
                                <div class='sub-table-container' >

                                    <table class='tc' >
                                        <thead>
                                            <tr>
                                                <th class='tpl-bar-breadcrumbs' colspan='7'>List of student selected for : $company_id
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class='item'>Student ID</td>
                                                <td class='item'>First Name</td>
                                                <td class='item'>Middle Name</td>
                                                <td class='item'>Last Name</td>
                                                <td class='item'>Email</td>
                                                <td class='item'>Phone</td>
                                                <td class='item'>Campus</td>
                                            </tr>";

                                            require "connection.php";

                                            $str = "(SELECT * FROM `student_details` WHERE companyid='$company_id');";
                                            $result=mysqli_query($con, $str);
                                            $x=1;
                                            while($row=mysqli_fetch_array($result)) {
                                              
                                                    $x=0;
                                                    echo "<tr>
                                                    <td class='item alter'>$row[0]</td>
                                                    <td class='item alter'>$row[1]</td>
                                                    <td class='item alter'>$row[2]</td>
                                                    <td class='item alter'>$row[3]</td>
                                                    <td class='item alter'>$row[4]</td>
                                                    <td class='item alter'>$row[5]</td>
                                                    <td class='item alter'>$row[6]</td>
                                                </tr>";

                                           
                                        }
                                        echo "
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                     </div>
            </div>
            </body>
            </html>";
                }
           
            ?>