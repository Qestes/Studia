function validate_login(){
    const error_field = $("#login_error");
    const login_field = $("#login_login");
    const  pass_field = $("#login_password");

    if(login_field.val().length < 6 || login_field.val().length > 30){
        error_field.text("Podano zły login.");
        error_field.show();
        return false;
    }
    if(pass_field.val().length < 6 || pass_field.val().length > 60){
        error_field.html("Podano złe hasło.");
        error_field.show();
        return false;
    }

    error_field.hide();
    return true;
}

function validate_reg(){
    const error_field = $("#reg_error");
    const login_field = $("#reg_login");
    const email_field = $("#reg_email");
    const pass_field  = $("#reg_pass");
    const rep_field   = $("#reg_rep");
    const tel_field   = $("#reg_tel");

    if(login_field.val().length < 6 || login_field.val().length > 30){
        error_field.html("Login musi mieć od 6 do 30 znaków");
        error_field.show();
        return false;
    }

    if(pass_field.val().length < 6 || pass_field.val().length > 60){
        error_field.html("Hasło musi składać się od 6 do 60 znaków.");
        error_field.show();
        return false;
    }

    if (rep_field.val() != pass_field.val()){
        error_field.html("Hasła się róźnią.");
        error_field.show();
        return false;
    }

    error_field.hide();
    return true;
}