<?php
//include( 'bootstrap.php' );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Humber Portfolio</title>
    <meta charset="utf-8">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src="https://use.fontawesome.com/6d807a5fa6.js"></script>
  
    <!--We have already the connection to jQuery-->
    <!--<script src="http://code.jquery.com/jquery-latest.min.js"></script> --> 
    
  
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
  <!-- Custom styles for this template -->
    <link href="design/css/index.css" rel="stylesheet">

    <!--We should "/" to have access to the files from anywhere-->
    <link rel="stylesheet" type="text/css" href="/design/css/contact.css" />
    <link rel="stylesheet" href="/frontend/css/gstyle.css" />
    <link rel="stylesheet" type="text/css" href="/design/css/style_project_profile.css">
    <link rel="stylesheet" type="text/css" href="/design/css/project_profile_header.css">
    <link rel="stylesheet" type="text/css" href="/design/css/student_profile.css">

    <!--link to jquery-->
  
    <!--We have already the connection to jQuery-->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>-->

    <!-- Bootstrap CSS -->
    <!--We have already the connection to Bootstrap-->
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous" /> -->

    <!-- Bootstrap theme -->
    <!--We have already the connection to Bootstrap-->
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous" /> -->

    <!-- Bootstrap JavaScript -->
    <!--We have already the connection to Bootstrap-->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script> -->

    <!--link to Google Font-->
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,700,800,900|Lato:400,300,700,900' rel='stylesheet' type='text/css'>
  
</head>
  
<header>
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <a href="#">
                    <h1>HUMBER <span id="portfolio">PORTFOLIO</span></h1>
                </a>
            </div>
            <div class="search col-xs-3">
                <form action="#" method="get">

                    <div class="input-group search">
                        <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-btn">
                              <button class="btn btn-default fa fa-search" type="button"></button>
                            </span>
                    </div>
                    <!-- /input-group -->
                </form>
            </div>
            <div class="navlist col-sm-10 col-xs-12">
                <nav class="main-nav">
                    <ul>
                        <a href="index.php">
                            <li>HOME</li>
                        </a>
                        <a href="#">
                            <li>STUDENTS</li>
                        </a>
                        <a href="#">
                            <li>ABOUT</li>
                        </a>
                        <a href="contact.php">
                            <li>CONTACT</li>
                        </a>
                    </ul>
                </nav>
            </div>

            <div class="login-status col-sm-2 col-xs-12">
                <div><span><?php echo  $_SESSION['student_firstname'] ;?></span></div>
                <a href="logout.php">Log Out</a>
            </div>

        </div>
    </div>
</header>
<br />