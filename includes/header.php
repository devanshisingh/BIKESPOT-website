<?php 
    session_start();
    if(isset($_SESSION['login_error']))
    {
        echo '<script>alert("Incorrect Email-ID or Password");</script>';
        unset($_SESSION['login_error']);
    }
    if(isset($_SESSION['register_error']))
    {
        echo '<script>alert("Email ID already registered. Please Login.");</script>';
        unset($_SESSION['register_error']);
    }
?>

<div class="login-pane">
    <ul class="inline">
        <li class="float-left"><a class="color-white" href="#">Search</a></li>
        <li class="float-right">
            <?php
                if(isset($_SESSION['logged_in']))
                    echo "<a class='color-white' href='php/logout.php' onclick='return logout()'>Logout</a>";
                else
                 echo "<a class='color-white' href='#' onclick='return modal_show(".'"'."modal-register".'"'.")'><i class='fa fa-unlock color-white'></i>Register</a>";
            ?>
        </li>
        <li class="float-right">
            <?php
                if(isset($_SESSION['logged_in']))
                    echo "<a class='color-white' href='#'>Hello  ".$_SESSION['user_first_name']."!</a>";
                else
                 echo "<a class='color-white' href='#' onclick='return modal_show(".'"'."modal-login".'"'.")'><i class='fa fa-sign-in color-white'></i>Login</a>";
            ?>
        </li>
    </ul>
