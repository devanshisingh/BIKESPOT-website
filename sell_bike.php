<?php
    session_start();
    // echo $_SESSION["user_email_verified"];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="styles/home.css">
        <link rel="stylesheet" href="styles/sell_bike.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
        <script src="scripts/cities.js"></script>
        <script src="scripts/jquery.js "></script>
        <script type = "text/javascript" src="scripts/functions.js"></script>  
        <script type = "text/javascript" src="scripts/modal.js"></script>  
        <script type = "text/javascript" src="scripts/form_submission.js"></script>  
        

    </head>

    <body ng-app="" onload="getValues()">

    <script>
        var prevScrollpos = window.pageYOffset;
        window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
            document.getElementById("header").style.top = "0";
        } else {
            document.getElementById("header").style.top = "-100px";
        }
        prevScrollpos = currentScrollPos;
        }
    </script>

        <header id="header" style="position:fixed; z-index:1; width:100%; transition: top 0.3s;"></header>

        <h1 style="margin-top: 14vh;">Become a verified seller!</h1>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime corrupti deserunt voluptatem optio possimus eligendi, cupiditate excepturi rerum doloribus sunt officia perferendis mollitia numquam natus fugiat sed hic, deleniti est.</p>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem eaque fugit aliquid exercitationem architecto a pariatur atque recusandae eum, omnis soluta sint. Harum, aut voluptatem optio numquam ea quae eligendi.</p>

        <p><mark id="verification-progress-para">Start verification and Sell your vehicle in no time.</mark></p>

        <button id="open-form-button" onclick="showForm()">Proceed</button>

        <div id="otp-modal" class="modal verification-modal">
            <div class="verification-modal-content modal-content">
                <h1>Email Verification</h1>
                <p>A 6-digit One Time Password has been sent to the entered Email-ID. Please enter the OTP here.</p>
                
                <form name="email_otp_form" onsubmit="check_email_otp()">
                <input id="otp_value" name="otp_value" type="text" placeholder="Enter the six digit OTP" maxlength="6" minlength="6" required>
                <button type="submit">Submit</button>
                <button style="float:right" onclick="modal_close('otp-modal')">Cancel</button>
                </form>
                
            </div>            
        </div>

        <div id="phone-otp-modal" class="modal verification-modal">
            <div class="verification-modal-content modal-content">
                <h1>Mobile Verification</h1>
                <p>A 6-digit One Time Password has been sent to the entered Mobile Number. Please enter the OTP here.</p>
                
                <form name="phone_otp_form" onsubmit="check_phone_otp()">
                <input id="phone_otp_value" name="phone_otp_value" type="text" placeholder="Enter the six digit OTP" maxlength="6" minlength="6" required>
                <button type="submit">Submit</button>
                <button style="float:right" onclick="modal_close('phone-otp-modal')">Cancel</button>
                </form>
                
            </div>            
        </div>
        
        
        <div id="personal-form-container" class="form-container">

            <h3>Personal Information</h3>
            <form action="" name="personal-info" novalidate>
                <p>First Name <span style="color:red">*</span>
                    <input type="text" name="fname" id="fname" required disabled>
                </p>
                <p>Last Name
                <input type="text" name="lname" id="lname" placeholder="Last Name" disabled>
                </p>
                <p>
                    <span style="float:left; margin-right: 20px;">
                        Email ID <span style="color:red">*</span>
                        <input type="email" name="email" id="email" placeholder="Email-ID" required disabled>
                    </span> 
                    <span>
                        <p id="email-link-para" class="link-para" onclick="send_email_otp()">Click here to verify your Email Address</p>
                    </span>
                </p>

                <p>
                    <span  style="float:left; margin-right: 20px;">
                        Mobile Number <span style="color:red">*</span>
                        <input type="text" name="phone" id="phone" placeholder="Mobile Number" required disabled>
                    </span> 
                    <p id="phone-link-para" class="link-para" onclick="send_phone_otp()">Click here to verify your Mobile Number</a>
                </p>

                <button type="button" onclick="quitPersonalForm()">Proceed</button>
            </form>
        </div>

        <div id="vehicle-form-container" class="form-container">
            <form action="" name="vehicle-form" id="vehicle-form">
                
                <p><h4>Registration Details</h4>
                    Registration Number : 
                    <input type="text" id="reg-no" name="reg-no" minlength="8" maxlength="11" placeholder="Registration Number"><br>
                    Registration Year and Month<input type="number" name="reg-year" id="reg-year" min="2000" max="2021" style="width: 100px;" placeholder="YYYY">
                    <select name="reg-month" id="reg-month">
                        <option value="">Choose Month</option>
                        <option value="January">January</option>
                        <option value="February">February</option>
                        <option value="March">March</option>
                        <option value="April">April</option>
                        <option value="May">May</option>
                        <option value="June">June</option>
                        <option value="July">July</option>
                        <option value="August">August</option>
                        <option value="September">September</option>
                        <option value="October">October</option>
                        <option value="November">November</option>
                        <option value="December">December</option>
                    </select>
                </p>

                <p><h4>About the Bike</h4>
                    Ownership :: <select name="first-hand" id="first-hand">
                            <option value="first-hand">First Hand</option>
                            <option value="second-hand">Second Hand</option>
                            <option value="third-hand">Third Hand</option>
                        </select> <br>
                    
                    Brand and Model :: 
                    <select name="bike-brand" id="bike-brand">
                        <option value="">Choose Brand</option>
                        <option value="Aprilia">Aprilia</option>
                        <option value="Bajaj">Bajaj</option>
                        <option value="Benelli">Benelli</option>
                        <option value="Bimota">Bimota</option>
                        <option value="BMW">BMW</option>
                        <option value="Ducati">Ducati</option>
                        <option value="Harley-Davidson">Harley-Davidson</option>
                        <option value="Hero">Hero</option>
                        <option value="Honda">Honda</option>
                        <option value="Indian Motorcycle">Indian Motorcycle</option>
                        <option value="Kawasaki">Kawasaki</option>                        
                        <option value="KTM">KTM</option>
                        <option value="MV Agusta">MV Agusta</option>
                        <option value="Norton">Norton</option>
                        <option value="Royal Enfield">Royal Enfield</option>
                        <option value="Suzuki">Suzuki</option>
                        <option value="Triumph">Triumph</option>
                        <option value="Victory">Victory</option>                   
                    </select>

                    <input type="text" name="bike-model" id="bike-model" placeholder="Enter Model">
                </p>
                    


                <p>
                    <h4>Ad Details</h4>
                    Where is the vehicle available for sale?
                    <select onchange="print_city('sell_city', this.selectedIndex);" id="sell_state" name ="stt" required></select>
                    <select id ="sell_city" required></select>
                    <script language="javascript">print_state("sell_state");</script><br>

                    Set the price at <input type="number" min="10000" max="500000" id="sell_price" name="sell_price">
                </p>

                
                <button type="button" onclick="submitVehicleForm()">Proceed</button>

            </form>
        </div>





        


        <footer></footer>

    </body>
</html>
