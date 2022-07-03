function checkValidation(){
    var password = document.forms['headReg']['password'];
    var confirmPassword = document.forms['headReg']['confirmPassword'];

    if (password.value != confirmPassword.value) {
        window.alert("PASSWORD MISMATCH");
        password.focus();
        confirmPassword.focus();
        password.value = "";
        confirmPassword.value = "";
        return false;
    }
    
}