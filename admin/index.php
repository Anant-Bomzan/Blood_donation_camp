<?php
include('header/header.php');
include('header/navadmin.php'); ?>
<!DOCTYPE html>
<html>
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
<section id="boxes">
  <div class="container">
    <div class="box">
      <img src="./img/donorguy.png" ALT="" WIDTH=80 HEIGHT=100>

      <ul style="list-style:none;">
        <li><a href="reg.php">Add Donor</a></li>
      </ul>

    </div>
    <div class="box">
      <img src="./img/donation.jpg" ALT="" WIDTH=100 HEIGHT=100>
      <ul style="list-style:none;">
        <li><a href="donation.php">Proceed a Donation</a></li>
      </ul>
    </div>
    <div class="box">
      <img src="./img/delete.png" ALT="" WIDTH=100 HEIGHT=100>
      <ul style="list-style:none;">
        <li><a href="delete.php">Delete Donor/Patient</a></li>
      </ul>
    </div>
    <br><br><br>
    <div class="box">
      <img src="./img/patient.png" ALT="" WIDTH=100 HEIGHT=100>
      <ul style="list-style:none;">
        <li><a href="reg2.php">Add Patient</a></li>
      </ul>
    </div>
    <div class="box">
      <img src="./img/donorlists.png" ALT="" WIDTH=120 HEIGHT=100>
      <ul style="list-style:none;">
        <li><a href="donorlist.php">Donor List</a></li>
      </ul>
    </div>
    <div class="box">
      <img src="./img/patientlist.png" ALT="" WIDTH=90 HEIGHT=100>
      <ul style="list-style:none;">
        <li><a href="patientlist.php">Patient List</a></li>
      </ul>
    </div>
    <br><br>
  </div>
</section>

</html>