function registrationDiv(){
    var loginFrom = document.getElementById("login-form");
    var loginButton = document.getElementById("login-button");
    var registrationForm = document.getElementById("registration-form");
    var registrationButton = document.getElementById("registration-button");
    var registerButton = document.getElementById("register-button");
    var registrationInstruction = document.getElementById("registration-instruction");
    var logo = document.getElementById("logo");
    document.getElementById("back-button").style.display = "flex";
    loginFrom.style.display = "none";
    loginButton.style.display = "none";
    registrationForm.style.display = "flex";
    registrationButton.style.display = "none";
    registerButton.style.display = "flex";
    registrationInstruction.style.display = "flex";
    document.getElementById("flexible-padding").style.paddingTop = "0";

    if (window.innerWidth < 992) {
        logo.style.display = "none";
    }
}

function backToLogin(){
    document.getElementById("login-form").style.display = "flex";
    document.getElementById("login-button").style.display = "flex"
    document.getElementById("registration-form").style.display = "none";
    document.getElementById("registration-button").style.display = "flex";
    document.getElementById("register-button").style.display = "none";
    document.getElementById("registration-instruction").style.display = "none";
    document.getElementById("back-button").style.display = "none";
    document.getElementById("flexible-padding").style.paddingTop = "20%";
    document.getElementById("logo").style.display = "flex";
}


function enterLog(logsent, attempts) {
    let name = $("#sessionname").attr("data-value");
    // alert(name);
    // alert(attempts);
    // alert(logsent);
    if(logsent < 2){
        let title = "Login information";
        let desc = name + " logged in";
        $.ajax({
            type: "post",
            url: 'http://127.0.0.1:8000/logs/',
            data: {
                title: title,
                desc: desc,
                attempts: attempts,
            }
        })
    }
}