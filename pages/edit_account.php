<hr class="content-row">
<h1>Edit Account</h1>
<hr class="content-row">

<!-- Account form -->
<form class="account-form container-fluid" name="account-form" action="./script/update.php" method="POST">

    <div class="row">
        <div class="col-1 col-md-2 col-lg-3"></div>
        <div class="col-10 col-md-8 col-lg-6">

            <!-- Name row -->
            <div class="form-row">

                <div class="form-group col-5">
                    <label class="form-text" for="inputFirstname">Firstname: <span class="required">*</span></label>
                    <input type="text" class="form-control" id="inputFirstname" placeholder="Firstname">
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
                </div>

            </div>

            <!-- Address row -->
            <div class="form-row">

                <div class="form-group col-12">
                    <label class="form-text" for="inputAddress">Address:</label>
                    <input type=text class="form-control" id="inputAddress" placeholder="Address">
                </div>

            </div>

            <!-- Postalcode row -->
            <div class="form-row">

                <div class="form-group col-4">
                    <label class="form-text" for="inputPostalcode">Postalcode:</label>
                    <input type="text" class="form-control" id="inputPostalCode" placeholder="Postalcode">
                </div>

                <div class="form-group col-8">
                    <label class="form-text" for="inputCity">City:</label>
                    <input type="text" class="form-control" id="inputCity" placeholder="City">
                </div>

            </div>

            <!-- Phone row -->
            <div class="form-row">

                <div class="form-group col-12">
                    <label class="form-text" for="inputPhone">Phone:</label>
                    <input type="tel" class="form-control" id="inputPhone" placeholder="Phone">
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

                <div class="form-group col-3"></div>
                <div class="form-group col-6">
                    <button type="submit" class="btn form-btn">Save Changes</button>
                </div>
                <div class="form-group col-3"></div>

            </div>

        </div>
        <div class="col-1 col-md-2 col-lg-3"></div>
    </div>

</form>