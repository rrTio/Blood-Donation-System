function checkValidation(){
    var password = document.forms['donorReg']['password'];
    var confirmPassword = document.forms['donorReg']['confirmPassword'];

    if (password.value != confirmPassword.value) {
        window.alert("PASSWORD MISMATCH");
        password.focus();
        confirmPassword.focus();
        password.value = "";
        confirmPassword.value = "";
        return false;
    }
    
}