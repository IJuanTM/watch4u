<?php
	if ($userrole == 'Root'){

		$sql = "SELECT * FROM `orderline`;";
		$result = mysqli_query($conn, $sql);
		$records = '';

		while ($record = mysqli_fetch_assoc($result)){

			$id = $record["idproduct"];

			$sql1 = "SELECT * FROM `product` WHERE `idproduct` = '$id'";
			$result1 = mysqli_query($conn, $sql1);
			$record1 = mysqli_fetch_assoc($result1);

			$records .= "
			<tr>
				<td scope='row'>" . $record["idorder"] . "</td>
				<td scope='row'><img src='" . strtolower($record1["image"]) . "' width='60px' height='60px'</td>
				<td scope='row'>" . ucwords($record1["name"]) . "</td>
				<td scope='row'>" . $record["amount"] . "</td>
				<td scope='row'>€ " . $record["price"] . "</td>
				<td scope='row'>€ " . $record["total"] . "</td>
				<td scope='row'>" . $record1["amount"] . "</td>
				<td>
					<a href='./script/update_product.php?idproduct=" . $id . "'>
						<i class='fas fa-pen'></i>
					</a>
				</td>
				<td>
					<a href='./script/delete_product.php?idproduct=" . $id . "'>
						<i class='fas fa-times'></i>
					</a>
				</td>
			</tr>";
		}

	} else if ($userrole == 'Admin'){
		$sql = "SELECT * FROM `orderline`;";
		$result = mysqli_query($conn, $sql);
		$records = '';

		while ($record = mysqli_fetch_assoc($result)){

			$id = $record["idproduct"];

			$sql1 = "SELECT * FROM `product` WHERE `idproduct` = '$id'";
			$result1 = mysqli_query($conn, $sql1);
			$record1 = mysqli_fetch_assoc($result1);

			$records .= "
			<tr>
				<td scope='row'>" . $record["idorder"] . "</td>
				<td scope='row'><img src='" . strtolower($record1["image"]) . "' width='60px' height='60px'</td>
				<td scope='row'>" . ucwords($record1["name"]) . "</td>
				<td scope='row'>" . $record["amount"] . "</td>
				<td scope='row'>€ " . $record["price"] . "</td>
				<td scope='row'>€ " . $record["total"] . "</td>
				<td scope='row'>" . $record1["amount"] . "</td>
				<td>
					<a href='./script/update_product.php?idproduct=" . $id . "'>
						<i class='fas fa-pen'></i>
					</a>
				</td>
				<td>
					<a href='./script/delete_product.php?idproduct=" . $id . "'>
						<i class='fas fa-times'></i>
					</a>
				</td>
			</tr>";
		}

	} else if ($userrole == 'Customer') {
		header("Refresh: 0; url=../index.php?content=dashboard");
	} else {
		header("Refresh: 0; url=../index.php?content=homepage");
	}
?>
<?php
	if ($userrole == 'Root') {
		echo '
        <hr class="content-row">
		<h1>Product Orders</h1>
        <hr class="content-row">
		<br>
		<div class="row">
			<div class="col"></div>
			<div class="col">
				<table class="table table-dark table-responsive" style="border:0;">
					<thead style="color:gold;">
						<tr>
							<th scope="col">Order</th>
							<th scope="col">Image</th>
							<th scope="col">Name</th>
							<th scope="col">Amount</th>
							<th scope="col">Price</th>
							<th scope="col">Total</th>
							<th scope="col">Stock</th>
							<th scope="col"></th>
							<th scope="col"></th>
						</tr>
					</thead>
					<tbody>
						' . $records . '
						<tr>
							<td scope="row">
								<a href="./script/create_product.php" style="font-size:30px;">
									<i class="fas fa-file-medical"></i>
								</a>
							</td>
							<td scope="row"></td>
							<td scope="row"></td>
							<td scope="row"></td>
							<td scope="row"></td>
							<td scope="row"></td>
							<td scope="row"></td>
							<td scope="row"></td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="col"></div>
		</div>
		';
	} else if ($userrole == 'Admin') {
		echo '
        <hr class="content-row">
		<h1>Product Orders</h1>
        <hr class="content-row">
		<br>
		<div class="col-auto">
			<table class="table table-dark table-responsive" style="border:0;">
				<thead style="color:gold;">
					<tr>
						<th scope="col">Order</th>
						<th scope="col">Image</th>
						<th scope="col">Name</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Price</th>
						<th scope="col">Total</th>
						<th scope="col">Stock</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
					</tr>
				</thead>
				<tbody>
					' . $records . '
                    <tr>
                        <td scope="row">
                            <a href="./script/create_product.php" style="font-size:30px;">
                                <i class="fas fa-file-medical"></i>
                            </a>
                        </td>
                        <td scope="row"></td>
                        <td scope="row"></td>
                        <td scope="row"></td>
                        <td scope="row"></td>
                        <td scope="row"></td>
                        <td scope="row"></td>
                        <td scope="row"></td>
                    </tr>
				</tbody>
			</table>
		</div>
		';
	} else {
		echo '';
	}
?>