function logout()
{
    if(confirm("Are you sure?") == true) {
        userPreference = "Logged Out";
        return true;
    } 
    else return false;
}

function scrollFunction(button) 
{
    alert(button)
    if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
        scroll_button.style.display = "block";
    } else {
        scroll_button.style.display = "none";
    }
}

function loader()
{
    setTimeout(showPage, 3000);
}

function showPage()
{
    document.getElementById("loader-container").style.display = "none";
}

var data;
function getValues()
{
    xhttp = new XMLHttpRequest();
    xhttp.open("GET", "php/getValues.php", true);
    xhttp.send(); 
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) 
        { 
            data = JSON.parse(this.responseText);
            
            // alert(data.email_verified == 0);
            // alert(data.email_verified+""+data.phone_verified); 
            if(data.email_verified == 1 && data.phone_verified == 1)
            {
                document.getElementById("verification-progress-para").innerHTML = 
            "Your Personal Information has been verified. Proceed with filling your vehicle details.";
            }
              
        }
    }
    
}

function showForm()
{
    if(data.email_verified == 1 && data.phone_verified == 1)
    showVehicleForm();
    else showPersonalForm();
    document.getElementById('open-form-button').style.display='none';
}

function showPersonalForm()
{
    document.getElementById('personal-form-container').style.display='block';
    document.getElementById("fname").defaultValue = data.fname;
    document.getElementById("lname").defaultValue = data.lname;
    document.getElementById("email").defaultValue = data.email;
    document.getElementById("phone").defaultValue = data.phone;
    if(data.email_verified == 1)
    {
        set_verification_link("email-link-para", "Email ID Verified");
    }
    if(data.phone_verified == 1)
    {
        set_verification_link("phone-link-para", "Mobile Number Verified");
    }
}

function showVehicleForm()
{
    document.getElementById('vehicle-form-container').style.display='block';
}

function quitPersonalForm()
{
    xhttp = new XMLHttpRequest();
    xhttp.open("GET", "php/quitPersonalForm.php", true);
    xhttp.send(); 
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) 
        { 
            x = JSON.parse(this.responseText);
            // alert(x.email_verified == 0);
            // alert(x.email_verified+""+x.phone_verified); 
            if(x.email_verified == 1 && x.phone_verified == 1)
            {
                document.getElementById("verification-progress-para").innerHTML = 
                "Your Personal Information has been verified. Proceed with filling your vehicle details.";
                document.getElementById("personal-form-container").style.display = "none";
                showVehicleForm();
                document.getElementById("reg-no").focus();
            }
            else
            {
                if(x.email_verified == 0)
                alert("Please verify Your Email ID to proceed further");
                else
                alert("Please verify your Mobile Number to proceed further")
            }
              
        }
    }
    // getValues();
    // alert(data.email_verified);
    // if(data.email_verified  == 1 && data.phone_verified == 1)
    // {
    //     document.getElementById("personal-form-container").style.display = "none";
    //     showVehicleForm();
    //     document.getElementById("first-hand").focus();
    // }
    // else
    // {
    //     if(data.email_verified == 0)
    //     alert("Please verify Your Email ID to proceed further");
    //     else
    //     alert("Please verify your Mobile Number to proceed further")
    // }
}

function send_email_otp()
{
    xhttp = new XMLHttpRequest();
    xhttp.open("GET", "php/otp_email.php", true);
    xhttp.send(); 
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) { 
            alert(this.responseText); // Shows the OTP. So that I don't have to check my mail everytime.
            modal_show('otp-modal');
        }
    }
}

function send_phone_otp()
{
    xhttp = new XMLHttpRequest();
    xhttp.open("GET", "php/otp_phone.php", true);
    xhttp.send(); 
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) { 
            alert(this.responseText); // Shows the OTP. So that I don't have to check my msgs everytime.
            modal_show('phone-otp-modal');
        }
    }
}

function check_email_otp()
{
    var verify = false;
    otp = document.email_otp_form.otp_value.value;
    xhttp = new XMLHttpRequest();
    xhttp.open("GET", "php/check_email_otp.php?otp="+otp, true);
    xhttp.send(); 
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) 
        { 
            if(this.responseText)
            {
                modal_close('otp-modal');
                alert("Email Verified!");
                set_verification_link("email-link-para", "Email Verified");
            }
            else
            {
                alert("Incorrect OTP");
            }
        }  
    }
}

function check_phone_otp()
{
    var verify = false;
    otp = document.phone_otp_form.phone_otp_value.value;
    xhttp = new XMLHttpRequest();
    xhttp.open("GET", "php/check_phone_otp.php?otp="+otp, true);
    xhttp.send(); 
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) 
        { 
            // alert(this.responseText);
            if(this.responseText)
            {
                modal_close('phone-otp-modal');
                alert("Phone Verified!");
                set_verification_link("phone-link-para", "Mobile Number Verified");
            }
            else
            {
                alert("Incorrect OTP");
            }
        }  
    }
}

function set_verification_link(id, text)
{
    ele = document.getElementById(id);
    ele.onclick = null;
    ele.classList.remove("link-para");
    ele.innerHTML = "";
    var tag = document.createElement("mark");
    var text = document.createTextNode(text);
    tag.appendChild(text);
    ele.appendChild(tag);
}

function submitVehicleForm()
{
    if (validateVehicleForm())
    {
        alert("Success");
        bike_info = {
            "reg_no" : document.getElementById("reg-no").value,
            "reg_year" : document.getElementById("reg-year").value,
            "reg_month" : document.getElementById("reg-month").value,
            "ownership" : document.getElementById("first-hand").value,
            "brand" : document.getElementById("bike-brand").value,
            "model" : document.getElementById("bike-model").value,
            "state" : document.getElementById("sell_state").value,
            "city" : document.getElementById("sell_city").value,
            "price" : document.getElementById("sell_price").value
        }
        bike_info_json = JSON.stringify(bike_info);

        xhttp = new XMLHttpRequest();
        xhttp.open("POST", "php/VehicleRegister.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("data=" + bike_info_json);
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) 
            { 
                alert(this.responseText);
            }  
        }
    }
}
  


// function animateValue(id, start, end, duration) {
//     if (start === end) return;
//     var range = end - start;
//     var current = start;
//     var increment = end > start? 1 : -1;
//     var stepTime = Math.abs(Math.floor(duration / range));
//     var obj = document.getElementById(id);
//     var timer = setInterval(function() {
//         current += increment;
//         obj.innerHTML = current;
//         if (current == end) {
//             clearInterval(timer);
//         }
//     }, stepTime);
// }

// animateValue("value", 100, 25, 5000);