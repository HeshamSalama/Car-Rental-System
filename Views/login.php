<div id="login-popup" class="popup">
        <i class="fa fa-close text-danger" data-toggle="tooltip" data-placement="right" title="Close"></i>
        <div class="popup-title">
            <h2>Login to Your Account</h2>
        </div>
        <div class="popup-content">
            <form id="Login" method="POST">
                <input type="hidden" name="form_type" value="login">
                <div class="col-xs-12">
                    <input type="text" id="email">
                </div>  
                <div class="col-xs-12">
                    <input type="password" id="password" >
                </div>
                <div class="col-xs-12">
                    <input type="radio" name="remember" id="remember" />
                    <label for="remember" class="text-grey text-lg">Remember Me</label>
                </div>
                <div class="popup-footer col-xs-12" style="margin:30px 0 20px;">
                    <a class="text-grey text-lg forget">Don't Remember ?</a>
                    <button type="submit" class="btn-trans fl-right">
                        Login
                    </button>
        <div id="status"></div>
                </div>
            </form>
        </div>
    </div>
