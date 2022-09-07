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
                $str="select * from company_details where id='$id'";
                $result=mysqli_query($con, $str);
                $row=mysqli_fetch_array($result);
                echo "
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
                                    <td class='item alter'>ID</td>

                                    <td class='item alter'><input name='id'  type='text' value='$row[0]'></td>
                                </tr>

                                <tr>
                                    <td class='item'>Company Name</td>

                                    <td class='item'><input name='co_name' type='text' value='$row[1]'></td>
                                </tr>

                                <tr>
                                    <td class='item alter'>Adress</td>

                                    <td class='item alter'><input name='address' type='text' value='$row[2]'></td>
                                </tr>

                                <tr>
                                    <td class='item'>City</td>

                                    <td class='item'><input name='city' type='text' value='$row[3]'></td>
                                </tr>

                                <tr>
                                    <td class='item alter'>Postal Code</td>

                                    <td class='item alter'><input name='postal_code' type='text' value='$row[4]'></td>
                                </tr>
                                <tr>
                                    <td class='item'>Country</td>

                                    <td class='item'><input name='country' type='text' value='$row[5]'></td>
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
                                    <th class='tpl-bar-breadcrumbs' colspan='3'>PERSON TO CONTACT INFORMATION</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td class='item'>First Name</td>

                                    <td class='item'><input name='c_first_name' type='text' value='$row[6]'></td>
                                </tr>

                                <tr>
                                    <td class='item alter'>Last Name</td>

                                    <td class='item alter'><input name='c_last_name' type='text' value='$row[7]'></td>
                                </tr>

                                <tr>
                                    <td class='item'>Position</td>

                                    <td class='item'><input name='c_position'  type='text' value='$row[8]'></td>
                                </tr>

                                <tr>
                                    <td class='item alter'>Telephone</td>

                                    <td class='item alter'><input name='telephone' type='text' value='$row[9]'></td>
                                </tr>

                                <tr>
                                    <td class='item'>Email</td>

                                    <td class='item'><input name='email' type='text' value='$row[10]'></td>
                                </tr>

                                <tr>
                                    <td class='item alter'>Fax</td>

                                    <td class='item alter'><input name='fax' type='text' value='$row[11]'></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                
                ";?>


                    <br><br>
                        <input type="submit" name="submit" value="Submit" id="submit" class="edit-button">
                    <br><br>
            </form>
        </div>
    </div>
</body>

</html>

<?php
if(isset($_GET['submit'])) {
    require "connection.php";

    $str="update company_details set  co_name='".$_GET['co_name']."', address='".$_GET['address']."', city='".$_GET['city']."',  postal_code='".$_GET['postal_code']."', country='".$_GET['country']."', c_first_name='".$_GET['c_first_name']."', c_last_name='".$_GET['c_last_name']."', c_position='".$_GET['c_position']."', telephone='".$_GET['telephone']."', email='".$_GET['email']."', fax='".$_GET['fax']."' where id='".$_GET['id']."';";
    // echo $str;
    mysqli_query($con, $str);
    header('location:show_company.php');
}
?>
