<hr class="content-row">
<h1>Activate account</h1>
<hr class="content-row">
<p class=""></p>

<!-- Change password form -->
<form class="change_password-form container-fluid" name="change_password-form" action="./script/activate_user.php" method="POST">

    <div class="row">
		<div class="col-1 col-md-2 col-lg-3"></div>
		<div class="col-10 col-md-8 col-lg-6">

        <label style="color:white;" class="form-text" for="inputcode">A email has been send to <?php if (empty($_GET["email"])) {echo '<i class="fas fa-at"></i>';} else {echo $email = $_GET["email"];} ?>.</label>

            <!-- Code row -->
            <div class="form-row">

                <div class="form-group col-12">
                    <label class="form-text" for="inputcode">Code: <span class="required">*</span></label>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-fingerprint"></i></span>
						</div>
                    <input type="text" class="form-control" name="code" placeholder="Code example: 1234" value="<?php if (empty($_GET["code"])) { echo ''; } else { echo $code = $_GET["code"]; } ?>">
                    </div>
                    <span class="form-detail">Enter your code here.</span>
                </div>

            </div>

            <!-- Email Check row -->
            <div class="form-row">

                <div class="form-group col-12">
                    <label class="form-text" for="inputcode">Check Email: <span class="required">*</span></label>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-at"></i></span>
						</div>
                    <input type="email" class="form-control" name="email" placeholder="Email check to activate" value="<?php if (empty($_GET["email"])) { echo ''; } else { echo $email = $_GET["email"]; } ?>">
                    </div>
                    <span class="form-detail">Enter your email here.</span>
                </div>

            </div>

            <!-- Button row -->
            <div class="form-row">

                <div class="form-group col-3">
                </div>
                <div class="form-group col-6">
                    <button type="submit" class="btn form-btn btn-lg btn-block btn-dark">Activate email</button>
                </div>
                <div class="form-group col-3">
                </div>

            </div>

        </div>
        <div class="col-1 col-md-2 col-lg-3"></div>
    </div>

</form>