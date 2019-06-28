<hr class="content-row">
<h1>Dashboard</h1>
<hr class="content-row">

<div class="card-row db-bg">

	<!-- Order card -->
	<div class="card bg-dark card-dashboard">
		<h5 class="card-header">Your orders</h5>
		<div class="card-body">
			<div class="row">

				<div class="card-icon-row col-3">
					<i class="card-icon-sm fas fa-receipt"></i>
				</div>

				<div class="card-content col-9">

					<div class="row">
						<h6 class="card-text">View your current and past orders here.</h6>
					</div>

					<div class="card-btn-row row">
						<a href="./index.php?content=orders" class="btn btn-block card-btn">Go to order</a>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- Account card -->
	<div class="card bg-dark card-dashboard">
		<h5 class="card-header">Your account information</h5>
		<div class="card-body">
			<div class="row">

				<div class="card-icon-row col-3">
					<i class="card-icon fas fa-user"></i>
				</div>

				<div class="card-content col-9">

					<div class="row">
						<h6 class="card-text">View your account page here.</h6>
					</div>

					<div class="card-btn-row row">
						<a href="./index.php?content=account" class="btn btn-block card-btn">Go to account</a>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- Change password card -->
	<div class="card bg-dark card-dashboard">
		<h5 class="card-header">Change your password</h5>
		<div class="card-body">
			<div class="row">

				<div class="card-icon-row col-3">
					<i class="card-icon fas fa-unlock"></i>
				</div>

				<div class="card-content col-9">

					<div class="row">
						<h6 class="card-text">Change your password here.</h6>
					</div>

					<div class="card-btn-row row">
						<a href="./index.php?content=change_password" class="btn btn-block card-btn">Change password</a>
					</div>

				</div>
			</div>
		</div>
	</div>

	<?php

	if ($userrole == 'Admin') {

		// Admin inhoud
		echo '
		<!-- Overview card -->
		<div class="card bg-dark card-dashboard">
			<h5 class="card-header">View stock and sellings.</h5>
			<div class="card-body">
				<div class="row">
	
					<div class="card-icon-row col-3">
						<i class="card-icon-md fas fa-clipboard-list"></i>
					</div>
	
					<div class="card-content col-9">
	
						<div class="row">
							<h6 class="card-text">An overview of the websites stock and sellings.</h6>
						</div>
	
						<div class="card-btn-row row">
							<a href="./index.php?content=overview" class="btn btn-block card-btn">Overview of webshop</a>
						</div>
	
					</div>
				</div>
			</div>
		</div>
		';
	} else if ($userrole == 'Root') {

		// Klant inhoud
		echo '

		<!-- Overview card -->
		<div class="card bg-dark card-dashboard">
			<h5 class="card-header">View stock and sellings.</h5>
			<div class="card-body">
				<div class="row">
	
					<div class="card-icon-row col-3">
						<i class="card-icon-md fas fa-clipboard-list"></i>
					</div>
	
					<div class="card-content col-9">
	
						<div class="row">
							<h6 class="card-text">An overview of the websites stock and sellings.</h6>
						</div>
	
						<div class="card-btn-row row">
							<a href="./index.php?content=overview" class="btn btn-block card-btn">Overview of webshop</a>
						</div>
	
					</div>
				</div>
			</div>
		</div>

		<!-- Database card -->
		<div class="card bg-dark card-dashboard">
			<h5 class="card-header">Go to database</h5>
			<div class="card-body">
				<div class="row">
	
					<div class="card-icon-row col-3">
						<i class="card-icon fas fa-database"></i>
					</div>
	
					<div class="card-content col-9">
	
						<div class="row">
							<h6 class="card-text">Go to the websites database page.</h6>
						</div>
	
						<div class="card-btn-row row">
							<a href="https://web0116.zxcs.nl/phpmyadmin/db_structure.php?server=1&db=u37477p32749_watch4u" class="btn btn-block card-btn">View database</a>
						</div>
	
					</div>
				</div>
			</div>
		</div>
		';
	}
	?>

</div>

<hr class="content-row">