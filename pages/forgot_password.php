<hr class="content-row">
<h1>Forgot Password</h1>
<hr class="content-row">

<!-- Change password form -->
<form class="change_password-form container-fluid" name="forgot_password-form" action="./script/change_password.php" method="POST">

    <div class="row">
		<div class="col-1 col-md-2 col-lg-3">
            <span style="display:none;"><input type="number" class="form-control" name="iduser" placeholder="IDuser" value="<?php echo $iduser; ?>" /></span>
        </div>
		<div class="col-10 col-md-8 col-lg-6">

            <!-- Old password row -->
            <div class="form-row">

                <div class="form-group col-12">
                    <label class="form-text" for="inputEmail">E-mail: <span class="required">*</span></label>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-at"></i></span>
						</div>
                        <input type="email" class="form-control" name="email" placeholder="E-mail" />
                    </div>
                    <span class="col-12 form-detail" style="margin-left:-14px !important;">Enter your known email here.</span>
                </div>

            </div>

            <!-- Button row -->
            <div class="form-row">

                <div class="form-group col-2 col-md-3"></div>
                <div class="form-group col-8 col-md-6">
                    <button type="submit" class="btn form-btn btn-lg btn-block btn-dark">Send email</button>
                </div>
                <div class="form-group col-2 col-md-3"></div>

            </div>

        </div>
        <div class="col-1 col-md-2 col-lg-3"></div>
    </div>

</form>