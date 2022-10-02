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
	<h1 align="center">Donation List</h1>
	<br>
	<table id="customers" style="margin: 0px auto;">
		<tr>
			<th>Donation ID</th>
			<th>Donor Name</th>
			<th>Patient Name</th>
			<th>Blood Group</th>
			<th>Date</th>

		</tr>
		<?php
		$q = $db->query("SELECT * FROM donation");
		while ($p = $q->fetch(PDO::FETCH_OBJ)) {
		?>
			<tr>
				<td><?= $p->donationid; ?></td>
				<td><?= $p->dname; ?></td>
				<td><?= $p->pname; ?></td>
				<td><?= $p->bgroup; ?></td>
				<td><?= $p->date; ?></td>
			</tr>
		<?php
		}
		?>


	</table>

</body>

</html>