<?php
require('connection.inc.php');
require('functions.inc.php');
if (isset($_SESSION['ADMIN_LOGIN']) && $_SESSION['ADMIN_LOGIN'] != '') {
} else {
   header('location:login.php');
   die();
}
?>
<!doctype html>
<html class="no-js" lang="">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>ADMIN DASHBOARD PAGE</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="assets/css/normalize.css">
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="assets/css/font-awesome.min.css">
   <link rel="stylesheet" href="assets/css/themify-icons.css">
   <link rel="stylesheet" href="assets/css/pe-icon-7-filled.css">
   <link rel="stylesheet" href="assets/css/flag-icon.min.css">
   <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
   <link rel="stylesheet" href="assets/css/style.css">
   <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <script src="assets/js/jquery.min.js"></script>
   <script src="assets/js/bootstrap.min.js"></script>

</head>

<body>
   <aside id="left-panel" class="left-panel">
      <nav class="navbar navbar-expand-sm navbar-default">
         <div id="main-menu" class="main-menu collapse navbar-collapse">
            
            <ul class="nav navbar-nav">
               <p style="margin-left:0.3cm; margin-top:0.5em">Main Menu</p>
               <li class="menu-item-has-children dropdown">
                  <a href="index.php"><span class="fa fa-home" > DASHBOARD </span></a>
               </li>
                <li class="menu-item-has-children dropdown">
                  <a href="posts_management.php"> <span class="fa fa-home"> BLOG POST</span></a>
               </li>
               <li class="menu-item-has-children dropdown">
                  <a href="announcement_management.php"><span class="fa fa-home"> ANNOUNCEMENT </span></a>
               </li>
               
               <li class="menu-item-has-children dropdown">
                  <a href="statistic_management.php"><span class="fa fa-home">SCHOOL STATISTIC </span></a>
               </li>
               <li class="menu-item-has-children dropdown">
                  <a href="staff_management.php"><span class="fa fa-home">MANAGE STAFF </span></a>
               </li>
               <li class="menu-item-has-children dropdown">
                  <a href="feedback_management.php"><span class="fa fa-home"> FEEDBACKS </span></a>
               </li>

            </ul>
         </div>
      </nav>
   </aside>
   <div id="right-panel" class="right-panel">
      <header id="header" class="header">
         <div class="top-left">
            <div class="navbar-header">

               <a class="navbar-brand" href="index.php"><img src="images/log.png" style="width:1.7cm; height: 1cm"><b style="font-size:15px; color:black">GS ROSA MYSTICA</b></a>

             
            </div>
         </div>
         <div class="top-right">
            <div class="header-menu">
               <div class="user-area dropdown float-right">
                  <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CLICK FOR SETTING</a>
                  <div class="user-menu dropdown-menu">
                     <a class="nav-link" href="settings.php?id=<?php echo $_SESSION['ADMIN_ID'] ?>"><i class="fa fa-power-off"></i>SETTINGS</a>
                     <a class="nav-link" href="logout.php"><i class="fa fa-power-off"></i>LOGOUT</a>
                  </div>
               </div>
            </div>
         </div>
      </header>