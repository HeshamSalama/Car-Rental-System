 <div id="register-popup" class="popup" style="margin: 10px auto;top:0;">
        <i class="fa fa-close text-danger" data-toggle="tooltip" data-placement="right" title="Close"></i>
        <div class="popup-title">
            <h2>Create New Account</h2>
        </div>
        <div class="popup-content">
            <form id="registeration" method="POST">
                <div class="col-xs-6">
                    <input type="text" placeholder="Firstname" id="fname">
                <i id="FNameError" class="fa fa-warning"></i>
                </div>
                <div class="col-xs-6">
                    <input type="text" placeholder="Lastname" id="lname">
                <i id="LNameError" class="fa fa-warning"></i>
                </div>
                <div class="col-xs-12">
                    <input type="text" placeholder="Phone No" id="phone">
                <i id="PhoneError" class="fa fa-warning"></i>
                </div>
                <div class="col-xs-12">
                    <input type="text" placeholder="Address" id="address">
                <i id="AddressError" class="fa fa-warning"></i>
                </div>
                <div class="col-xs-12">
                    <input type="text" placeholder="E-mail" id="email">
                <i id="EmailError" class="fa fa-warning"></i>
                </div>
                <div class="col-xs-12">
                    <input type="password" placeholder="Password" id="password">
                <i id="PasswordError" class="fa fa-warning"></i>
                </div>
                <div class="col-xs-12">
                    <input type="password" placeholder="Confirm Password" id="copassword">
                <i id="CoPasswordError" class="fa fa-warning"></i>
                </div>
                <div class="popup-footer col-xs-12" style="margin:10px 0 20px;">
                    <button class="btn-trans fl-right" type="submit" name="Registration">
                        Register
                    </button>
                </div>
                                    <div class="clearfix"></div>

                        <div id="status" class="col-xs-12" style="margin:0px auto 10px;"></div>

            </form>
        </div>
    </div>
