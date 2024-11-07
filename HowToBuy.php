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
   <title>HowtoBuy - WhatCom</title>
   <link rel="icon" type="image/x-icon" href="Img/whatcom.png" height="1000">
   <link rel="stylesheet" href="assets/css/navber.css">
   <link rel="stylesheet" href="assets/css/Howtobuy.css">
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


   <!--ข้อมูลหลัก-->
   <main>
      <br><br><br>
      <div class="mamamu">
         <div class="minkub">
            <!-- Section 1 -->
            <div class="ran">
               <div class="ranText">
                  <h2>วิธีการเลือกซื้อเครื่องพิมพ์</h2>
                  <p>
                     การเลือกซื้อเครื่องพิมพ์แต่ละแบบควรพิจารณาจากลักษณะการใช้งานหลักของคุณและความต้องการเฉพาะที่แตกต่างกันไปในแต่ละคนหรือองค์กร
                     โดยเครื่องพิมพ์แต่ละประเภทมีจุดเด่นและข้อจำกัดที่ต่างกัน นี่คือปัจจัยที่ต้องคำนึงถึง
                  </p>
               </div>
               <div class="pornhub">

                  <img src="assets/Img/products.webp" frameborder="0"
                     allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                     referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
               </div>
            </div>

            <!-- Section 2 (Reversed) -->
            <div class="ran valorant minkub">
               <div class="ranText">
                  <h2>งบประมาณ :</h2>
                  <p>
                     เครื่องพิมพ์แต่ละแบบมีต้นทุนการซื้อและการบำรุงรักษาที่แตกต่างกัน นอกจากราคาของตัวเครื่องพิมพ์แล้ว
                     คุณควรพิจารณาถึงค่าใช้จ่ายในการซื้อหมึก (หรือผงหมึก) และอุปกรณ์เสริมอื่น ๆ เช่น แถบหมึก (Ribbon)
                     หรือวัสดุพิมพ์
                     (Filament) ในเครื่องพิมพ์สามมิติ ซึ่งอาจเพิ่มต้นทุนในระยะยาว
                  </p>
               </div>
               <div class="pornhub">
                  <img src="assets/Img/photoinkkaretad.webp" frameborder="0"
                     allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                     referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>

               </div>
            </div>
         </div>

         <div class="minkub">
            <!-- Section 1 -->
            <div class="ran">
               <div class="ranText">
                  <h2> ความสะดวกในการใช้งาน :</h2>
                  <p>
                     ถ้าคุณต้องการเครื่องพิมพ์ที่ใช้งานง่ายและมีฟังก์ชันครบครัน เช่น การเชื่อมต่อไร้สาย
                     หรือสามารถใช้งานร่วมกับอุปกรณ์มือถือได้ ควรพิจารณาเครื่องพิมพ์ที่มีฟีเจอร์การเชื่อมต่อ Wi-Fi หรือ
                     Bluetooth
                     เพื่อความสะดวกสบาย
                  </p>
               </div>
               <div class="pornhub">
                  <img src="assets/Img/photwifi.jpg" frameborder="0"
                     allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                     referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
               </div>
            </div>

            <!-- Section 2 (Reversed) -->
            <div class="ran valorant minkub">
               <div class="ranText">
                  <h2>ความทนทานและการใช้งานต่อเนื่อง :</h2>
                  <p>
                     หากต้องการใช้งานเครื่องพิมพ์ในปริมาณมากและต่อเนื่อง เช่น ในสำนักงาน
                     ควรเลือกเครื่องพิมพ์ที่มีความทนทานสูงและรองรับการพิมพ์ได้หลายพันแผ่นต่อเดือน
                     โดยเฉพาะเครื่องพิมพ์เลเซอร์ที่มีความเร็วและความทนทานสูงกว่าเครื่องพิมพ์อิงค์เจ็ต
                  </p>
               </div>
               <div class="pornhub">
                  <img src="assets/Img/office.jpg" frameborder="0"
                     allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                     referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
               </div>
            </div>
         </div>
         <!-- Section 2 (Reversed) -->
         <div class="minkub">
            <!-- Section 1 -->
            <div class="ran">
               <div class="ranText">
                  <h2> คุณภาพของงานพิมพ์ :</h2>
                  <p>
                     หากคุณต้องการพิมพ์ภาพที่มีความละเอียดสูง เช่น รูปถ่ายหรือภาพกราฟิก
                     ควรเลือกเครื่องพิมพ์อิงค์เจ็ตที่มีความละเอียดสูง
                     (DPI) แต่ถ้าเป็นงานพิมพ์ที่เน้นปริมาณและต้องการความเร็ว เช่น เอกสารขาวดำ
                     เครื่องพิมพ์เลเซอร์จะเหมาะสมมากกว่า
                  </p>
               </div>
               <div class="pornhub">
                  <img src="assets/Img/photocard.jpg" frameborder="0"
                     allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                     referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
               </div>
            </div>


            <div class="ranText">
               <h2 style="text-align: center;">การเลือกซื้อเครื่องพิมพ์ในเเต่ละการใช้งาน</h2>
               <p style="text-align: center;">

                  การเลือกซื้อเครื่องพิมพ์เป็นสิ่งที่ต้องพิจารณาอย่างรอบคอบ <br>
                  เนื่องจากเครื่องพิมพ์แต่ละประเภทมีคุณสมบัติและฟีเจอร์ที่แตก <br>
                  ต่างกันซึ่งเหมาะกับการใช้งานที่หลากหลาย ดังนั้นการเลือก <br>
                  เครื่องพิมพ์ที่เหมาะสมกับการใช้งานของคุณจะช่วยเพิ่มประสิทธิ <br>
                  ภาพในการทำงานและลดค่าใช้จ่ายในระยะยาวได้

               </p>
            </div>


            <div class="ran valorant minkub">
               <div class="ranText">
                  <h2>การใช้งานทั่วไปในบ้าน :</h2>
                  <li>
                     เครื่องพิมพ์แบบ Inkjet : เครื่องพิมพ์ประเภทนี้เป็นตัวเลือกที่ดีสำหรับการใช้งานในบ้าน
                     เพราะสามารถพิมพ์ทั้งเอกสารและภาพถ่ายด้วยคุณภาพดี ราคาของเครื่องพิมพ์ Inkjet มักจะไม่สูงมาก
                     และมีหลายรุ่นที่มีฟังก์ชันเสริม เช่น การสแกนและถ่ายเอกสารในตัว (All-in-One Printers)
                     ทำให้สะดวกในการใช้งาน
                  </li><br>
                  <li>
                     ฟีเจอร์ที่ควรมี : ควรเลือกเครื่องพิมพ์ที่มีการเชื่อมต่อ Wi-Fi หรือ Bluetooth
                     เพื่อให้สามารถพิมพ์จากสมาร์ตโฟน แท็บเล็ต
                     หรือคอมพิวเตอร์โดยไม่ต้องเชื่อมต่อด้วยสายเคเบิล ซึ่งเพิ่มความสะดวกในการใช้งาน
                  </li> <br>

               </div>

               <div class="pornhub">

                  <img src="https://i.pinimg.com/564x/b9/95/19/b99519c790bfde5e183d257945bbac0f.jpg"
                     title="YouTube video player" frameborder="0"
                     allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                     referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></img>

               </div>

            </div>

         </div>
         <!-- Section 2 (Reversed) -->
         <div class="minkub">
            <!-- Section 1 -->
            <div class="ran">
               <div class="ranText">
                  <h2> การใช้งานในสำนักงานขนาดเล็ก :</h2>
                  <li>
                     เครื่องพิมพ์แบบ Laser : เครื่องพิมพ์ Laser
                     เหมาะสำหรับสำนักงานขนาดเล็กที่มีการพิมพ์เอกสารเป็นจำนวนมาก
                     เนื่องจากมีความเร็วในการพิมพ์สูงและต้นทุนต่อหน้าต่ำ นอกจากนี้ยังมีความคมชัดของข้อความที่ดี
                     ซึ่งทำให้เหมาะสำหรับเอกสารทางธุรกิจ
                  </li> <br>
                  <li>
                     ฟีเจอร์ที่ควรมี: ควรเลือกเครื่องพิมพ์ที่มีฟังก์ชันการพิมพ์สองหน้าอัตโนมัติ (Duplex Printing)
                     ซึ่งช่วยประหยัดกระดาษและลดค่าใช้จ่าย
                     ฟังก์ชันนี้จะช่วยให้การพิมพ์เอกสารที่มีสองหน้าเป็นเรื่องง่ายและสะดวก
                  </li><br>

               </div>
               <div class="pornhub">
                  <img src="https://i0.wp.com/www.iurban.in.th/wp-content/uploads/2015/06/DSC01658-11.jpg?ssl=1"
                     frameborder="0"
                     allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                     referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
               </div>
            </div>


            <div class="ran valorant minkub">
               <div class="ranText">
                  <h2>การใช้งานในสำนักงานขนาดใหญ่ :</h2>
                  <li>
                     เครื่องพิมพ์แบบ Laser ขาวดำหรือ Laser สี: ในสำนักงานขนาดใหญ่ที่ต้องการพิมพ์เอกสารปริมาณมาก
                     เครื่องพิมพ์ Laser
                     ขาวดำเหมาะสำหรับการพิมพ์เอกสารที่ไม่มีสี ในขณะที่เครื่องพิมพ์ Laser
                     สีจะเป็นตัวเลือกที่ดีหากมีความต้องการพิมพ์เอกสารที่มีสี
                  </li><br>
                  <li>
                     ฟีเจอร์ที่ควรมี: ควรเลือกเครื่องพิมพ์ที่มีฟังก์ชันการพิมพ์หลายหน้า (Multi-Function Printers)
                     ซึ่งรวมถึงการพิมพ์,
                     การสแกน, การถ่ายเอกสาร และแฟกซ์ (Fax) รวมถึงความสามารถในการเชื่อมต่อเครือข่าย (Network
                     Connectivity)
                     เพื่อให้ทุกคนในสำนักงานสามารถใช้เครื่องพิมพ์ได้อย่างสะดวก
                  </li> <br>

               </div>

               <div class="pornhub">

                  <img
                     src="https://static-siplah.blibli.com/data/images/SCWP-0005-00770/2d8994f9-e76e-463f-a3fe-64a00344782a.jpeg"
                     title="YouTube video player" frameborder="0"
                     allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                     referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></img>

               </div>

            </div>


            <!-- Section 2 (Reversed) -->
            <div class="minkub">
               <!-- Section 1 -->
               <div class="ran">
                  <div class="ranText">
                     <h2> การใช้งานด้านการออกแบบและการพิมพ์ภาพถ่าย:</h2>
                     <li>
                        เครื่องพิมพ์แบบ Inkjet ระดับสูง: สำหรับผู้ที่ต้องการพิมพ์ภาพถ่ายหรือกราฟิกที่มีคุณภาพสูง
                        เครื่องพิมพ์ Inkjet
                        ระดับสูงเป็นตัวเลือกที่เหมาะสม เพราะมีคุณสมบัติการพิมพ์ที่ละเอียดและหมึกที่มีคุณภาพสูง
                     </li> <br>
                     <li>
                        ฟีเจอร์ที่ควรมี: ควรเลือกเครื่องพิมพ์ที่สามารถรองรับกระดาษหลายประเภทและขนาดต่างๆ
                        รวมถึงฟังก์ชันการพิมพ์ที่สามารถปรับแต่งสีและความละเอียดได้ตามความต้องการ
                     </li><br>

                  </div>
                  <div class="pornhub">
                     <img
                        src="https://www.copyki-gmen.com/fukugoki/wp-content/uploads/sites/2/2022/02/Satera-MF832Cdw.jpg"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                  </div>
               </div>

               <div class="ran valorant minkub">
                  <div class="ranText">
                     <h2>การใช้งานพกพา:</h2>
                     <li>
                        เครื่องพิมพ์พกพา: เหมาะสำหรับผู้ที่ต้องการความสะดวกในการพิมพ์เมื่ออยู่นอกบ้าน เช่น
                        นักธุรกิจที่ต้องเดินทางบ่อยหรือผู้ที่ทำงานจากที่ต่างๆ
                        เครื่องพิมพ์พกพามักจะมีขนาดกะทัดรัดและสามารถเชื่อมต่อกับอุปกรณ์มือถือผ่าน Wi-Fi หรือ Bluetooth
                     </li><br>
                     <li>
                        ฟีเจอร์ที่ควรมี: ควรเลือกเครื่องพิมพ์ที่มีขนาดเล็กและน้ำหนักเบา มีการเชื่อมต่อไร้สายที่สะดวก
                        และสามารถพิมพ์เอกสารและภาพถ่ายได้อย่างรวดเร็ว
                     </li> <br>

                  </div>

                  <div class="pornhub">

                     <img src="https://th.bing.com/th/id/OIP.CbuT8xX0uffyoTOeZbEY4wHaGS?w=528&h=448&rs=1&pid=ImgDetMain"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></img>

                  </div>

               </div>


            </div>
         </div>
   </main>
















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
   <script>
      // ดักการคลิกปุ่ม
      document.getElementById('scrollButton').addEventListener('click', function () {
         // ใช้ scrollIntoView() เพื่อเลื่อนไปยัง section ที่ต้องการ
         document.getElementById('section2').scrollIntoView({ behavior: 'smooth' });
      });
   </script>

   <script src="assets/JavaScript/main.js"></script>
   <script src="assets/JavaScript/backtotop.js"></script>
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