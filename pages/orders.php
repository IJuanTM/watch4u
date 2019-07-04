<?php
	if ($userrole == 'Root'){

		$sql = "SELECT * FROM `orderline` LIMIT 3;";
		$result = mysqli_query($conn, $sql);
		$records = '';

		while ($record = mysqli_fetch_assoc($result)){

			$id = $record["idproduct"];
			$id2 = $record["idorder"];

			$sql1 = "SELECT * FROM `product` WHERE `idproduct` = '$id'";
			$result1 = mysqli_query($conn, $sql1);
			$record1 = mysqli_fetch_assoc($result1);

			$sql2 = "SELECT * FROM `order` WHERE `idorder` = '$id2'";
			$result2 = mysqli_query($conn, $sql2);
			$record2 = mysqli_fetch_assoc($result2);
			
			$id3 = $record2["iduser"];

			$sql3 = "SELECT * FROM `user` WHERE `iduser` = '$id3'";
			$result3 = mysqli_query($conn, $sql3);
			$record3 = mysqli_fetch_assoc($result3);

			$records .= "
			<tr>
				<td scope='row'>" . $record["idorder"] . "</td>
				<td scope='row'><img src='" . strtolower($record1["image"]) . "' width='60px' height='60px'</td>
				<td scope='row'>" . ucwords($record1["name"]) . "</td>
				<td scope='row'>" . ucwords($record3["firstname"]) . ' ' . strtolower($record3["infix"]) . ' ' . ucwords($record3["lastname"]) . "</td>
				<td scope='row'>" . $record["amount"] . "</td>
				<td scope='row'>€ " . $record2["price_inc"] . "</td>
				<td scope='row'>€ " . $record["total"] . "</td>
				<td scope='row'>" . $record2["status"] . "</td>
			</tr>";
		}

	} else if ($userrole == 'Admin') {

		$sql = "SELECT * FROM `orderline`;";
		$result = mysqli_query($conn, $sql);
		$records = '';

		while ($record = mysqli_fetch_assoc($result)){

			$id = $record["idproduct"];
			$id2 = $record["idorder"];

			$sql1 = "SELECT * FROM `product` WHERE `idproduct` = '$id'";
			$result1 = mysqli_query($conn, $sql1);
			$record1 = mysqli_fetch_assoc($result1);

			$sql2 = "SELECT * FROM `order` WHERE `idorder` = '$id2'";
			$result2 = mysqli_query($conn, $sql2);
			$record2 = mysqli_fetch_assoc($result2);
			
			$id3 = $record2["iduser"];

			$sql3 = "SELECT * FROM `user` WHERE `iduser` = '$id3'";
			$result3 = mysqli_query($conn, $sql3);
			$record3 = mysqli_fetch_assoc($result3);

			$records .= "
			<tr>
				<td scope='row'>" . $record["idorder"] . "</td>
				<td scope='row'><img src='" . strtolower($record1["image"]) . "' width='60px' height='60px'</td>
				<td scope='row'>" . ucwords($record1["name"]) . "</td>
				<td scope='row'>" . ucwords($record3["firstname"]) . ' ' . strtolower($record3["infix"]) . ' ' . ucwords($record3["lastname"]) . "</td>
				<td scope='row'>" . $record["amount"] . "</td>
				<td scope='row'>€ " . $record2["price_inc"] . "</td>
				<td scope='row'>€ " . $record["total"] . "</td>
				<td scope='row'>" . $record2["status"] . "</td>
			</tr>";
		}

	} else if ($userrole == 'Customer') {

		$sql = "SELECT * FROM `orderline`;";
		$result = mysqli_query($conn, $sql);
		$records = '';

		while ($record = mysqli_fetch_assoc($result)){

			$id = $record["idproduct"];
			$id2 = $record["idorder"];

			$sql1 = "SELECT * FROM `product` WHERE `idproduct` = '$id'";
			$result1 = mysqli_query($conn, $sql1);
			$record1 = mysqli_fetch_assoc($result1);

			$sql2 = "SELECT * FROM `order` WHERE `idorder` = '$id2'";
			$result2 = mysqli_query($conn, $sql2);
			$record2 = mysqli_fetch_assoc($result2);
			
			$id3 = $record2["iduser"];

			$sql3 = "SELECT * FROM `user` WHERE `iduser` = '$id3'";
			$result3 = mysqli_query($conn, $sql3);
			$record3 = mysqli_fetch_assoc($result3);

			$records .= "
			<tr>
				<td scope='row'>" . $record["idorder"] . "</td>
				<td scope='row'><img src='" . strtolower($record1["image"]) . "' width='60px' height='60px'</td>
				<td scope='row'>" . ucwords($record1["name"]) . "</td>
				<td scope='row'>" . ucwords($record3["firstname"]) . ' ' . strtolower($record3["infix"]) . ' ' . ucwords($record3["lastname"]) . "</td>
				<td scope='row'>" . $record["amount"] . "</td>
				<td scope='row'>€ " . $record2["price_inc"] . "</td>
				<td scope='row'>€ " . $record["total"] . "</td>
				<td scope='row'>" . $record2["status"] . "</td>
			</tr>";
		}

	} else {
		echo '
		<hr class="content-row">
		<h1>Error</h1>
        <hr class="content-row">
		<div class="container">
			<a href="./index.php?content=login">Log hier eerst in om deze pagina te bekijken.</a>
		</div>
		';
	}
