<?php
session_start();
include('header/header.php');
include('header/connection.php');
if (isset($_SESSION['loggedin']) == true) {
  include('header/navuser.php');
} else {
  include('header/nav.php');
}
?>

<!DOCTYPE html>
<html>

<section id="">
  <div class="">
    <div class="" align="center">
      <img src="./img/vision.png" ALT="" WIDTH=180 HEIGHT=178>
      <ul style="list-style:none;">
        <li><a href="">Our Vision</a></li>
      </ul>
      <p>To pave way for a safer and better tommorrow. <br>
        ★ Safer, by bringing blood donors and those in need to a common platform. <br>
        ★ Better, by providing every person what he/she deserves the most, best education.</p>
    </div>
    <br><br>
    <div class="" align="center">
      <img src="./img/target.png" ALT="" WIDTH=200 HEIGHT=160>
      <ul style="list-style:none;">
        <li><a href="">Our Goal</a></li>
        <p>To be the real hope of every Indian in search of a voluntary blood donor and to set up a well organised infrastructure through out the state to cater to the education of the under resourced by way of maintaining a repository of contributed books and providing as many resources as possible for rural child education.</p>
      </ul>
    </div>
    <br><br>
    <div class="" align="center">
      <img src="./img/mission.png" ALT="" WIDTH=180 HEIGHT=178>
      <ul style="list-style:none;">
        <li><a href="">Our Mission</a></li>
        <p>To make the best use of contemporary technologies in delivering a promising web portal to bring together all the blood donors in Siliguri, thereby fulfilling every blood request in the town.</p>
      </ul>
    </div>

    <br><br>
  </div>
</section>

</html>