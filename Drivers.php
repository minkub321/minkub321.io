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
   <title>Other - WhatCom</title>
   <link rel="icon" type="image/x-icon" href="Img/whatcom.png" height="1000">
   <link rel="stylesheet" href="assets/css/navber.css">
   <link rel="stylesheet" href="assets/css/Footer.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
   <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet">
   <link rel="stylesheet" href="assets/css/driver.css">
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


   <!--ข้อมูลหลัก-->
   <main>
      <div class="container">
         <h2 class="section-title" id="section1">ไดรเวอร์คืออะไร?</h2>
         <p>ไดรเวอร์เป็นซอฟต์แวร์ที่ช่วยให้คอมพิวเตอร์สามารถสื่อสารกับอุปกรณ์เช่นเครื่องพิมพ์ได้อย่างถูกต้อง
            โดยไดรเวอร์จะทำหน้าที่แปลคำสั่งจากโปรแกรมที่ใช้งานให้เป็นภาษาที่เครื่องพิมพ์เข้าใจได้ เช่น
            การจัดการขนาดกระดาษ ความละเอียดการพิมพ์ และการตั้งค่าต่างๆ</p>
         <br>
         <h2 class="section-title">ไดรเวอร์สำคํญยังไง?</h2>
         <p>ไดรเวอร์เครื่องพิมพ์มีความสำคัญในการทำให้คอมพิวเตอร์และเครื่องพิมพ์สามารถสื่อสารกันได้อย่างราบรื่น
            โดยทำหน้าที่แปลงข้อมูลจากคอมพิวเตอร์ให้อยู่ในรูปแบบที่เครื่องพิมพ์สามารถประมวลผลและพิมพ์ออกมาได้
            นอกจากนี้ยังช่วยให้การปรับแต่งการพิมพ์เป็นไปตามความต้องการของผู้ใช้ เช่น การเลือกขนาดกระดาษ ฟอนต์
            และคุณภาพการพิมพ์ หากไม่มีไดรเวอร์ที่ถูกต้อง เครื่องพิมพ์อาจทำงานไม่ถูกต้องหรือไม่สามารถทำงานได้เลย</p>
         <br>
         <div class="brand-logos">
            <img src="assets/Img/cannonlogo.jpg" alt="Canon">
            <img src="assets/Img/epsonlogo.jpg" alt="Epson">
            <img src="assets/Img/Brotherlogo.png.jpg" alt="Brother">
            <img src="assets/Img/hplog.png" alt="HP">
         </div>

         <h2 class="section-title">ทำไมต้องลงไดรเวอร์?</h2>
         <p>การติดตั้งไดรเวอร์เป็นสิ่งจำเป็นเพื่อให้คอมพิวเตอร์และอุปกรณ์ต่าง ๆ เช่น เครื่องพิมพ์
            สามารถทำงานร่วมกันได้อย่างมีประสิทธิภาพ หากไม่มีไดรเวอร์ที่ถูกต้อง
            อุปกรณ์อาจทำงานไม่เต็มประสิทธิภาพหรือไม่สามารถทำงานได้เลย</p>
         <br>
         <div class="step">
            <h3>1. ดาวน์โหลดไดรเวอร์</h3>
            <p>สามารถดาวน์โหลดไดรเวอร์ได้จากเว็บไซต์ของผู้ผลิต
               โดยเลือกดาวน์โหลดไดรเวอร์ตามรุ่นของเครื่องพิมพ์ที่คุณใช้งาน</p>
            <div class="download-links">
               <a href="https://th.canon/th/support" target="_blank">Canon</a>
               <a href="https://www.epson.co.th/driver" target="_blank">Epson</a>
               <a href="https://support.brother.com" target="_blank">Brother</a>
               <a href="https://support.hp.com/in-en/drivers/printers" target="_blank">HP</a>
            </div>
         </div>

         <div class="step">
            <h3>2. เปิดไฟล์ติดตั้ง</h3>
            <p>หลังจากดาวน์โหลดเสร็จแล้ว ให้เปิดไฟล์ติดตั้งที่โหลดมา ซึ่งมักจะมีนามสกุล .exe สำหรับ Windows และ .dmg
               สำหรับ macOS จากนั้นทำตามขั้นตอนการติดตั้งบนหน้าจอจนกว่าจะเสร็จสมบูรณ์</p>
         </div>

         <div class="step">
            <h3>3. ติดตั้งไดรเวอร์</h3>
            <p>หลังจากเปิดไฟล์ติดตั้ง ให้ทำตามคำแนะนำทีละขั้นตอน เช่น การยอมรับข้อตกลงการใช้งาน
               การเลือกตำแหน่งที่ติดตั้ง และการเลือกตัวเลือกการพิมพ์ที่ต้องการ</p>
            <ul>
               <li>ยอมรับข้อตกลงการใช้งาน</li>
               <li>เลือกประเภทการเชื่อมต่อ เช่น USB หรือ Wi-Fi</li>
               <li>เลือกตัวเลือกการพิมพ์ เช่น ขาวดำหรือสี</li>
            </ul>
         </div>

         <div class="step">
            <h3>4. รีสตาร์ทคอมพิวเตอร์</h3>
            <p>หลังจากติดตั้งเสร็จแล้ว
               ควรรีสตาร์ทคอมพิวเตอร์เพื่อให้การติดตั้งมีผลเต็มรูปแบบและสามารถใช้งานเครื่องพิมพ์ได้อย่างราบรื่น</p>
         </div>

         <h2 class="section-title">รายละเอียดเพิ่มเติมเกี่ยวกับแต่ละยี่ห้อ</h2>
         <div class="faq">
            <h3>Canon</h3>
            <p>รองรับการพิมพ์คุณภาพสูง เหมาะสำหรับการพิมพ์ภาพถ่ายและเอกสารที่ต้องการรายละเอียดสูง
               สามารถดาวน์โหลดไดรเวอร์จาก <a href="https://th.canon/th/support" target="_blank"
                  style="color: rgb(255, 217, 0);">ที่นี่</a></p>
         </div>

         <div class="faq">
            <h3>Epson</h3>
            <p>มีระบบหมึกต่อเนื่อง (Ink Tank) ที่ช่วยลดต้นทุนในการพิมพ์ เหมาะสำหรับผู้ที่ต้องการพิมพ์จำนวนมาก
               สามารถดาวน์โหลดไดรเวอร์จาก <a href="https://www.epson.co.th/driver" target="_blank"
                  style="color: rgb(255, 217, 0);">ที่นี่</a></p>
         </div>

         <div class="faq">
            <h3>Brother</h3>
            <p>รองรับการพิมพ์ทั้งขาวดำและสี มีการออกแบบที่ทนทานและง่ายต่อการบำรุงรักษา สามารถดาวน์โหลดไดรเวอร์จาก <a
                  href="https://support.brother.com" target="_blank" style="color: rgb(255, 217, 0);">ที่นี่</a></p>
         </div>

         <div class="faq">
            <h3>HP</h3>
            <p>มีความหลากหลายในรุ่นเครื่องพิมพ์ รองรับการพิมพ์ผ่านระบบไร้สาย และเชื่อมต่อกับอุปกรณ์พกพาได้ง่าย
               สามารถดาวน์โหลดไดรเวอร์จาก <a href="https://support.hp.com/in-en/drivers/printers" target="_blank"
                  style="color: rgb(255, 217, 0);">ที่นี่</a></p>

         </div> <br><br>
         <h1>พิเศษ
         </h1>
         <br><br>

         <div class="step " id="section2">
            <h3>วิธีการลงไดรเวอร์ของ วิทยาลัยเทคโนโลยีพงษ์สวัสดิ์ (PSC) ผ่านระบบปฏิบัติการ
            </h3>
            <br>
            <div class="brand-logos">
               <img src="assets/Img/win.jpg" alt="WINDOw">
               <img src="assets/Img/macos.jpg" alt="macOS">
               <img src="assets/Img/an.jpg" alt="android">
               <img src="assets/Img/ios.jpg" alt="ios">
            </div>


         </div>

      </div>

      <button id="back-to-top-btn"><i class="ri-arrow-up-line"></i></button>
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
   <script>
      // ดักการคลิกปุ่ม
      document.getElementById('scrollButton').addEventListener('click', function () {
         // ใช้ scrollIntoView() เพื่อเลื่อนไปยัง section ที่ต้องการ
         document.getElementById('section2').scrollIntoView({ behavior: 'smooth' });
      });
   </script>
   <script src="assets/JavaScript/backtotop.js"></script>
   <script src="JavaScript/main.js"></script>

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