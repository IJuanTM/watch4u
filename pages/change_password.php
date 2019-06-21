<hr class="content-row">
<h1>Change Password</h1>
<hr class="content-row">

<!-- Change password form -->
<form class="change_password-form container-fluid" name="change_password-form" action="./script/change_password.php" method="POST">

    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">

            <!-- Old password row -->
            <div class="form-row">

                <div class="form-group col-md-6">
                    <label class="form-text" for="inputPassword">Old Password: <span class="required">*</span></label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="pass_log_id1" name="pass" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span toggle="#password-field" class="fa fa-fw fa-eye field_icon toggle-password"></span>
                            </div>
                        </div>
                    </div>
                    <span class="form-detail">Enter your old password here.</span>
                </div>

            </div>

            <!-- New password row -->
            <div class="form-row">

                <div class="form-group col-md-6">
                    <label class="form-text" for="inputPassword">New Password: <span class="required">*</span></label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="pass_log_id2" name="pass" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span toggle="#password-field" class="fa fa-fw fa-eye field_icon toggle-password"></span>
                            </div>
                        </div>
                    </div>
                    <span class="form-detail">Your password has to contain atleast 8 characters, 1 number and an combination of capital and normal letters.</span>
                </div>

                <div class="form-group col-md-6">
                    <label class="form-text" for="inputCheckPassword">Check New Password: <span class="required">*</span></label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="pass_log_id3" name="pass" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span toggle="#password-field" class="fa fa-fw fa-eye field_icon toggle-password"></span>
                            </div>
                        </div>
                    </div>
                    <span class="form-detail">Enter your password again to check if you did not make any typos.</span>
                </div>

            </div>

            <!-- Button row -->
            <div class="form-row">

                <div class="form-group col-md-3"></div>
                <div class="form-group col-md-6">
                    <button type="submit" class="btn form-btn btn-lg btn-block btn-dark">Change Password</button>
                </div>
                <div class="form-group col-md-3"></div>

            </div>

        </div>
        <div class="col-2"></div>
    </div>

</form>