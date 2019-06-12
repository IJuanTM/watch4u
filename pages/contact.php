<hr class="content-row">
<h1 class="content-text">Contact Us</h1>
<hr class="content-row">

<!-- Contact form -->
<form class="contact-form container-fluid" name="contact-form" action="contact-script.php" method="POST">

    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">

            <!-- Email row -->
            <div class="form-row">

                <div class="form-group col-md-12">
                    <label class="form-text" for="inputEmail">Email:</label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                    <h6 class="form-detail">This is the mail on which you will get a response to your message.</h6>
                </div>

            </div>

            <!-- Message row -->
            <div class="form-row">

                <div class="form-group col-md-12">
                    <label class="form-text" for="inputMessage">Message:</label>
                    <textarea type="text" class="form-control md-textarea" rows="5" id="inputMessage" placeholder="Message"></textarea>
                    <h6 class="form-detail">It usually takes up to 2 days for an employee to respond to your message. Please be patient.</h6>
                </div>

            </div>

            <!-- Button row -->
            <div class="form-row">

                <div class="form-group col-md-3"></div>
                <div class="form-group col-md-6">
                    <button type="submit" class="btn form-btn btn-lg btn-block btn-dark">Send message</button>
                </div>
                <div class="form-group col-md-3"></div>

            </div>

        </div>
        <div class="col-4"></div>
    </div>

</form>