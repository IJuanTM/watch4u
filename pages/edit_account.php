<hr class="content-row">
<h1>Edit Account</h1>
<hr class="content-row">

<!-- Account form -->
<form class="account-form container-fluid" id="input" name="account-form" action="./script/edit_user.php" method="POST">
	<span style="display:none;">
		<input type="number" class="form-control" id="inputIDuser" name="iduser" placeholder="IDuser" value="<?php echo $iduser; ?>">
		<input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email" value="<?php echo $email; ?>">
	</span>

	<div class="row">
		<div class="col-1 col-md-2 col-lg-3"></div>
		<div class="col-10 col-md-8 col-lg-6">

			<!-- Name row -->
			<div class="form-row">

				<div class="form-group col-5">
					<label class="form-text" for="inputFirstname">Firstname:</label>
					<input type="text" class="form-control" id="inputFirstname" name="firstname" placeholder="Firstname" value="<?php echo ucwords($firstname); ?>">
				</div>

				<div class="form-group col-2">
					<label class="form-text" for="inputInfix">Infix:</label>
					<input type="text" class="form-control" id="inputInfix" name="infix" placeholder="Infix" value="<?php echo strtolower($infix); ?>">
				</div>

				<div class="form-group col-5">
					<label class="form-text" for="inputLastname">Lastname:</label>
					<input type="text" class="form-control"id="inputLastname" name="lastname" placeholder="Lastname" value="<?php echo ucwords($lastname); ?>">
				</div>

			</div>

			<!-- Address row -->
			<div class="form-row">

				<div class="form-group col-12">
					<label class="form-text" for="inputAddress">Address:</label>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-road"></i></span>
						</div>
						<input type="text" class="form-control" id="inputAddress" name="address" placeholder="Address" value="<?php echo ucwords($address); ?>">
					</div>
				</div>

			</div>

			<!-- Postalcode row -->
			<div class="form-row">

				<div class="form-group col-4">
					<label class="form-text" for="inputPostalcode">Postalcode:</label>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text" id="inputGroupPrepend"><i class="fab fa-readme"></i></span>
						</div>
						<input type="text" class="form-control" id="inputPostalcode" name="postalcode" placeholder="Postalcode" value="<?php echo $postalcode; ?>">
					</div>
				</div>

				<div class="form-group col-8">
					<label class="form-text" for="inputCity">City:</label>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-city"></i></span>
						</div>
						<input type="text" class="form-control" id="inputCity"id="input" name="city" placeholder="City" value="<?php echo ucwords($city); ?>">
					</div>
				</div>

			</div>

			<!-- Phone row -->
			<div class="form-row">

				<div class="form-group col-12">
					<label class="form-text" for="inputPhone">Phone:</label>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-phone-alt"></i></span>
						</div>
						<input type="tel" class="form-control" id="inputPhone" name="phone" placeholder="Phone" value="<?php echo $phone; ?>">
					</div>
				</div>

			</div>

			<?php
			if ($userrole == 'Root') {
				echo '
					<!-- Userrole row -->
					<div class="form-row">

						<div class="form-group col-12">
							<label class="form-text" for="inputUserrole">Userrole:</label>
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-user-lock"></i></span>
								</div>
								<select type="text" class="form-control" id="inputUserrole" name="userrole" placeholder="Userrole">
									<option value='.$userrole.'>Behoud huidige: '.$userrole.'</option>
									<option value="Customer">Customer</option>
									<option value="Admin">Admin</option>
									<option value="Root">Root</option>
								</select>
							</div>
						</div>

					</div>
				';
			}
			?>
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