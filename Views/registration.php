 <div id="register-popup" class="popup" style="margin: 10px auto;top:0;">
        <i class="fa fa-close text-danger" data-toggle="tooltip" data-placement="right" title="Close"></i>
        <div class="popup-title">
            <h2>Create New Account</h2>
        </div>
        <div class="popup-content">
            <form id="registeration" method="POST">
                <input type="hidden" id="form_type" value="regestration">
                <div class="col-xs-6">
                    <input type="text" id="fname" placeholder="FirstName">
                <i id="FNameError" class="fa fa-warning"></i>
                </div>
                <div class="col-xs-6">
                    <input type="text" id="lname" placeholder="LastName">
                <i id="LNameError" class="fa fa-warning"></i>
                </div>
                <div class="col-xs-12">
                    <input type="text" id="phone" placeholder="Phone No.">
                <i id="PhoneError" class="fa fa-warning"></i>
                </div>
                <div class="col-xs-12">
                    <input type="text" id="address" placeholder="Address">
                <i id="AddressError" class="fa fa-warning"></i>
                </div>
                <div class="col-xs-12">
                    <input type="text" id="email" placeholder="Email Address">
                <i id="EmailError" class="fa fa-warning"></i>
                </div>
                <div class="col-xs-12">
                    <input type="password" id="password" placeholder="Password">
                <i id="PasswordError" class="fa fa-warning"></i>
                </div>
                <div class="col-xs-12">
                    <input type="password" id="copassword" placeholder="Confirm Password">
                <i id="CoPasswordError" class="fa fa-warning"></i>
                </div>
                <div class="popup-footer col-xs-12 text-right" style="margin:10px 0 20px;">
                    <button  type="submit" class="btn-trans">Registration</button>
                        
                    
                </div>
                                    <div class="clearfix"></div>

                        <div id="status" class="col-xs-12" style="margin:0px auto 10px;"></div>

            </form>
        </div>
    </div>
