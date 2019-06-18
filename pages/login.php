<hr class="content-row">
<h1>Login</h1>
<hr class="content-row">

<!-- Login form -->
<form class="login-form container-fluid" name="login-form" action="../script/login-script.php" method="POST">

    <div class="row">
        <div class="col-2 col-md-3 col-lg-4"></div>
        <div class="col-8 col-md-6 col-lg-4">

            <!-- Email row -->
            <div class="form-row">

                <div class="form-group col-12">
                    <label class="form-text" for="inputEmail">Email:</label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                </div>

            </div>

            <!-- Password row -->
            <div class="form-row">

                <div class="form-group col-12">
                    <label class="form-text" for="inputPassword">Password:</label>
                    <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                    <span class="form-detail">Forgot your password? <a href="./index.php?content=reset_password">Click here.</a></span>
                </div>

            </div>

            <!-- Button row -->
            <div class="form-row">

                <div class="form-group col-3"></div>
                <div class="form-group col-6">
                    <button type="submit" class="btn form-btn">Login</button>
                </div>
                <div class="form-group col-3"></div>

            </div>

            <!-- Register link -->
            <div class="form-row">

                <div class="form-group col-3"></div>
                <div class="form-group col-6">
                    <span class="form-detail">Don't have an account? <a href="./index.php?content=register">Register</a> here!</span>
                </div>
                <div class="form-group col-3"></div>

            </div>

        </div>
        <div class="col-2 col-md-3 col-lg-4"></div>
    </div>

</form>