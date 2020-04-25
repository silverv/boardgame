<?php
include('partial/header.php');
?>
    <form>
            <fieldset>
                <legend>Registration</legend>
                <div class="form-group">
                        <label class="col-form-label" for="name">Default input</label>
                        <input type="text" class="form-control" placeholder="Your name" id="name">
                        <small id="nameHelp" class="form-text text-muted">Enter the name that will be displayed to all other players.</small>
                </div>
                <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter your email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password">
                        <small id="passwordHelp" class="form-text text-muted">Must be at least 16 characters long, of which at least 1 upper case,<br>
                            1 lower case, 1 special character, and 1 digit.</small>
                </div>
                <div class="form-group">
                        <label for="passwordRepeat">Password</label>
                        <input type="password" class="form-control" id="passwordRepeat" placeholder="Repeat your password">
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </fieldset>
    </form>
<?php
include('partial/footer.php');
?>