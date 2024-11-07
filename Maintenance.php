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
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>วิธีการเลือกซื้อเครื่องพิมพ์</title>
    <link rel="stylesheet" href="assets/css/Maintenance.css">
    <link rel="stylesheet" href="assets/css/navber.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/Footer.css">
</head>

<body style=" background-color: hsl(210, 50%, 15%);">
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
            <h2>การดูแลรักษาเครื่องพิมพ์ที่ถูกต้อง</h2>
            <p>การดูแลเครื่องพิมพ์อย่างสม่ำเสมอจะช่วยยืดอายุการใช้งานของเครื่องพิมพ์และลดปัญหาที่เกิดขึ้น
                นี่คือขั้นตอนสำคัญที่สามารถทำได้ง่าย:</p>

            <iframe width="560" height="315" alt="ข้อมูลวิดีโอจาก YouTube : [ สัปดาห์ที่ 6 บทที่ 8 "
                วิธีการดูแลรักษาเครื่องพิมพ์" ]" src="https://www.youtube.com/embed/EYI7anmNnOE?si=wkqFGKmeBgOVcHRh"
                title="ข้อมูลวิดีโอจาก YouTube : สัปดาห์ที่ 6 บทที่ 8 " วิธีการดูแลรักษาเครื่องพิมพ์" ">

            </iframe><br>
            <p><a href=" https://youtu.be/EYI7anmNnOE?si=BVygQHxC4Kyr7-D3"
                alt="ข้อมูลวิดีโอจาก YouTube : [ สัปดาห์ที่ 6 บทที่ 8 " วิธีการดูแลรักษาเครื่องพิมพ์" ]"
                style="color: rgb(255, 230, 0); " target="_blank">ข้อมูลวิดีโอจาก YouTube : สัปดาห์ที่ 6 บทที่ 8
                "วิธีการดูแลรักษาเครื่องพิมพ์"
                </a>
                </p>
                <br>
                <h2>ขั้นตอนการดูแลเครื่องพิมพ์</h2>
                <ul>
                    <li>ทำความสะอาดหัวพิมพ์ทุกเดือน</li>
                    <li>เปลี่ยนตลับหมึกเมื่อหมึกเหลือน้อย</li>
                    <li>ปิดเครื่องพิมพ์เมื่อไม่ได้ใช้งาน</li>
                    <li>รักษาความสะอาดรอบๆ เครื่องพิมพ์</li>
                </ul>

                <div class="tip">
                    <p><strong style="color: rgb(255, 225, 0);">เคล็ดลับ :</strong> ใช้หมึกพิมพ์แท้จากผู้ผลิต
                        เพื่อหลีกเลี่ยงปัญหาการพิมพ์และรักษาประสิทธิภาพของเครื่อง</p>
                </div>

                <div class="sub-section">
                    <h3>การทำความสะอาดหัวพิมพ์</h3>
                    <p>การทำความสะอาดหัวพิมพ์สามารถทำได้โดยการใช้ฟังก์ชั่นทำความสะอาดที่มีอยู่ในเครื่องพิมพ์
                        แต่ถ้าหากต้องการทำความสะอาดด้วยมือ ควรใช้ผ้าสะอาดที่ไม่มีฝุ่น เช็ดเบาๆ บริเวณหัวพิมพ์</p>
                </div>

                <div class="sub-section">
                    <h3>การเปลี่ยนตลับหมึก</h3>
                    <p>เมื่อหมึกพิมพ์ใกล้จะหมด ระบบแจ้งเตือนของเครื่องพิมพ์จะปรากฏขึ้น ควรเตรียมหมึกพิมพ์ใหม่ไว้ล่วงหน้า
                        และทำการเปลี่ยนทันทีเพื่อป้องกันการพิมพ์ผิดพลาด</p>
                </div>

                <div class="sub-section">
                    <h3>การจัดการปัญหาที่พบบ่อย</h3>
                    <ul>
                        <li>หมึกพิมพ์ไม่ออก : ตรวจสอบหัวพิมพ์ว่าไม่ได้อุดตันหรือมีฝุ่นสะสม</li>
                        <li>การพิมพ์เบลอหรือซ้อน :
                            ปรับการตั้งค่าความละเอียดของเครื่องพิมพ์หรือทำความสะอาดหัวพิมพ์</li>
                        <li>หมึกหมดเร็ว : ควรใช้โหมดประหยัดหมึกหากพิมพ์งานเอกสารทั่วไป</li>
                    </ul>
                </div>

                <div class="sub-section">
                    <h3>การบำรุงรักษาเครื่องพิมพ์เลเซอร์</i></h3>
                    <p>สำหรับเครื่องพิมพ์เลเซอร์ ควรทำความสะอาดลูกกลิ้งและพื้นที่ภายในเครื่องบ่อยครั้ง และเปลี่ยนผงหมึก
                        (Toner)
                        เมื่อระบบแจ้งเตือน เพื่อป้องกันปัญหาคุณภาพการพิมพ์</p>
                </div>

                <div class="sub-section">
                    <h3>การบำรุงรักษาเครื่องพิมพ์อิงค์เจ็ท</h3>
                    <p>สำหรับเครื่องพิมพ์อิงค์เจ็ท ควรใช้งานอย่างสม่ำเสมอ เพื่อป้องกันการอุดตันของหัวพิมพ์
                        หากไม่ได้ใช้งานเป็นเวลานาน ควรถอดตลับหมึกออกและเก็บรักษาในที่เย็น</p>
                </div>

                <div class="sub-section">
                    <h3>การบำรุงรักษาเครื่องพิมพ์ดอทเมทริกซ์</i></h3>
                    <p>สำหรับเครื่องพิมพ์ดอทเมทริกซ์ ควรทำความสะอาดเข็มพิมพ์และแถบหมึก (Ribbon) อย่างสม่ำเสมอ
                        เพื่อลดการสะสมของฝุ่นและสิ่งสกปรกที่อาจทำให้การพิมพ์ไม่ชัดเจน นอกจากนี้
                        ควรเปลี่ยนแถบหมึกเมื่อหมึกเริ่มจาง เพื่อให้ได้คุณภาพการพิมพ์ที่สม่ำเสมอ</p>
                </div>

                <div class="sub-section">
                    <h3>การบำรุงรักษาเครื่องพิมพ์สามมิติ (3D Printer) </h3>
                    <p>ควรตรวจสอบหัวพิมพ์และทำความสะอาดส่วนหัวเพื่อป้องกันการอุดตันของวัสดุพิมพ์ (Filament)
                        ตรวจสอบความตึงของสายพาน (Belt) และตรวจเช็คชิ้นส่วนต่าง ๆ ที่เคลื่อนไหวบ่อยครั้ง
                        เพื่อให้แน่ใจว่าการพิมพ์เป็นไปอย่างราบรื่น</p>
                </div>
                <div class="sub-section">
                    <h3>การบำรุงรักษาเครื่องพิมพ์แบบมัลติฟังก์ชัน</h3>
                    <p>ควรตรวจสอบหัวพิมพ์และทำความสะอาดส่วนหัวเพื่อป้องกันการอุดตันของหมึก
                        ตรวจสอบการเคลื่อนไหวของลูกกลิ้งและความเรียบร้อยของถาดกระดาษ
                        ตรวจเช็คชิ้นส่วนต่างๆ ที่เคลื่อนไหวบ่อยครั้ง เพื่อให้แน่ใจว่าการพิมพ์เป็นไปอย่างราบรื่น</p>
                </div>
                <div class="sub-section">
                    <h3>การบำรุงรักษาเครื่องพิมพ์แบบความร้อน </h3>
                    <p>ควรตรวจสอบหัวพิมพ์และทำความสะอาดส่วนหัวเพื่อป้องกันการอุดตันของผงกระดาษ
                        ตรวจสอบความเรียบร้อยของลูกกลิ้งและกระดาษพิมพ์
                        ตรวจเช็คชิ้นส่วนต่างๆ ที่เคลื่อนไหวบ่อยครั้ง เพื่อให้แน่ใจว่าการพิมพ์เป็นไปอย่างราบรื่น</p>
                </div>


                <h2>ข้อควรระวัง</h2>
                <p>ควรหลีกเลี่ยงการใช้ตลับหมึกที่หมดอายุหรือไม่ได้มาตรฐาน เพราะอาจทำให้หัวพิมพ์เสียหายได้
                    และควรทำความสะอาดเครื่องพิมพ์ทุกครั้งหลังใช้งานเสร็จเพื่อป้องกันการสะสมของฝุ่น</p>
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