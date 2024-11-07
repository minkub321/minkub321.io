<?php

session_start();

if (!isset($_SESSION['username'])) {
   $_SESSION['msg'] = "You must log in first";
   header('location: login.php');
}
if (isset($_GET['logout'])) {
   session_destroy();
   unset($_SESSION['username']);
   header('location: login.php');
}




?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" type="image/x-icon" href="assets/Img/whatcom.png">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="">
   <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
   <link rel="stylesheet" href="assets/css/navber.css">
   <link rel="stylesheet" href="assets/css/ProjectMember.css">
   <link rel="stylesheet" href="assets/css/Footer.css">
   <title>ProjectMember - WhatCom</title>
</head>

<body>
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
            <div class="nav__menu" id="nav-menu">
               <ul class="nav__list">
                  <li class="nav__item">
                     <a href="index.php" class="nav__linkwhat">
                        <i class="ri-home-2-line"></i>
                        <span>Home</span>
                     </a>
                  </li>


                  <li class="nav__item">
                     <a href="Drivers.php" class="nav__linkwhat text-decoration-none">
                        <i class="ri-drive-line"></i>
                        <span>Drivers</span>
                     </a>
                  </li>
                  <li class="nav__item">
                     <a href="HowToBuy.php" class="nav__linkwhat text-decoration-none">
                        <i class="ri-shopping-cart-line"></i>
                        <span>How To Buy</span>
                     </a>
                  </li>


                  <li class="nav__item">
                     <a href="Maintenance.php" Other class="nav__linkwhat text-decoration-none">
                        <i class="ri-hammer-line"></i>
                        <span>Maintenance</span>
                     </a>
                  </li>
                  <li class="nav__item">
                     <a href="Printer.php" class="nav__linkwhat">
                        <i class="ri-printer-line"></i>
                        <span>Printer</span>
                     </a>
                  </li>


                  <li class="nav__item">
                     <a href="Feedback.php" target="_blank" class="nav__linkwhat text-decoration-none">
                        <i class="ri-feedback-line"></i>
                        <span>Feedback</span>
                     </a>
                  </li>

               </ul>

               <!-- ปิดใช้งานปุ่ม -->
               <div class="nav__close text-decoration-none" id="nav-close">
                  <i class="ri-close-large-line"></i>
               </div>

               <div class="nav__social">
                  <a href="https://www.facebook.com/profile.php?id=61554221647619" target="_blank"
                     class="nav__social-link text-decoration-none">
                     <i class="ri-facebook-circle-fill"></i>
                  </a>
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


   <main>
      <div class="container">

         <div class="card-container">
            <div class="card">
               <img src="assets/Img/Komsiri.png " alt="Member 1">
               <h2>Mr. Komsiri Kaoman</h2>
               <p class="role">Developer</p>
               <p>มีหน้าที่เป็นนักพัฒนาเว็บไซต์
                  โดยมีความเชี่ยวชาญในเทคโนโลยีด้านหน้า (front-end)</p>
            </div>
            <div class="card">
               <img src="assets/Img/Supawit (2).png" alt="Member 2">
               <h2>Mr. Suphawit Sriwantha
               </h2>
               <p class="role">Designer</p>
               <p>มีหน้าที่ออกแบบ UI/UX โดยสร้างส่วนติดต่อที่สวยงามและใช้งานง่าย
                  โดยให้ความสำคัญกับความสวยงามและการใช้งาน</p>
            </div>
            <div class="card">
               <img src="assets/Img/Pattapong.png" alt="Member 3">
               <h2>Mr. Pattarapon angsuwan
               </h2>
               <p class="role">Project Manager</p>
               <p>มีหน้าที่ทำให้แน่ใจว่าโครงงานเดินหน้าไปตามแผน
                  โดยประสานงานระหว่างทีมและทำให้โครงานบรรลุเป้าหมายได้อย่างมีประสิทธิภาพ
               </p>
            </div>
            <div class="card">
               <img src="assets/Img/Acrwit.png" alt="Member 4">
               <h2>Mr. Achawit Phatwichit
               </h2>
               <p class="role">Tester</p>
               <p>มีหน้าที่ในการเทสระบบเเละทดลองการใช้งานของเว็บไซต์
                  โดยคำนึงถึงการใช้งานงานของผู้ใช้งานโดยรวม
               </p>
            </div>
         </div>
      </div>
   </main>

   <br><br><br>
   <hr style="border: 1px solid rgba(184, 184, 184, 0.1);">
   <footer>
      <div class="footer-container">
         <div class="footer-logo">
            <div class="footer-text">
               <h3>The Online Manual of Printer</h3>
               <p>WhatCom</p>
               <p>เครื่องพิมพ์คืออุปกรณ์ที่ช่วยเปลี่ยนข้อมูลดิจิทัลเป็นเอกสารที่จับต้องได้
                  ด้วยการพิมพ์ข้อความและภาพลงบนกระดาษ เครื่องพิมพ์มีหลายประเภท เช่น เลเซอร์และอิงค์เจ็ท
                  โดยแต่ละประเภทมีคุณสมบัติและการใช้งานที่เหมาะสมกับความต้องการที่แตกต่างกัน
                  ไม่ว่าจะเป็นการพิมพ์เอกสารทั่วไปหรือการพิมพ์ภาพถ่ายที่มีคุณภาพสูง</p>
            </div>
         </div>
         <div class="footer-links">
            <h4>หมวดหมู่</h4>
            <ul>

               <li><a href="Drivers.php">วิธีลงไดรเวอร์</a></li>
               <li><a href="Drivers.php#section2">วิธีลงไดรเวอร์ PSC</a></li>
               <li><a href="HowToBuy.php">วิธีเลือกซื้อ</a></li>
               <li><a href="Maintenance.php">วิธีดูเเลรักษา</a></li>
               <li><a href="Printer.php">เครื่องพิมพ์</a></li>
               <li><a href="ProjectMember.php">สมาชิกในกลุ่ม</a></li>
               <li><a href="Feedback.php" target="_blank">ข้อเสนอเเนะ</a></li>

            </ul>
         </div>
         <div class="footer-links">
            <h4>ช่องทางต่างๆ</h4>
            <ul>
               <li><a href="https://www.facebook.com/profile.php?id=61554221647619" target="_blank">Facebook</a>
               </li>

            </ul>
         </div>
      </div>
      <div class="footer-bottom">
         <p>Copyright © 2024 Information Technology , Pongsawadi Technological College.</p>
      </div>
   </footer>

   <!--=============== SWIPER JS ===============-->
   <script src="assets/JavaScript/swiper-bundle.min.js"></script>

   <!--=============== MAIN JS ===============-->
   <script src="assets/JavaScript/Project.js"></script>


   <?php if (isset($_SESSION['success'])): ?>
      <div class="success">
         <h3>
            <?php
            echo $_SESSION['success'];
            unset($_SESSION['success']);
            ?>
         </h3>
      </div>
   <?php endif ?>


   <!-- logged in user information -->
   <?php if (isset($_SESSION['username'])): ?>
      
      <p><a href="index.php?logout='1'"></a></p>
   <?php endif ?>

</body>

</html>