function checkValidation(){
    var password = document.forms['forgotten']['password'];
    var confirmPassword = document.forms['forgotten']['confirmPassword']

    if(password.value != confirmPassword.value){
        window.alert("Password Mismatch");
        password.focus();
        cPassword.focus();
        password.value = "";
        cPassword.value = "";
        return false;
    }
}

function returnPage(){
    window.location.href = "./headLogin.php";
}