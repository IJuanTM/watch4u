<hr class="content-row">
<h1>Activate account</h1>
<hr class="content-row">

<!-- Change password form -->
<form class="change_password-form container-fluid" name="change_password-form" action="./script/activate.php" method="POST">

    <div class="row">
        <div class="col-2 col-md-3 col-lg-4"></div>
        <div class="col-8 col-md-6 col-lg-4">

            <!-- Code row -->
            <div class="form-row">

                <div class="form-group col-12">
                    <label class="form-text" for="inputcode">Code: <span class="required">*</span></label>
                    <input type="text" class="form-control" name="code" placeholder="Code example: 1234-5678-9012">
                    <span class="form-detail">Enter your code here.</span>
                </div>

            </div>

            <!-- Email Check row -->
            <div class="form-row">

                <div class="form-group col-12">
                    <label class="form-text" for="inputcode">Check Email: <span class="required">*</span></label>
                    <input type="email" class="form-control" name="email" placeholder="Email check to activate">
                    <span class="form-detail">Enter your email here.</span>
                </div>

            </div>

            <!-- Button row -->
            <div class="form-row">

                <div class="form-group col-3">
                </div>
                <div class="form-group col-6">
                    <button type="submit" class="btn form-btn btn-lg btn-block btn-dark">Activate email</button>
                </div>
                <div class="form-group col-3">
                </div>

            </div>

        </div>
        <div class="col-2 col-md-3 col-lg-4"></div>
    </div>

</form>