</div>

        


        <div id="modal-login" class="modal">
            <div class="modal-content modal-animate" id="modal-content-login">
                <a href="#" onclick="return modal_close('modal-login')">
                    <i class="fa fa-times modal-cross" aria-hidden="true"></i>
                </a>
                <h1 style="text-align: center;">LOGIN</h1>
                <form action="php/login_user.php" name="loginForm" onsubmit="return login_submit()" method="post">
                    <label><b>Email ID</b></label>
                    <div class="input-material">
                        <input type="text" class="input-material-text" placeholder="Enter Email-ID" name="email" required>
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </div>
                    
                    <label><b>Password</b></label>
                    <div class="input-material">
                        <input class="input-material-text" type="password" placeholder="Enter Password" name="password" required>
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </div>

                    <div id="modal-content-container">
                        <input type="checkbox" checked="checked" id="remember-me"> 
                        <label for="remember-me">Remember me</label> 
                        <a href="#" id="forgot-password">Forgot Password</a>
                    </div>
    
                    <button type="submit" class="green-button">Login</button>                    
                </form>

                <hr style="width: 100%; margin: 2vh 0;">
                <p style="text-align: center;">
                    Don't have an account?
                    <a href="#" style="color: red;" onclick="return modal_show_close('modal-register', 'modal-login')">Register Now</a>
                </p>
            </div>
        </div>


        <div id="modal-register" class="modal">
            <div class="modal-content modal-animate" id="modal-content-register">
                <a href="#" onclick="return modal_close('modal-register')">
                    <i class="fa fa-times modal-cross" aria-hidden="true"></i>
                </a>
                <h1 style="text-align: center;">REGISTER</h1>
                <form action="php/register_user.php" name="registerForm" onsubmit="return register_submit()" method="post">
                    <div class="inline-flex-container">
                        <div class="margin-right-5px">
                            <label><b>First Name</b></label>
                            <br>
                            <div class="input-material">
                                <input type="text" class="input-material-text" placeholder="First Name" name="fname" required>
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </div>
                        </div>

                        <div>
                            <label><b>Last Name</b></label>
                            <br>
                            <div class="input-material">
                                <input type="text" class="input-material-text" placeholder="Last Name" name="lname">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="inline-flex-container">
                        <div class="margin-right-5px">
                        <label><b>Email ID</b></label>
                        <br>
                        <div class="input-material">
                            <input type="email" class="input-material-text" placeholder="Enter Email ID" name="email" required>
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>
                    </div>

                        <div>
                            <label><b>Mobile No.</b></label>
                            <br>
                            <div class="input-material">
                                <input type="text" class="input-material-text" placeholder="Enter Mobile Number" name="phone" required>
                                <i class="fa fa-mobile" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    
                    <div class="inline-flex-container">
                        <div class="margin-right-5px">
                            <label><b>Password</b></label>
                            <br>
                            <div class="input-material">
                                <input class="input-material-text" type="password" placeholder="Enter Password" name="password" required>
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </div>
                        </div>

                        <div>
                            <label><b>Confirm Password</b></label>
                            <br>
                            <div class="input-material">
                                <input class="input-material-text" type="password" placeholder="Enter Password Again" name="confirm_password" required>
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div id="modal-content-container">
                        <input type="checkbox" id="terms" name="terms" checked> 
                        <label for="terms">I agree with BIKESPOT <a href="#" style="color: blue;">Terms and Conditions</a></label> 
                    </div>
                    
                    <button type="submit" class="green-button">Register</button>                    
                </form>

                <hr style="width: 100%; margin: 2vh 0;">
                <p style="text-align: center;">
                    Already have an account?
                    <a href="#" style="color: red;" onclick="return modal_show_close('modal-login', 'modal-register')">Login</a>
                </p>
            </div>
        </div>


        <!-- <div class="nav_bar">
            <ul class="inline">
                <li class="float-left" style="padding: 0px;">
                    <a href="home.php"><h1 style="margin: 0px 10px 0 5px; font-size: 35px;">BIKESPOT</h1></a></li>
                <li class="float-left"><a href="#">Search</a></li>
                <li class="float-left"><a href="#">Compare</a></li>
                <li class="float-left"><a href="blog.php">Blog</a></li>
                <li class="float-left"><a href="contact_form.html">Contact Us</a></li>
                <li class="float-left"><a href="#">Services</a></li>
                <li class="float-right"><button onclick="if(<?php echo isset($_SESSION['logged_in'])?'true':'false'; ?>) 
                                                            window.open('sell_bike.php', '_self');
                                                            else alert('Login / Register to become a Verified Seller.');">SELL YOUR BIKE</button></li>
            </ul>
        </div> -->

        <div class="nav_bar" style="overflow: hidden;">
            <ul class="inline">
                <li class="float-left" style="padding: 0px;">
                    <a href="home.php"><h1 style="margin: 0px 10px 0 5px; font-size: 35px;">BIKESPOT</h1></a></li>
                <li class="float-left dropdown">
                    <a href="#" style="margin-bottom: 8px;">Search<i class="fa fa-angle-down arrow-rotate"></i></a>
                    <div class="dropdown-content">
                        <a href="#">By City</a>
                        <a href="#">By Price</a>
                        <a href="#">By Brand</a>
                    </div>
                </li>
                <li class="float-left dropdown">
                    <a href="#" style="margin-bottom: 8px;">Compare</a><i class="fa fa-angle-down arrow-rotate"></i>
                    <div class="dropdown-content">
                        <a href="#">Item 1</a>
                        <a href="#">Item 2</a>
                        <a href="#">Item 3</a>
                    </div>
                </li>
                <li class="float-left dropdown">
                    <a href="blog.php" style="margin-bottom: 8px;">Blog<i class="fa fa-angle-down arrow-rotate"></i></a>
                    <div class="dropdown-content">
                        <a href="#">Latest News</a>
                        <a href="#">Articles</a>
                        <a href="#">Item 3</a>
                    </div>
                </li>
                <li class="float-left dropdown">
                    <a href="#" style="margin-bottom: 8px;">Services</a><i class="fa fa-angle-down arrow-rotate"></i>
                    <div class="dropdown-content">
                        <a href="#">Item 1</a>
                        <a href="#">Item 2</a>
                        <a href="#">Item 3</a>
                    </div>
                </li>
                <li class="float-left dropdown"><a href="contact_form.html">Contact Us</a></li>
                <li class="float-right"><button onclick="if(<?php echo isset($_SESSION['logged_in'])?'true':'false'; ?>) 
                                                            window.open('sell_bike.php', '_self');
                                                            else alert('Login / Register to become a Verified Seller.');">SELL YOUR BIKE</button></li>
            </ul>
        </div>