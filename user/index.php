<?php
include('header/header.php');
include('header/navuser.php'); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <style>
    #boxes {
      margin-top: 60px;
    }

    #boxes .box {
      float: left;
      text-align: center;
      width: 30%;
      padding: 10px;
    }
  </style>
  <title>Blood Donation | Welcome</title>
  <link rel="stylesheet" href="./css/style.css">

  <section id="boxes" align="center">
    <div class="container" align="center">
      <div class="box">
        <img src="./img/donorguy.png" ALT="register as donor" WIDTH=100 HEIGHT=100>
        <ul style="list-style:none;">
          <li><a href="reg.php">Register as a Donor</a></li>
        </ul>
        <br></br>
      </div>
      <div class="box">
        <img src="./img/Search.png" ALT="search for blood" WIDTH=100 HEIGHT=100>
        <ul style="list-style:none;">
          <li><a href="blood.php">Search for Blood</a></li>
        </ul>
        <br></br>
      </div>
      <div class="box">
        <img src="./img/request.png" ALT="request blood" WIDTH=80 HEIGHT=100>
        <ul style="list-style:none;">
          <li><a href="reg2.php">Request for Blood</a></li>
        </ul>
      </div>
    </div>
    </div>
  </section>
  </body>

</html>