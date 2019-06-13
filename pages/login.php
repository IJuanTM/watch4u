<hr class="content-row">
<h1 class="content-text">Login</h1>
<hr class="content-row">

<!-- Login form -->
<form class="login-form container-fluid" name="login-form" action="login-script.php" method="POST">

    <div class="row">
        <div class="col-2 col-md-3 col-lg-4"></div>
        <div class="col-8 col-md-6 col-lg-4">

            <!-- Email row -->
            <div class="form-row">

                <div class="form-group col-md-12">
                    <label class="form-text" for="inputEmail">Email:</label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                </div>

            </div>

            <!-- Password row -->
            <div class="form-row">

                <div class="form-group col-md-12">
                    <label class="form-text" for="inputPassword">Password:</label>
                    <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                </div>

            </div>

            <!-- Button row -->
            <div class="form-row">

                <div class="form-group col-md-3"></div>
                <div class="form-group col-md-6">
                    <button type="submit" class="btn form-btn btn-lg btn-block btn-dark">Login</button>
                </div>
                <div class="form-group col-md-3"></div>

            </div>

            <!-- Register link -->
            <div class="form-row">

                <div class="form-group col-md-3"></div>
                <div class="form-group col-md-6">
                    <h6 class="form-detail">Don't have an account? <a href="./index.php?content=register">Register</a> here!</h6>
                </div>
                <div class="form-group col-md-3"></div>

            </div>

        </div>
        <div class="col-2 col-md-3 col-lg-4"></div>
    </div>

</form>