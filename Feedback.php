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
    <title>Microsoft Form - ความพึงพอใจ</title>
    <link rel="icon" type="image/x-icon" href="assets/Img/whatcom.png">
    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            height: 100%;
        }

        .form-container {
            height: 100vh;
            /* ใช้ความสูงเต็มจอ */
            width: 100vw;
            /* ใช้ความกว้างเต็มจอ */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        iframe {
            border: none;
            width: 100%;
            height: 100%;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <iframe src="https://forms.office.com/r/RTM0evPRfi" frameborder="0" allowfullscreen></iframe>
    </div>
</body>

</html>