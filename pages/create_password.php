<hr class="content-row">
<h1>Create New Password</h1>
<hr class="content-row">

<!-- Create password form -->
<form autocomplete="off" class="create_password-form container-fluid" name="create_password-form" action="./script/create_password.php" method="POST">

    <div class="row">
        <div class="col-1 col-md-2 col-lg-3"></div>
        <div class="col-10 col-md-8 col-lg-6">

            <!-- Code row -->
            <div class="form-row">

                <div class="form-group col-12">
                    <label class="form-text" for="inputcode">Code: <span class="required">*</span></label>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-fingerprint"></i></span>
						</div>
                    <input type="number" class="form-control" autocomplete="off" name="code" placeholder="Code example: 1234" value="<?php if (empty($_GET["code"])) { echo ''; } else { echo $code = $_GET["code"]; } ?>">
                    </div>
                    <span class="form-detail">Enter your code here.</span>
                </div>

            </div>

            <!-- New password row -->
            <div class="form-row">

                <div class="form-group col-12 col-md-6">
                    <label class="form-text" for="inputPassword">New Password: <span class="required">*</span></label>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-lock"></i></span>
						</div>
                        <input type="password" class="form-control" autocomplete="off" name="password1" placeholder="Password" />
                    </div>
                    <span class="col-12 form-detail" style="margin-left:-14px !important;">Your password has to contain atleast 8 characters, 1 number and an combination of capital and normal letters.</span>
                </div>

                <div class="form-group col-12 col-md-6">
                    <label class="form-text" for="inputCheckPassword">Check New Password: <span class="required">*</span></label>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-lock"></i></span>
						</div>
                        <input type="password" class="form-control" autocomplete="off" name="password2" placeholder="Password" />
                    </div>
                    <span class="col-12 form-detail" style="margin-left:-14px !important;">Enter your password again to check if you did not make any typos.</span>
                </div>

            </div>

            <!-- Button row -->
            <div class="form-row">

                <div class="form-group col-2 col-md-3"></div>
                <div class="form-group col-8 col-md-6">
                    <button type="submit" class="btn form-btn btn-lg btn-block btn-dark">Change Password</button>
                </div>
                <div class="form-group col-2 col-md-3"></div>

            </div>

        </div>
        <div class="col-1 col-md-2 col-lg-3"></div>
    </div>

</form>