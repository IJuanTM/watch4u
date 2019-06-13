<hr class="content-row">
<h1 class="content-text">Register</h1>
<hr class="content-row">

<!-- Register form -->
<form class="register-form container-fluid" name="register-form" action="register-script.php" method="POST">

    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">

            <!-- Name row -->
            <div class="form-row">

                <div class="form-group col-md-5">
                    <label class="form-text" for="inputFirstname">Firstname: <span class="required">*</span></label>
                    <input type="text" class="form-control" id="inputFirstname" placeholder="Firstname">
                    <span class="form-detail">Please enter valid information, as this will also be used during the shipping of your bought product.</span>
                </div>

                <div class="form-group col-md-2">
                    <label class="form-text" for="inputInfix">Infix:</label>
                    <input type="text" class="form-control" id="inputInfix" placeholder="Infix">
                </div>

                <div class="form-group col-md-5">
                    <label class="form-text" for="inputLastname">Lastname: <span class="required">*</span></label>
                    <input type="text" class="form-control" id="inputLastname" placeholder="Lastname">
                </div>

            </div>

            <!-- Email row -->
            <div class="form-row">

                <div class="form-group col-md-12">
                    <label class="form-text" for="inputEmail">Email: <span class="required">*</span></label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                    <span class="form-detail">Use an accessible email, as you have to verify your account.</span>
                </div>

            </div>

            <!-- Password row -->
            <div class="form-row">

                <div class="form-group col-md-6">
                    <label class="form-text" for="inputPassword">Password: <span class="required">*</span></label>
                    <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                    <span class="form-detail">Your password has to contain atleast 8 characters, 1 number and an combination of capital and normal letters.</span>
                </div>

                <div class="form-group col-md-6">
                    <label class="form-text" for="inputCheckPassword">Check Password: <span class="required">*</span></label>
                    <input type="password" class="form-control" id="inputCheckPassword" placeholder="Password">
                    <span class="form-detail">Enter your password again to check if you did not make any typos.</span>
                </div>

            </div>

            <!-- Button row -->
            <div class="form-row">

                <div class="form-group col-md-3"></div>
                <div class="form-group col-md-6">
                    <button type="submit" class="btn form-btn btn-lg btn-block btn-dark">Register</button>
                </div>
                <div class="form-group col-md-3"></div>

            </div>

        </div>
        <div class="col-2"></div>
    </div>

</form>