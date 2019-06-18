<hr class="content-row">
<h1>Account</h1>
<hr class="content-row">

<!-- Account form -->
<form class="account-form container-fluid" name="account-form" action="../script/account-script.php" method="POST">

    <div class="row">
        <div class="col-1 col-md-2 col-lg-3"></div>
        <div class="col-10 col-md-8 col-lg-6">

            <!-- Name row -->
            <div class="form-row">

                <div class="form-group col-5">
                    <label class="form-text" for="inputFirstname">Firstname:</label>
                    <input type="text" class="form-control" id="inputFirstname" placeholder="Firstname">
                </div>

                <div class="form-group col-2">
                    <label class="form-text" for="inputInfix">Infix:</label>
                    <input type="text" class="form-control" id="inputInfix" placeholder="Infix">
                </div>

                <div class="form-group col-5">
                    <label class="form-text" for="inputLastname">Lastname:</label>
                    <input type="text" class="form-control" id="inputLastname" placeholder="Lastname">
                </div>

            </div>

            <!-- Email row -->
            <div class="form-row">

                <div class="form-group col-12">
                    <label class="form-text" for="inputEmail">Email:</label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
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

        </div>
        <div class="col-1 col-md-2 col-lg-3"></div>
    </div>

</form>