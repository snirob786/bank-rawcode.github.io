<div class="form-container">
    <p id="new_user_text"></p>
    <form id="submitNewUser">
        <!---------- Admin Form Fields ----------------->
        <div class="row">

            <div class="col s12 l3"></div>
            <div class="col s12 l6">
                <div class="input-field">
                    <input type="password" id="cpass" name="cpass">
                    <label for="cpass" class="white-text">Current User Password<i class="tiny material-icons red-text text-lighten-1 lp-5">star_rate</i></label>
                </div>
            </div>
            <div class="col s12 l3"></div>
        </div>

        <div class="row">
            <div class="col s12 l3"></div>
            <div class="col s12 l6">
                <div class="input-field">
                    <input type="password" id="newpass" name="newpass">
                    <label for="newpass" class="white-text">New User Password<i class="tiny material-icons red-text text-lighten-1 lp-5">star_rate</i></label>
                </div>
            </div>
            <div class="col s12 l3"></div>
        </div>

        <div class="row">
            <div class="col s12 l3"></div>
            <div class="col s12 l6">
                <div class="input-field">
                    <input type="password" id="conpass" name="conpass">
                    <label for="conpass" class="white-text">New User Confirm Password<i class="tiny material-icons red-text text-lighten-1 lp-5">star_rate</i></label>
                </div>
            </div>
            <div class="col s12 l3"></div>
        </div>


        <div class="row">
            <div class="col s6 l12">
                <button  class="btn-large waves-effect waves-light teal darken-4" type="submit" onclick="change_password()"> Change Password </button>
            </div>
        </div>
    </form>

</div>