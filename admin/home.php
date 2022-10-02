<?php
include('header/header.php');
include('header/nav.php'); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <style>
        #boxes {
            margin-top: 60px;
        }

        #boxes .box {
            text-align: center;
            width: 30%;
            padding: 10px;
        }
    </style>
    <title>Blood Donation | Welcome</title>
    <section id="boxes" align="center">
        <div class="container" align="center">
            <div class="box">
                <img src="./img/admin.png" ALT="Admin Login" WIDTH=100 HEIGHT=100>
                <ul style="list-style:none;">
                    <li><a href="login.php">Admin Login</a></li>
                </ul>
                <br></br>
            </div>
            <div class="box">
                <img src="./img/user.png" ALT="User Login" WIDTH=140 HEIGHT=100>
                <ul style="list-style:none;">
                    <li><a href="loginuser.php">User Login</a></li>
                </ul>
                <br></br>
            </div>
        </div>
    </section>
    </body>
</head>

</html>