<?php
session_start();
include('server.php');

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repair Request</title>
    <link rel="stylesheet" href="assets/css/navber.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/Footer.css">
    <link rel="stylesheet" href="assets/css/register,login.css">
    <link rel="icon" type="image/x-icon" href="assets/Img/whatcom.png">
</head>

<body style="background-color: black;">
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
                        <div class="sign">Logout</div>
                        <div class="text"> <a href="index.php?logout='1'" style="color: white;">Log out</a></div>
                    </button>
                <?php endif ?>
            </nav>
        </div>
    </header>

    <main>
        <form class="form" action="assets/database/repair_db.php" method="post">
            <p class="title">Repair Request</p>

            <label>
                <input required type="text" class="input" name="device_name" for="device_name">
                <span>Device Name</span>
            </label>

            <label>
                <textarea required class="input" name="problem_description" for="problem_description" rows="4"></textarea>
                <span>Problem Description</span>
            </label>

            <label>
                <input required type="text" class="input" name="contact_info" for="contact_info">
                <span>Contact Info</span>
            </label>

            <button class="submit" name="submit_repair">Submit Request</button>
            <p class="signin">Want to go back? <a href="index.php">Home</a></p>
        </form>
    </main>

</body>

</html>
