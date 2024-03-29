<?php
include "config.php";
session_start();

if (!isset($_SESSION['user_name'])) {
    header("Location: $hostname/admin/");
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>ADMIN Panel</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="../css/font-awesome.css">
    <!-- Custom stlylesheet -->
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <!-- HEADER -->
    <div id="header-admin">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <!-- LOGO -->
                <div class="col-md-2" style="padding-top:10px; ">
                    <a href="" class="text-uppercase" style="color:aliceblue; font-size:18px; font-weight:bold; padding-left:9px;">News Blog Site</a>
                </div>
                <!-- /LOGO -->
                <!-- LOG-Out -->
                <div class="col-md-offset-6  col-md-4">
                    <a href="logout.php" class="admin-logout"><?php echo "Hello  " . $_SESSION['user_name'] ?>, logout</a>
                    
                </div>
                <!-- /LOG-Out -->
                
            </div>
        </div>
    </div>
    <!-- /HEADER -->
    <!-- Menu Bar -->
    <div id="admin-menubar">
        <div class="container">
            <div class="row">
                
                <div class="col-md-12">
                    <ul class="admin-menu">
                        <li>
                            <a href="post.php">Post</a>
                        </li>

                        <?php
                        if ($_SESSION['user_role'] == 1) {
                        ?>
                            <li>
                                <a href="category.php">Category</a>
                            </li>
                            <li>
                                <a href="users.php">Users</a>
                            </li>
                            
                        <?php
                        }
                        ?>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /Menu Bar -->