<hr class="content-row">
<h1>Change Password</h1>
<hr class="content-row">

<!-- Change password form -->
<form class="change_password-form container-fluid" name="change_password-form" action="./script/change_password.php" method="POST">

    <div class="row">
        <div class="col-2">
            <span style="display:none;"><input type="number" class="form-control" name="iduser" placeholder="IDuser" value="<?php echo $iduser; ?>" /></span>
        </div>
        <div class="col-8">

            <!-- Old password row -->
            <div class="form-row">

                <div class="form-group col-6">
                    <label class="form-text" for="inputPassword">Old Password: <span class="required">*</span></label>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-unlock-alt"></i></span>
						</div>
                        <input type="password" class="form-control" name="password" placeholder="Password" />
                        <small class="col-12 form-detail" style="margin-left:-14px !important;">Enter your old password here.</small>
                    </div>
                </div>

            </div>

            <!-- New password row -->
            <div class="form-row">

                <div class="form-group col-6">
                    <label class="form-text" for="inputPassword">New Password: <span class="required">*</span></label>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-lock"></i></span>
						</div>
                        <input type="password" class="form-control" name="password1" placeholder="Password" />
                        <small class="col-12 form-detail" style="margin-left:-14px !important;">Your password has to contain atleast 8 characters, 1 number and an combination of capital and normal letters.</small>
                    </div>
                </div>

                <div class="form-group col-6">
                    <label class="form-text" for="inputCheckPassword">Check New Password: <span class="required">*</span></label>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-lock"></i></span>
						</div>
                        <input type="password" class="form-control" name="password2" placeholder="Password" />
                        <small class="col-12 form-detail" style="margin-left:-14px !important;">Enter your password again to check if you did not make any typos.</small>
                    </div>
                </div>

            </div>

            <!-- Button row -->
            <div class="form-row">

                <div class="form-group col-md-3"></div>
                <div class="form-group col-md-6">
                    <button type="submit" class="btn form-btn btn-lg btn-block btn-dark">Change Password</button>
                </div>
                <div class="form-group col-md-3"></div>

            </div>

        </div>
        <div class="col-2"></div>
    </div>

</form>