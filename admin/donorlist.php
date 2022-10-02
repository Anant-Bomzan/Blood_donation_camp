<?php
include('header/header.php');
include('header/navadmin.php');
include('header/connection.php');
?>

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="./css/d1.css">
</head>

<body>
  <br>
  <h1 align="center">Donor List</h1>
  <br>
  <table id="customers" style="margin: 0px auto;">
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Blood Group</th>
      <th>Gender</th>
      <th>Age</th>
      <th>Weight</th>
      <th>Last Donated</th>
      <th>Phone Number</th>
      <th>Address</th>

    </tr>
    <?php
    $q = $db->query("SELECT * FROM donor");
    while ($p = $q->fetch(PDO::FETCH_OBJ)) {
    ?>
      <tr>

        <?php
        $d = $p->date;
        $current = date("Y/m/d");
        $month = ((strtotime($current) - strtotime($d)) / 60 / 60 / 24) / 30;
        if ($month < 3.0) {
        ?>
          <td>
            <font color="red"><?= $p->id; ?></font>
          </td>
          <td>
            <font color="red"><?= $p->name; ?></font>
          </td>
          <td>
            <font color="red"><?= $p->bgroup; ?></font>
          </td>
          <td>
            <font color="red"><?= $p->gender; ?></font>
          </td>
          <td>
            <font color="red"><?= $p->age; ?></font>
          </td>
          <td>
            <font color="red"><?= $p->weight; ?></font>
          </td>
          <td>
            <font color="red"><?= $p->date; ?></font>
          </td>
          <td>
            <font color="red"><?= $p->number; ?></font>
          </td>
          <td>
            <font color="red"><?= $p->address; ?></font>
          </td>
        <?php
        } else {
        ?>
          <td><?= $p->id; ?></td>
          <td><?= $p->name; ?></td>
          <td><?= $p->bgroup; ?></td>
          <td><?= $p->gender; ?></td>
          <td><?= $p->age; ?></td>
          <td><?= $p->weight; ?></td>
          <td><?= $p->date; ?></td>
          <td><?= $p->number; ?></td>
          <td><?= $p->address; ?></td>
        <?php
        }

        ?>
      </tr>
    <?php
    }
    ?>

  </table>
  <br>
  <p align="center" padding="40px">Note: [Red colored are not eligible for Donation] </p>
  </br>
</body>

</html>