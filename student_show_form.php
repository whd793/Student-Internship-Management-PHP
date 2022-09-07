<?php
include("err.php");
ob_start();
session_start();
if($_SESSION['a'] !='admin') {
    header("location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title></title>

    <!-- Add in the package needed -->
    <link rel="tylesheet" href="style_admin.css">
    <link href="t.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300" rel="stylesheet">
    <link href="css/bootstrap-4.0.0.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <!-- Styles -->
    <style>
        body {
            font-family: Gotham, "Helvetica Neue", Helvetica, Arial, "sans-serif";
            background: url(images/campusbkg-testing.png) no-repeat fixed center center/cover;
        }

        table, .item{
            cursor: context-menu;
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
        .col-md-2{
            padding-right: 0px;
        }
        a:hover{
            text-decoration: none;
        }
        .menu:hover, .menu-item:hover, #student_tc:hover{
            text-decoration: none;
        }
    </style>
    

    <style type="text/css">
        a:link, a:visited, a:active {
            text-decoration: none;
        }
        .fas{
            color: white;
            font-size: 35px;
        }
        i:hover{
            color: goldenrod;
        }
        .fa-pencil-alt{
            font-size: 15px;
            color: #555;
        }
        .fa-plus, .fa-filter{
            margin: 0px 15px 0px 0px;
            cursor: pointer;
            float: right;
            font-size: 20px;
            line-height: 44px;
        }

        .fa-plus:hover, .fa-filter:hover{
            color: darkgoldenrod;
        }

    </style>

    
</head>

<body>
    <div class="container-fluid1 top">
    <div class="row1" style="padding-bottom: 60px;">
        <div class="col-md-12">
            <a href="https://www.purdue.edu/"><img src="images/purduelogo2.png" alt="Purdue Logo" width="461" height="108" class="img-fluid" style="float: left; max-width: 100%; height: auto; text-align: left;" /></a>
        <div style="text-align: right; padding-top: 40px;"><a href="index.php"><i class="fas fa-home"></i></a>&nbsp;&nbsp;&nbsp;
<a href="logout.php"><i class="fas fa-sign-out-alt"></i></a></div>
        </div>
    </div><br>
    </div>

    <!-- Menu -->
    <div class="container-fluid" style="float: left;">
        <div class="row">
        <div class="col-md-2">
            <div id="sidebar">
                <div class="menu">
                    <a href="show_student.php">
                        <div class="menu menu-item" id="student_tc"> Student Record </div>
                    </a>
                    <a href="show_company.php">
                        <div class="menu menu-item" id="company_tc" style="background-color: darkgoldenrod; cursor: context-menu;"> Company Record </div>
                    </a>

                </div>
            
        </div>
</div>
        <div class="col-md-9">
            <form action='' method='GET' accept-charset='utf-8'>

<?php

            $id=$_GET['id'];
            require 'connection.php';
            $str="select * from internship_form where form_number='$id'";
            $result=mysqli_query($con, $str);
            $row=mysqli_fetch_array($result);
            echo "
            <div class='table_container'>
                <div class='sub-table-container'>
                    <table class='tc'>
                        <thead>
                            <tr>
                                <th class='tpl-bar-breadcrumbs' colspan='1'>Job Title</th>
								
								<th class='tpl-bar-breadcrumbs'><a href='company_student_selected.php'><i class='fas fa-filter'></i></a></th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td class='item alter'>Did you work in an office or in site?</td>

                                <td class='item alter'>$row[6]</td>
                            </tr>

                            <tr>
                                <td class='item'>List 5 activities</td>

                                <td class='item'>$row[7]</td>
                            </tr>

                            <tr>
                                <td class='item alter'>Did supervisor give you relevant work to accomplish?</td>

                                <td class='item alter'>$row[8]</td>
                            </tr>

                            <tr>
                                <td class='item'>Difficulties or problem areas encountered during internship.</td>

                                <td class='item'>$row[9]</td>
                            </tr>

                            <tr>
                                <td class='item alter'>Explain how work experience related to your major.</td>

                                <td class='item alter'>$row[10]</td>
                            </tr>
                            <tr>
                                <td class='item'>Is there anything you wanted to learn during internship that you were not able to?</td>

                                <td class='item'>$row[11]</td>
                            </tr>
                            <tr>
                                <td class='item'>Has this work experience changed your mind about which sector of CGT you might be most interested in pursuing?</td>

                                <td class='item'>$row[12]</td>
                            </tr>
                            <tr>
                                <td class='item'>Internship provided me with contacts which may lead to future employment?</td>

                                <td class='item'>$row[13]</td>
                            </tr>
                            <tr>
                                <td class='item'>Considering your overall experience - how would you rate this internship? (1 = Very Dissatisfied, 5 = Very Satisfied)</td>

                                <td class='item'>$row[14]</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>


         
            ";

            echo "<div style='padding-left:75%;'>
        </div>

    </div>
</div>
</body>
</html>";
?>
