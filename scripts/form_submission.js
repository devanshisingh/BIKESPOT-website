function register_submit()
{
    if (validate_first_name(document.registerForm.fname.value) && 
        validate_last_name(document.registerForm.lname.value) &&
        validate_email(document.registerForm.email.value) &&
        validate_phone(document.registerForm.phone.value) &&
        validate_password(document.registerForm.password.value) &&
        confirm_password(document.registerForm.password.value, document.registerForm.confirm_password.value))
        {
            if(check_terms())
            { 
                return true;
            }   
        }   
    
    return false;
}

function login_submit()
{
    if (validate_email(document.loginForm.email.value) && 
        validate_password(document.loginForm.password.value))
    {
        return true;
    }
    return false;
}

function contact_form()
{
    if (validate_full_name(document.form.name.value) &&
        validate_email(document.form.email.value))
        {
            alert("Your feedback has been added to our Database. \n Thank You!");
            return true;
        }
        
    return false;
}

function check_terms()
{
    var check = document.getElementById('terms');
    if(check.checked)
    {
        return true;
    }
    else
    {
        alert("Please agree to the Terms & Conditions of BIKESPOT");
        return false;
    }
}

function validate_full_name(name)
{
    var regex = /^[a-zA-Z ]{2,30}$/;
        if(name.length == 0 || regex.test(name))
        {
          alert("Enter a Valid FirstName");
          return false;
        }
        else
            return true;
}

function validate_first_name(name)
{
    // alert('fname');
    var regex = /[^a-zA-Z]/;
        if(name.length == 0 || regex.test(name))
        {
          alert("Enter a Valid FirstName");
          return false;
        }
        else
            return true;
}

function validate_last_name(name)
{
    // alert('lname');
    var regex = /[^a-zA-Z]/;
    if(name.length != 0 && regex.test(name))
    {
        alert("Enter a Valid LastName");
        return false;
    }
    else
        return true;
}

function validate_email(email)
{
    var regex= /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,})/;
    if(!(regex.test(email)))
    {
        alert("Insert Valid Email ID");
        return false;
    }
    else return true;
}

function validate_phone(phone)
{
    var regex = /[0-9]{10}/;
    if(!(regex.test(phone)))
    {
        alert("Insert Valid Mobile Number");
        return false;
    }
    else return true;
}

function validate_password(pwd)
{
    var regex = /[a-zA-Z0-9_\.\-\$]{8,}/;
    if(!(regex.test(pwd)))
    {
        alert("Password should contain more 8 charaters");
        return false;
    }
    else return true;
}

function confirm_password(pwd, pwd1)
{
    if(pwd == pwd1)
        return true;
    else
    {
        alert("Passwords don't match");
        return false;
    }
}

function validateVehicleForm()
{
    reg_no_ele = document.getElementById("reg-no");
    if(validate_reg_no(reg_no_ele.value))
    {
        reg_year = document.getElementById("reg-year");
        if(validate_reg_year(reg_year.value))
        {
            brand = document.getElementById("bike-brand");
            if(brand.value != "")
            {
                if(document.getElementById("sell_city").value != "")
                {
                    sell_price = document.getElementById("sell_price");
                    if(validate_sell_price(sell_price.value))
                    {
                        return true;
                    }
                    sell_price.focus();
                    return false;
                }
                alert("Select the State and City in which the vehicle will be for sale.");
                document.getElementById("sell_state").focus();
                return false;
            }
            alert("Select the brand of the vehicle."); 
            brand.focus();
            return false;
        }
        reg_year.focus(); 
        return false;       
    }
    reg_no_ele.focus();
    return false;
}

function validate_reg_no(number)
{
    if (number.length < 8 || number.length > 11) 
    {
        alert("The length of Registration number has to be 8-11 characters.");
        return false;
    }
    var state_codes = ["AN", "AP", "AR", "AS", "BR", "CH", "PB", "CG", "DD", "DL", "GA", "GJ", "HR", "HP", "JK", "JH", 
                            "KA", "KL", "LA", "LD", "MP", "MH",  "MN", "ML", "MZ", "NL", "OD", 
                            "PY", "PB", "RJ", "SK", "TN", "TS", "TR", "UP", "UK", "WB"];

    if(state_codes.includes(number.substring(0,2)) && (/[A-Z]{2}[0-9]{2}[A-Z]{0,3}[0-9]{4}/.test(number)))
    {
        return true;
    }
    
    alert("Invalid Registration Number");
    return false;
}

function validate_reg_year(year)
{
    if(year == "")
    {
        alert("Enter the Registration Year of the vehicle.");
        return false;
    }
    if(parseInt(year) > 2021 || parseInt(year) < 1990)
    {
        alert("Enter a valid Year");
        return false;
    }
    return true;
}

function validate_sell_price(price)
{
    if(price == "")
    {
        alert("Enter the Expected Selling Price of the vehicle.");
        return false;
    }
    if(parseInt(price) > 500000 || parseInt(price) < 10000)
    {
        alert("Price should be between Rs. 10,000 and Rs. 5,00,000");
        return false;
    }
    return true;
}