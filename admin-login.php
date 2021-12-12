    <div class="heading">Please Enter Your Login Details</div>
    <div class="container">
        <?php include 'nav-header.php';?>
    </div>
    <div class="form-container">
        <form id="adminLogin">
            <div class="container">
                <div class="row">
                    <div class="col s12">
                        <h5 id="test"></h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <div class="input-field">
                            <input type="text" id="userid" name="userid" >
                            <label for="userid" class="white-text">Username</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12">
                        <div class="input-field">
                            <input type="password" id="userpass" name="userpass" >
                            <label for="userpass" class="white-text">Password</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s6 l12">
                        <button id="adminLoginSubmit"  class="btn-large waves-effect waves-light teal darken-4" type="submit" onclick="adminlogin()"> Login </button>
                    </div>
                </div>
                <div class="bottom-content">Not an Admin? <p id="login-changer-to-user" class="login-changer" onclick="toUser()">Check Your Details</p></div>
            </div>

            <?php include_once "footer-desclaimer.php";?>



        </form>
    </div>

