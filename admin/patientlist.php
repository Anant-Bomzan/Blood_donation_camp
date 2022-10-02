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
	<h1 align="center">Patient List</h1>
	<br>
	<table id="customers" style="margin: 0px auto;">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Blood Group</th>
			<th>Gender</th>
			<th>Age</th>
			<th>Weight</th>
			<th>Phone Number</th>
			<th>Address</th>

		</tr>
		<?php
		$q = $db->query("SELECT * FROM patient");
		while ($p = $q->fetch(PDO::FETCH_OBJ)) {
		?>
			<tr>
				<td><?= $p->id; ?></td>
				<td><?= $p->name; ?></td>
				<td><?= $p->bgroup; ?></td>
				<td><?= $p->gender; ?></td>
				<td><?= $p->age; ?></td>
				<td><?= $p->weight; ?></td>
				<td><?= $p->number; ?></td>
				<td><?= $p->address; ?></td>
			</tr>
		<?php
		}
		?>


	</table>

</body>

</html>