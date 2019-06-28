<hr class="content-row">
<h1>Login</h1>
<hr class="content-row">

<!-- Login form -->
<form class="login-form container-fluid" name="login-form" action="./script/login_user.php" method="POST">

    <div class="row">
        <div class="col-1 col-md-2 col-lg-3"></div>
        <div class="col-10 col-md-8 col-lg-6">

            <!-- Email row -->
            <div class="form-row">

                <div class="form-group col-12">
                    <label class="form-text" for="inputEmail">Email:</label>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-at"></i></span>
						</div>
                        <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                </div>

            </div>

            <!-- Password row -->
            <div class="form-row">

                <div class="form-group col-12">
                    <label class="form-text" for="inputPassword">Password:</label>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-lock"></i></span>
						</div>
                        <input type="password" class="form-control" id="pass_log_id2" name="password" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span toggle="#password-field" class="fa fa-fw fa-eye field_icon toggle-password"></span>
                            </div>
                        </div>

                    </div>
                    <span class="form-detail">Forgot your password? <a href="./index.php?content=forgot_password">Click here.</a></span>
                </div>

            </div>

            <!-- Button row -->
            <div class="form-row">

                <div class="form-group col-2 col-xl-3"></div>
                <div class="form-group col-8 col-xl-6">
                    <button type="submit" class="btn form-btn">Login</button>
                </div>
                <div class="form-group col-2 col-xl-6"></div>

            </div>

            <!-- Register link -->
            <div class="form-row">

                <div class="form-group col-2 col-md-3"></div>
                <div class="form-group col-8 col-md-6">
                    <span class="form-detail">Don't have an account? <a href="./index.php?content=register">Register</a> here!</span>
                </div>
                <div class="form-group col-2 col-md-3"></div>

            </div>

        </div>
        <div class="col-1 col-md-2 col-lg-3"></div>
    </div>

</form>