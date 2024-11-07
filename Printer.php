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
   <title>Printer - WhatCom</title>
   <link rel="icon" type="image/x-icon" href="assets/Img/whatcom.png">
   <link rel="stylesheet" href="assets/css/navber.css">
   <link rel="stylesheet" href="assets/css/Printer.css">
   <link rel="stylesheet" href="assets/css/Footer.css">
   <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet">
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

      <section class="Printer">
         <h2 class="Printer__title">Recommend Printer <p>เเนะนำเครื่องพิมพ์เเต่ละประเภท</p>
         </h2>



         <div class="card__Printer">
            <article>
               <div class="card__product AnimationText">
                  <img src="assets/Img/inkjectbg.png" alt="image" class="card_img">

                  <div>
                     <h3 class="card__name">เครื่องพิมพ์อิงค์เจ็ท</h3>

                  </div>
               </div>

               <div class="modal">
                  <div class="modal__card">
                     <i class="ri-close-large-line modal__close"></i>

                     <img src="assets/Img/inkjectbg.png" alt="image" class="modal__img">

                     <div>
                        <h3 class="modal__name">เครื่องพิมพ์อิงค์เจ็ท
                           <hr>
                        </h3>
                        <p class="modal__info">
                           หลักการทำงาน: ใช้การพ่นหมึกจากหัวพิมพ์ลงบนกระดาษ หัวพิมพ์จะมีช่องเล็ก ๆ
                           ที่สามารถพ่นหมึกออกมาได้อย่างแม่นยำ
                           หมึกจะถูกแยกเป็นสีพื้นฐาน (เช่น CMYK: Cyan, Magenta, Yellow, Black) เพื่อผสมสีได้หลากหลาย
                        </p>

                     </div>
                     <div class="modal__buttons">


                        <script>
                           let openLinkInNewTab = () => {
                              window.open("https://www.brother.co.th/th-th/printers/all-printers/mfc-l2750dw", "_blank")
                           };
                        </script>
                     </div>
                  </div>
               </div>
            </article>

            <article>
               <div class="card__product AnimationText">
                  <img src="assets/Img/laserbg.png" alt="image" class="card_img">

                  <div>
                     <h3 class="card__name">เครื่องพิมพ์เลเซอร์ </h3>

                  </div>
               </div>

               <div class="modal">
                  <div class="modal__card">
                     <i class="ri-close-large-line modal__close"></i>

                     <img src="assets/Img/laserbg.png" alt="image" class="modal__img">

                     <div>
                        <h3 class="modal__name">เครื่องพิมพ์เลเซอร์
                           <hr>
                        </h3>
                        <p class="modal__info">
                           หลักการทำงาน:
                           ใช้เทคโนโลยีแสงเลเซอร์ในการสร้างภาพที่ต้องการพิมพ์บนกระดาษโดยการชาร์จไฟฟ้าลงบนดรัม (drum)
                           ที่มีสารไวแสง
                           จากนั้นผงหมึก (toner) จะถูกดูดไปติดกับดรัม และถูกถ่ายโอนลงบนกระดาษด้วยการให้ความร้อน

                        </p>

                     </div>
                     <div class="modal__buttons">


                        <script>
                           let openLinkInNewTab1 = () => {
                              window.open("https://www.jib.co.th/web/product/readProduct/22336/PRINTER--%E0%B8%9B%E0%B8%A3%E0%B8%B4%E0%B9%89%E0%B8%99%E0%B9%80%E0%B8%95%E0%B8%AD%E0%B8%A3%E0%B9%8C--SAMSUNG-SL-M2835DW-XSS-MONO-LASER#:~:text=%E0%B8%A3%E0%B8%B2%E0%B8%A2%E0%B8%A5%E0%B8%B0%E0%B9%80%E0%B8%AD%E0%B8%B5%E0%B8%A2%E0%B8%94%E0%B8%AA%E0%B8%B4%E0%B8%99%E0%B8%84%E0%B9%89%E0%B8%B2%E0%B9%82%E0%B8%94%E0%B8%A2%E0%B8%A2%E0%B9%88%E0%B8%AD%20BLACK%20%3A%2020%20PPM%20RESOLUTION%20%3A%204800,%28%231620080542%29%20%E0%B8%A3%E0%B8%B1%E0%B8%9A%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B8%81%E0%B8%B1%E0%B8%99%203%20-%20y%20%E0%B8%A3%E0%B8%B2%E0%B8%84%E0%B8%B2%20%E0%B8%9A%E0%B8%B2%E0%B8%97%205%2C290", "_blank")
                           };
                        </script>
                     </div>
                  </div>
               </div>
            </article>

            <article>
               <div class="card__product AnimationText">
                  <img src="assets/Img/donmatixbg.jpg" alt="image" class="card_img">

                  <div>
                     <h3 class="card__name">เครื่องพิมพ์ดอทเมทริกซ์</h3>

                  </div>
               </div>

               <div class="modal">
                  <div class="modal__card">
                     <i class="ri-close-large-line modal__close"></i>

                     <img src="assets/Img/donmatixbg.jpg" alt="image" class="modal__img">

                     <div>
                        <h3 class="modal__name">เครื่องพิมพ์ดอทเมทริกซ์
                           <hr>
                        </h3>
                        <p class="modal__info">
                           หลักการทำงาน: ใช้เข็มกระทบกับผ้าหมึก (ribbon) เพื่อพิมพ์ลงบนกระดาษ
                           การพิมพ์จะมีการเคลื่อนไหวในแนวตั้งและแนวนอน
                           ซึ่งเครื่องพิมพ์จะสร้างตัวอักษรขึ้นจากจุดเล็ก ๆ หลายจุดต่อกัน
                        </p>

                     </div>
                     <div class="modal__buttons">


                        <script>
                           let openLinkInNewTab2 = () => {
                              window.open("https://www.brother.co.th/th-th/printers/all-printers/hl-l2375dw", "_blank")
                           };
                        </script>

                     </div>
                  </div>
               </div>
            </article>




            <article>
               <div class="card__product AnimationText">
                  <img src="assets/Img/3dbg.png" alt="image" class="card_img">

                  <div>
                     <h3 class="card__name">เครื่องพิมพ์สามมิติ</h3>

                  </div>
               </div>

               <div class="modal">
                  <div class="modal__card">
                     <i class="ri-close-large-line modal__close"></i>

                     <img src="assets/Img/3dbg.png" alt="image" class="modal__img">

                     <div>
                        <h3 class="modal__name">เครื่องพิมพ์สามมิติ
                           <hr>
                        </h3>
                        <p class="modal__info">
                           หลักการทำงาน: ใช้เทคโนโลยีการพิมพ์แบบเพิ่มชั้น (additive manufacturing)
                           โดยการวางวัสดุทีละชั้นจนได้เป็นรูปทรงสามมิติ
                           วัสดุที่ใช้พิมพ์สามารถเป็นพลาสติก โลหะ หรือสารประกอบอื่น ๆ ขึ้นอยู่กับประเภทของเครื่องพิมพ์
                        </p>

                     </div>
                     <div class="modal__buttons">


                     </div>
                  </div>
               </div>
            </article>





            <article>
               <div class="card__product AnimationText">
                  <img src="assets/Img/mutiy.webp" alt="image" class="card_img">

                  <div>
                     <h3 class="card__name">เครื่องพิมพ์แบบมัลติฟังก์ชัน</h3>

                  </div>
               </div>

               <div class="modal">
                  <div class="modal__card">
                     <i class="ri-close-large-line modal__close"></i>

                     <img src="assets/Img/mutiy.webp" alt="image" class="modal__img">

                     <div>
                        <h3 class="modal__name">เครื่องพิมพ์แบบมัลติฟังก์ชัน
                           <hr>
                        </h3>
                        <p class="modal__info">
                           หลักการทำงาน: รวมฟังก์ชันการพิมพ์ การสแกน การถ่ายเอกสาร และแฟกซ์ไว้ในเครื่องเดียว
                           สามารถทำงานแบบเลเซอร์หรืออิงค์เจ็ทก็ได้
                           ขึ้นอยู่กับชนิดของเครื่องพิมพ์

                     </div>
                     <div class="modal__buttons">


                     </div>
                  </div>
               </div>
            </article>





            <article>
               <div class="card__product AnimationText">
                  <img src="assets/Img/thermial.png" alt="image" class="card_img">

                  <div>
                     <h3 class="card__name">เครื่องพิมพ์แบบความร้อน</h3>

                  </div>
               </div>

               <div class="modal">
                  <div class="modal__card">
                     <i class="ri-close-large-line modal__close"></i>

                     <img src="assets/Img/thermial.png" alt="image" class="modal__img">

                     <div>
                        <h3 class="modal__name">เครื่องพิมพ์แบบความร้อน
                           <hr>
                        </h3>
                        <p class="modal__info">
                           หลักการทำงาน: ใช้หัวพิมพ์ที่มีความร้อนในการทำปฏิกิริยากับกระดาษความร้อน
                           ซึ่งกระดาษชนิดนี้จะเปลี่ยนสีเมื่อได้รับความร้อน
                           ทำให้เกิดตัวอักษรหรือภาพ
                        </p>

                     </div>
                     <div class="modal__buttons">


                     </div>
                  </div>
               </div>
            </article>


      </section>
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
               <li><a href="HowToBuy.php">วิธีดูเเลรักษา</a></li>
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


   <!--ตัวเปิดปิดของโทรศัพท์-->
   <script src="assets/JavaScript/main.js"></script>

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