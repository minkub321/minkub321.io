<?php
session_start();
if (!isset($_SESSION['username'])) {
   $_SESSION['msg'] = "You must log in first";
   header('location: login.php');
   exit();
}

if (isset($_GET['logout'])) {
   session_destroy();
   unset($_SESSION['username']);
   header('location: login.php');
   exit();
}


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
      <div class="containerwhat">
         <div class="contentMain AnimationText">
            <h1 class="AnimationText">The Online <br> Manual of Printer</h1>
            <p class="AnimationText">เว็บไซต์นี้นำเสนอข้อมูลครบถ้วนเกี่ยวกับเครื่องพิมพ์และเทคโนโลยีการพิมพ์
               พร้อมคำแนะนำในการเลือกซื้อและใช้งานอย่างมีประสิทธิภาพ ไม่ว่าจะเป็นการเปรียบเทียบประเภทเครื่องพิมพ์
               วิธีการใช้งาน
               หรือเคล็ดลับการดูแลรักษา ขอบคุณที่เยี่ยมชม
               เราหวังว่าคุณจะได้รับข้อมูลที่ตรงกับความต้องการและเป็นประโยชน์ในการตัดสินใจ</p>
         </div>

         <img src="assets/Img/Samsung_Xpress_M2835DW.png" class="indeximg zoominimg" alt="">
      </div>
      <br><br><br><br>
      <div class="features-container">
         <div class="feature-box" onclick="myFunction1()">
            <script>
               function myFunction1() {
                  location.replace("Maintenance.php")
               }
            </script>
            <i class="ri-printer-line AnimationText"></i>
            <h2 class="AnimationText">Maintenance</h2>
            <p class="AnimationText">เพื่อเลือกซื้อเครื่องพิมพ์ที่เหมาะสม ควรกำหนดความต้องการ เปรียบเทียบราคา
               และซื้อจากแหล่งที่เชื่อถือได้
               พร้อมตรวจสอบเงื่อนไขการรับประกันและบริการหลังการขาย
               เราจะแนะนำวิธีดูแลเครื่องพิมพ์เพื่อให้ใช้งานได้เต็มประสิทธิภาพและยาวนาน
            </p>
            <div class="feature-footer">
               <i class="ri-printer-cloud-line AnimationText"></i>
               <span class="AnimationText">Recommend</span>
            </div>
         </div>
         <div class="feature-box" onclick="myFunction2()">
            <script>
               function myFunction2() {
                  location.replace("HowToBuy.php")
               }
            </script>
            <i class="ri-shopping-cart-2-line AnimationText"></i>
            <h2 class="AnimationText">HowToBuy</h2>
            <p class="AnimationText">ก่อนที่จะเลือกซื้อเครื่องพิมพ์ที่เหมาะสม
               คุณควรกำหนดความต้องการและเลือกประเภทที่เหมาะสม เปรียบเทียบราคา อ่านรีวิว
               และเลือกซื้อจากแหล่งที่เชื่อถือได้ พร้อมตรวจสอบเงื่อนไขการรับประกันและบริการหลังการขาย
               เพื่อความคุ้มค่าและปลอดภัย</p>
            <div class="feature-footer">
               <i class="ri-shopping-basket-line AnimationText"></i>
               <span class="AnimationText">Recommend</span>
            </div>
         </div>
         <div class="feature-box" onclick="myFunction3()">
            <script>
               function myFunction3() {
                  location.replace("Drivers.php")
               }
            </script>
            <i class="ri-drive-line AnimationText"></i>
            <h2 class="AnimationText">Drivers</h2>
            <p class="AnimationText">เพื่อลงไดเวอร์เครื่องพิมพ์ คุณควรตรวจสอบรุ่นเครื่องพิมพ์และระบบปฏิบัติการ
               จากนั้นดาวน์โหลดไดเวอร์ที่เหมาะสมจากเว็บไซต์ของผู้ผลิต และ เว็บไซต์ของเราได้ที่เราแนะนำ
               ติดตั้งไดเวอร์ตามคำแนะนำและทดสอบการทำงานของเครื่องพิมพ์หลังการติดตั้งว่าใช้งานได้.</p>
            <div class="feature-footer">
               <i class="ri-drive-line AnimationText"></i>
               <span class="AnimationText">Recommend</span>
            </div>
         </div>
      </div>
      <br><br><br><br>
      <h1 class="Text-logo">เเหล่งจำหน่ายเครื่องพิมพ์ที่หน้าเชื่อถือ</h1>

      <div class="photo-warp">
         <div class="photogalaly">

            <div>
               <span><a href="https://www.bnn.in.th/th/p/computer-hardware-diy/printer-and-supplies"
                     target="_blank"><img src="assets/Img/Banana.png" alt="" draggable="false"></a></span>
               <span><a href="https://www.advice.co.th/product/printer-scanner-fax" target="_blank"><img
                        src="assets/Img/Advive.png" alt="" draggable="false"></a></span>
               <span><a href="https://www.hp.com/th-th/shop/printers.html" target="_blank"><img
                        src="assets/Img/HPLOGO.png" alt="" draggable="false"></a></span>
            </div>
            <div>
               <span> <a href="https://www.powerbuy.co.th/th/category/computers-and-offices/printers"
                     target="_blank"><img src="assets/Img/Powerbuy.png" alt="" draggable="false"></a>
               </span>
               <span><a href="https://www.brother.co.th/th-th/printers" target="_blank"><img
                        src="assets/Img/Brotherlogo.png" alt="" draggable="false"></a></span>
               <span><a href="https://www.jib.co.th/web/product/product_list/1/59/0?price=&brand=" target="_blank"><img
                        src="assets/Img/jiblogo.png" alt="" draggable="false"></a></span>
            </div>
         </div>
      </div>


   </main>

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
               <li><a href="HowToBuy.php">วิธีดูเเลรักษา</a></li>
               <li><a href="Printer.php">เครื่องพิมพ์</a></li>
               <li><a href="ProjectMember.php">สมาชิกในกลุ่ม</a></li>            
               <li><a href="Feedback.php" target="_blank">ข้อเสนอเเนะ</a></li>
                <li><a href="Repair_user/index.php"target="_blank" >ระบบส่งซ่อม</a></li>  
               <li><a href="Repair/index.php">Service Control Panel</a></li>
               
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

   <script src="assets/JavaScript/imgindex.js"></script>
   <script src="assets/JavaScript/script.js"></script>
   <script src="assets/JavaScript/main.js"></script>




   <!-- notification message -->
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






</body>

</html>