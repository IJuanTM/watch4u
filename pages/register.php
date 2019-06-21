<hr class="content-row">
<h1>Register</h1>
<hr class="content-row">

<!-- Register form -->
<form class="register-form container-fluid" name="register-form" action="./script/register-script.php" method="POST">

    <div class="row">
        <div class="col-1 col-lg-2"></div>
        <div class="col-10 col-lg-8">

            <!-- Name row -->
            <div class="form-row">

                <div class="form-group col-5">
                    <label class="form-text" for="inputFirstname">Firstname: <span class="required">*</span></label>
                    <input type="text" class="form-control" id="inputFirstname" placeholder="Firstname">
                    <span class="form-detail">Please enter valid information, as this will also be used during the shipping.</span>
                </div>

                <div class="form-group col-2">
                    <label class="form-text" for="inputInfix">Infix:</label>
                    <input type="text" class="form-control" id="inputInfix" placeholder="Infix">
                </div>

                <div class="form-group col-5">
                    <label class="form-text" for="inputLastname">Lastname: <span class="required">*</span></label>
                    <input type="text" class="form-control" id="inputLastname" placeholder="Lastname">
                </div>

            </div>

            <!-- Email row -->
            <div class="form-row">

                <div class="form-group col-12">
                    <label class="form-text" for="inputEmail">Email: <span class="required">*</span></label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                    <span class="form-detail">Use an accessible email, as you have to verify your account.</span>
                </div>

            </div>

            <!-- Password row -->
            <div class="form-row">

                <div class="form-group col-6">
                    <label class="form-text" for="inputPassword">Password: <span class="required">*</span></label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="pass_log_id1" name="pass" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span toggle="#password-field" class="fa fa-fw fa-eye field_icon toggle-password"></span>
                            </div>
                        </div>
                    </div>
                    <span class="form-detail">Your password has to contain atleast 8 characters, 1 number and an combination of capital and normal letters.</span>
                </div>

                <div class="form-group col-6">
                    <label class="form-text" for="inputCheckPassword">Check Password: <span class="required">*</span></label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="pass_log_id2" name="pass" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span toggle="#password-field" class="fa fa-fw fa-eye field_icon toggle-password"></span>
                            </div>
                        </div>
                    </div>
                    <span class="form-detail">Enter your password again to check if you did not make any typos.</span>
                </div>

            </div>

            <!-- reCaptcha -->
            <div class="form-row">
                <div class="form-group col-12">
                    <div class="form-group">
                        <div class="g-recaptcha" data-sitekey="6LclZakUAAAAAN6muzjXibN2YsCB7YfutKGVGAgV"></div>
                    </div>
                </div>
            </div>

            <!-- Button row -->
            <div class="form-row">

                <div class="form-group col-2 col-xl-3"></div>
                <div class="form-group col-8 col-xl-6">
                    <button type="submit" class="btn form-btn">Register</button>
                </div>
                <div class="form-group col-2 col-xl-3"></div>

            </div>

        </div>
        <div class="col-1 col-lg-2"></div>
    </div>

</form>