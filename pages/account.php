<?php

	if ($userrole == 'Root'){

		// Root inhoud
		echo '
			<hr class="content-row">
			<h1>Welcome Root User</h1>
			<hr class="content-row">
		';
	
	} else if ($userrole == 'Admin'){
		
		// Admin inhoud
		echo '
			<hr class="content-row">
			<h1>Welcome Admin User</h1>
			<hr class="content-row">
		';

	} else if ($userrole == 'Customer'){
		
		// Klant inhoud
		echo '
			<hr class="content-row">
			<h1>Welcome Customer User</h1>
			<hr class="content-row">
		';
	}
?>

<!-- Account form -->
<form class="account-form container-fluid"id="input" name="account-form" action="./index.php?content=edit_account" method="POST">
	<span style="display:none;">
		<input type="text" class="form-control" id="inputIduser" name="iduser" placeholder="ID User" value="<?php echo ucwords($iduser); ?>" disabled>
		<input type="text" class="form-control" id="inputFirstname" name="firstname" placeholder="Firstname" value="<?php echo ucwords($firstname); ?>" disabled>
		<input type="text" class="form-control" id="inputInfix" name="infix" placeholder="Infix" value="<?php echo strtolower($infix); ?>" disabled>
		<input type="text" class="form-control"id="inputLastname" name="lastname" placeholder="Lastname" value="<?php echo ucwords($lastname); ?>" disabled>
		<input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email" value="<?php echo strtolower($email); ?>" disabled>
		<input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password" value="<?php echo $password; ?>" disabled>
		<input type="tel" class="form-control" id="inputPhone" name="phone" placeholder="Phone" value="<?php echo ucwords($phone); ?>" disabled>
		<input type="text" class="form-control" id="inputAddress" name="address" placeholder="Address" value="<?php echo ucwords($address); ?>" disabled>
		<input type="text" class="form-control" id="inputPostalcode" name="postalCode" placeholder="Postalcode" value="<?php echo $postalcode; ?>" disabled>
		<input type="text" class="form-control" id="inputCity"id="input" name="city" placeholder="City" value="<?php echo ucwords($city); ?>" disabled>
		<input type="text" class="form-control" id="inputDate" name="date" placeholder="Date" value="<?php echo $date; ?>" disabled>
		<input type="text" class="form-control" id="inputCode" name="code" placeholder="Code" value="<?php echo $code; ?>" disabled>
	</span>

	<div class="row">
		<div class="col-1 col-md-2 col-lg-3"></div>
		<div class="col-10 col-md-8 col-lg-6">

		<table style="color:gold; border: 0px;" class="table table-striped table-dark">
			<tr><th>Register date: </th><td><?php echo $date; ?></td></tr>
			<tr><th>ID: </th><td><?php echo $iduser; ?></td></tr>
			<tr><th>Firstname: </th><td><?php echo $firstname; ?></td></tr>
			<tr><th>Infix: </th><td><?php echo $infix; ?></td></tr>
			<tr><th>Lastname: </th><td><?php echo $lastname; ?></td></tr>
			<tr><th>E-mail: </th><td><?php echo $email; ?></td></tr>
			<tr><th>Phone number: </th><td><?php echo $phone; ?></td></tr>
			<tr><th>Address:</th><td><?php echo $address; ?></td></tr>
			<tr><th>Postalcode: </th><td><?php echo $postalcode; ?></td></tr>
			<tr><th>City: </th><td><?php echo $city; ?></td></tr>
		</table>

			<!-- Button row -->
			<div class="form-row">

				<div class="form-group col-4"></div>

				<div class="form-group col-4">
					<button type="submit" class="btn form-btn">Edit Account</button>
				</div>

				<div class="form-group col-4"></div>

			</div>

		</div>
		<div class="col-1 col-md-2 col-lg-3"></div>
	</div>

</form>