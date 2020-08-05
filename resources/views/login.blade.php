<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <!-- FORM START -->
            <form class="login100-form validate-form" method="post" action="login/user">
                {{csrf_field()}}
                <span class="login100-form-title p-b-35">
                    Customer Sign In
                </span>
                <!-- username -->
                <div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
                    <input id="username" class="input100" type="text" name="username" placeholder="Username">
                    <span class="focus-input100"></span>
                </div>
                <!-- password -->
                <div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
                    <input class="input100" type="password" name="password" placeholder="Password">
                    <span class="focus-input100"></span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn" type="submit">
                        Sign in
                    </button>
                </div>
            </form>
            <!-- FORM END -->
            <div class="login100-more" style="background-image: url('img/imgwin/log-03.jpg');"></div>
        </div>
    </div>
</div>