?>
<?php
	if ($userrole == 'Root') {
		echo '
        <hr class="content-row">
		<h1>Your Orders</h1>
        <hr class="content-row">
		<br>
		<div class="row">
            <div class="col-1 col-md-2 col-lg-3"></div>
            <div class="col-10 col-md-8 col-lg-6">
				<table class="table table-dark table-responsive" style="border:0;">
					<thead style="color:gold;">
						<tr>
							<th scope="col-1">Order</th>
							<th scope="col-1">Image</th>
							<th scope="col-2">Name</th>
							<th scope="col-4">User</th>
							<th scope="col-1">Amount</th>
							<th scope="col-1">Price</th>
							<th scope="col-1">Total</th>
							<th scope="col-1">Status</th>
						</tr>
					</thead>
					<tbody>
						' . $records . '
					</tbody>
				</table>
			</div>
            <div class="col-1 col-md-2 col-lg-3"></div>
		</div>
		';
	} else if ($userrole == 'Admin') {
		echo '
        <hr class="content-row">
		<h1>Your Orders</h1>
        <hr class="content-row">
		<br>
		<div class="row">
            <div class="col-1 col-md-2 col-lg-3"></div>
            <div class="col-10 col-md-8 col-lg-6">
				<table class="table table-dark table-responsive" style="border:0;">
					<thead style="color:gold;">
						<tr>
							<th scope="col-1">Order</th>
							<th scope="col-1">Image</th>
							<th scope="col-2">Name</th>
							<th scope="col-4">User</th>
							<th scope="col-1">Amount</th>
							<th scope="col-1">Price</th>
							<th scope="col-1">Total</th>
							<th scope="col-1">Status</th>
						</tr>
					</thead>
					<tbody>
						' . $records . '
					</tbody>
				</table>
			</div>
            <div class="col-1 col-md-2 col-lg-3"></div>
		</div>
		';
	} else if ($userrole == 'Customer') {
		echo '
        <hr class="content-row">
		<h1>Your Orders</h1>
        <hr class="content-row">
		<br>
		<div class="row">
            <div class="col-1 col-md-2 col-lg-3"></div>
            <div class="col-10 col-md-8 col-lg-6">
				<table class="table table-dark table-responsive" style="border:0;">
					<thead style="color:gold;">
						<tr>
							<th scope="col-1">Order</th>
							<th scope="col-1">Image</th>
							<th scope="col-2">Name</th>
							<th scope="col-4">User</th>
							<th scope="col-1">Amount</th>
							<th scope="col-1">Price</th>
							<th scope="col-1">Total</th>
							<th scope="col-1">Status</th>
						</tr>
					</thead>
					<tbody>
						' . $records . '
					</tbody>
				</table>
			</div>
            <div class="col-1 col-md-2 col-lg-3"></div>
		</div>
		';
    } else {
		echo '';
	}
?>