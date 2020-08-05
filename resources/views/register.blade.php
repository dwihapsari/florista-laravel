<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <!-- FORM START -->
            <form class="login100-form validate-form" role="formku" id="formku" method="POST" action="/register/user">
                {{csrf_field()}}
                <span class="login100-form-title p-b-34">
                    Account SIGN UP
                </span>
                <!-- nama -->
                <div class="wrap-input100 rs1-wrap-input100 validate-input m-b-12" data-validate="Type user name">
                    <input id="first-name" class="input100" type="text" name="name" placeholder="Full Name">
                    <span class="focus-input100"></span>
                </div>
                <!-- username -->
                <div class="wrap-input100 rs1-wrap-input100 validate-input m-b-12" data-validate="Type user name">
                    <input id="first-name" class="input100" type="text" name="username" placeholder="Username">
                    <span class="focus-input100"></span>
                </div>
                <!-- password -->
                <div class="wrap-input100 rs2-wrap-input100 validate-input m-b-12" data-validate="Type password">
                    <input class="input100" type="password" name="password" placeholder="Password">
                    <span class="focus-input100"></span>
                </div>

                <!-- <div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit"value="submit" name="input" id="input">
							Sign Up
						</button>
					</div> -->

                <!-- <input type="submit" value="Submit" name="input" id="input" class="btn btn-sm btn-success"/>&nbsp;<a href="index.php" class="btn btn-sm btn-warning">Back</a> -->

                <input type="submit" value="Submit" name="input" id="input" class="container-login100-form-btn login100-form-btn" />&nbsp;
                <div class="w-full text-center m-t-50">
                    <a class="txt1">Already have an account? </a>
                    <a href="index.html" class="txt3">
                        Sign In
                    </a>
                </div>
            </form>
            <!-- FORM END -->
            <div class="login100-more" style="background-image: url('img/imgwin/log-02.jpg');"></div>
        </div>
    </div>
</div>