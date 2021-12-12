<div class="container">
    <?php include_once 'nav-header.php';?>
</div>

<div id="new_user_modal">
    <div class="heading">Are you a new user to this site?</div>
    <div class="bottom-content">
        <button id="new_user_modal_yes" class="btn-large waves-effect waves-light teal darken-4" type="submit" onclick="newUserQuery()"> Yes </button>
        <button id="new_user_modal_no" class="btn-large waves-effect waves-light red darken-4" type="submit" onclick="newUserQuery()"> No </button>
    </div>
</div>


<!-------------------- Main Content ------------------>
    <div class="heading displayNone">Enter Your Details to Verify</div>
    <div class="form-container displayNone">
        <form id="check_user_details">
            <div class="container">
                <div class="row">
                    <div class="col s12">
                        <h5 id="test"></h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <div class="input-field">
                            <input type="text" id="lname" name="lname" >
                            <label for="lname" class="white-text">Last Name</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12">
                        <div class="input-field">
                            <input type="text" id="ssn" name="ssn" >
                            <label for="ssn" class="white-text">Social Security Number</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12">
                        <div class="input-field">
                            <input type="text" id="dob" name="dob" class="datepicker">
                            <label for="dob" class="grey-text text-lighten-2">Date of Birth</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col s6 l12">
                        <button  class="btn-large waves-effect waves-light teal darken-4" type="submit" onclick="checkUserDetails()"> Submit </button>
                    </div>
                </div>

            </div>

        </form>
    </div>
    <div class="bottom-content displayNone">Are you Admin? <p id="login-changer-to-admin" class="login-changer" onclick="toAdmin()">Login Here</p></div>

<?php include_once "footer-desclaimer.php";?>