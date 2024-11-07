<?php
session_start(); // เพิ่ม session_start() ที่ด้านบนสุด
include('server.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>WhatCom</title>
   <link rel="stylesheet" href="assets/css/navber.css">
   <link rel="stylesheet" href="assets/css/index.css">
  
   <link rel="stylesheet" href="assets/css/Footer.css">
   <link rel="stylesheet" href="assets/css/register,login.css">
   <link rel="icon" type="image/x-icon" href="assets/Img/whatcom.png">
   <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body style="background-color: black;">
   <video width="100%" height="140%" autoplay loop muted plays-inline class="back-video">
      <source src="assets/Video/WhatCom.mp4" type="video/mp4">
   </video>
   <header>
      <div class="header" id="header">
         <nav class="navwhat containerwhat">
            <div class="containerlogo" onclick="myFunction()">
               <div class="logoimg">
                  <img src="assets/Img/whatcom.png" alt="">
               </div>
               <div class="contentText">
                  <h1>The Online</h1>
                  <p>Manual of Printer</p>
               </div>
               <script>
                  function myFunction() {
                     window.location.href = "index.php";
                  }
               </script>

            </div>

            <?php if (isset($_SESSION['username'])): ?>

               <button class="Btn">

                  <div class="sign"><svg viewBox="0 0 512 512">
                        <path
                           d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z">
                        </path>
                     </svg></div>

                  <div class="text"> <a href="index.php?logout='1'"" style=" color: white;">Logout</a></div>
               </button>


            <?php endif ?>
      </div>


      <!-- ระบบปุ่มสวิต -->
      <div class=" nav__toggle" id="nav-toggle">
         <i class="ri-menu-line"></i>
      </div>

   </header>

   <body>




      <form class="form" action="assets/database/login_db.php" method="post">
         <?php include('errors.php'); ?>

         <?php if (isset($_SESSION['error'])): ?>
            <div style="color:red;">
               <h3>
                  <?php
                  echo $_SESSION['error'];
                  unset($_SESSION['error']); // เคลียร์ข้อความหลังจากแสดงผล
                  ?>
               </h3>
            </div>
         <?php endif ?>


         <p class="title">Log in </p>
         <p class="message">Log in now and get full access to our app. </p>


         <label>
            <input required="user_name" for="user_name" type="text" class="input" name="user_name">
            <span>Username</span>
         </label>



         <label>
            <input required="" type="password" class="input" name="password">
            <span>Password</span>
         </label>

         <button class="submit" name="login_user">Submit</button>
         <p class="signin"> No account? <a href="register.php">Sign Up</a> </p>
      </form>

      



   </body>

</html>