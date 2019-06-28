<hr class="content-row">
<h1>Edit Account</h1>
<hr class="content-row">

<!-- Account form -->
<form class="account-form container-fluid"id="input" name="account-form" action="./index.php?content=edit_account" method="POST">

	<div class="row">
		<div class="col-1 col-md-2 col-lg-3"></div>
		<div class="col-10 col-md-8 col-lg-6">

			<!-- Name row -->
			<div class="form-row">

				<div class="form-group col-5">
					<label class="form-text" for="inputFirstname">Firstname:</label>
					<input type="text" class="form-control" id="inputFirstname" name="Firstname" placeholder="Firstname" value="<?php echo ucwords($firstname); ?>">
				</div>

				<div class="form-group col-2">
					<label class="form-text" for="inputInfix">Infix:</label>
					<input type="text" class="form-control" id="inputInfix" name="Infix" placeholder="Infix" value="<?php echo strtolower($infix); ?>">
				</div>

				<div class="form-group col-5">
					<label class="form-text" for="inputLastname">Lastname:</label>
					<input type="text" class="form-control"id="inputLastname" name="Lastname" placeholder="Lastname" value="<?php echo ucwords($lastname); ?>">
				</div>

			</div>

			<!-- Email row -->
			<div class="form-row">

				<div class="form-group col-12">
					<label class="form-text" for="inputEmail">Email:</label>
					<input type="email" class="form-control" id="inputEmail" name="Email" placeholder="Email" value="<?php echo strtolower($email); ?>">
				</div>

			</div>

			<!-- Address row -->
			<div class="form-row">

				<div class="form-group col-12">
					<label class="form-text" for="inputAddress">Address:</label>
					<input type="text" class="form-control" id="inputAddress" name="Address" placeholder="Address" value="<?php echo ucwords($address); ?>">
				</div>

			</div>

			<!-- Postalcode row -->
			<div class="form-row">

				<div class="form-group col-4">
					<label class="form-text" for="inputPostalcode">Postalcode:</label>
					<input type="text" class="form-control" id="inputPostalcode" name="PostalCode" placeholder="Postalcode" value="<?php echo $postalcode; ?>">
				</div>

				<div class="form-group col-8">
					<label class="form-text" for="inputCity">City:</label>
					<input type="text" class="form-control" id="inputCity"id="input" name="city" placeholder="City" value="<?php echo ucwords($city); ?>">
				</div>

			</div>

			<!-- Phone row -->
			<div class="form-row">

				<div class="form-group col-12">
					<label class="form-text" for="inputPhone">Phone:</label>
					<input type="tel" class="form-control" id="inputPhone" name="phone" placeholder="Phone" value="<?php echo $phone; ?>">
				</div>

			</div>

			<!-- Button row -->
			<div class="form-row">

				<div class="form-group col-4"></div>

				<div class="form-group col-4">
					<button type="submit" class="btn form-btn">Save changes</button>
				</div>

				<div class="form-group col-4"></div>

			</div>

		</div>
		<div class="col-1 col-md-2 col-lg-3"></div>
	</div>

</form>