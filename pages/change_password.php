<hr class="content-row">
<h1>Change Password</h1>
<hr class="content-row">

<!-- Change password form -->
<form class="change_password-form container-fluid" name="change_password-form" action="./script/change_password.php" method="POST">

    <div class="row">
        <div class="col-1 col-md-2 col-lg-3">
            <span style="display:none;"><input type="number" class="form-control" name="iduser" placeholder="IDuser" value="<?php echo $iduser; ?>" /></span>
        </div>
        <div class="col-10 col-md-8 col-lg-6">

            <!-- Old password row -->
            <div class="form-row">

                <div class="form-group col-12 col-md-6">
                    <label class="form-text" for="inputPassword">Old Password: <span class="required">*</span></label>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-lock"></i></span>
						</div>
                        <input type="password" class="form-control" id="pass_log_id1" name="password0" placeholder="Password">

                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span toggle="#password-field" class="fa fa-fw fa-eye field_icon toggle-password"></span>
                            </div>
                        </div>

                    </div>
                    <span class="col-12 form-detail" style="margin-left:-14px !important;">Enter your old password here.</span>
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
                        <input type="password" class="form-control" id="pass_log_id2" name="password1" placeholder="Password">

                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span toggle="#password-field" class="fa fa-fw fa-eye field_icon toggle-password"></span>
                            </div>
                        </div>

                    </div>
                    <span class="col-12 form-detail" style="margin-left:-14px !important;">Your password has to contain atleast 8 characters, 1 number and an combination of capital and normal letters.</span>
                </div>

                <div class="form-group col-12 col-md-6">
                    <label class="form-text" for="inputCheckPassword">Check New Password: <span class="required">*</span></label>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-lock"></i></span>
						</div>
                        <input type="password" class="form-control" id="pass_log_id3" name="password2" placeholder="Password">

                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span toggle="#password-field" class="fa fa-fw fa-eye field_icon toggle-password"></span>
                            </div>
                        </div>

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