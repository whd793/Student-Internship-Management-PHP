<?php
include("err.php");
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
                        <div class="menu menu-item" id="student_tc" style="background-color: darkgoldenrod; cursor: context-menu;"> Student Record </div>
                    </a>
                    <a href="show_company.php">
                        <div class="menu menu-item" id="company_tc"> Company Record </div>
                    </a>

                </div>
            
        </div>
</div>
            
<!-- Table -->
            <div class="col-md-9">
                <div class="table_container">
                    <div class="sub-table-container">


                        <table class="tc">
                           <thead>
                            <tr>
                                <th class="tpl-bar-breadcrumbs" colspan="10">Student Record
                                <a href="company_student_selected.php"><i class="fas fa-filter"></i></a>
                                <a href="student_add.php" title="Add a Student to record"><i class="fas fa-plus"></i></a>
                                </th>
                            </tr>
                        </thead>
                            <tbody>
                                <tr>
                                <td class="item">Student ID</td>
                                <td class="item">First Name</td>
                                <td class="item">Middle Name</td>
                                <td class="item">Last Name</td>
                                <td class="item">Email</td>
                                <td class="item">Phone</td>
                                <td class="item">Campus</td>
                                <td class="item">View Work</td>
                                <td class="item">Edit</td>
                                <td class="item" >Delete</td>
                            </tr>
                                <?php 

                        require "connection.php";
                        $str="select * from student_details;";
                        $result=mysqli_query($con, $str);
                        $x=1;
                        while($row=mysqli_fetch_array($result)) {
                           
                                
                                echo "<tr>
                                <td class='item alter'>$row[0]</td>
                                <td class='item alter'>$row[1]</td>
                                <td class='item alter'>$row[2]</td>
                                <td class='item alter'>$row[3]</td>
                                <td class='item alter'>$row[4]</td>
                                <td class='item alter'>$row[5]</td>
                                <td class='item alter'>$row[6]</td>
							  <td class='item alter'><a href='show_student_work.php?$row[0]'><i class='fas fa-pencil-alt'></i></a></td>
                              
                              <td class='item alter'><a href='student_edit.php?student_id=$row[0]'><i class='fas fa-pencil-alt'></i></a></td>
                              
                                <td class='item alter'><a href='delete_record.php?file=show_student.php&table=student_details&pkey_name=student_id&key=$row[0]' title='Delete this student from record'>???</a></td>
                            </tr>";

                        
                      
                }
                        ?>
<!--<a href='student_edit.php?student_id=$row[0]'><button class='edit-button' >Edit</button></a>-->
                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
        </div>
</body>

</html>