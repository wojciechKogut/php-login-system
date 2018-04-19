$(document).on("submit",".form-horizontal", function(e) {
    e.preventDefault();

    var _form = $(this);
    var data = {
        name: $("input[name='name']").val(),
        email: $("input[name='email']").val(),
        password: $("input[name='password']").val(),
        username: $("input[name='username']").val(),
        confirm: $("input[name='confirm']").val()
    }

    if(data.name.length < 3) $("#errName").text("Please enter valid name").show();
    else $("#errName").hide();

    if(data.password.length < 3) $("#errPassword").text("Password to short, at least 3 character").show();
    else $("#errPassword").hide();

    if(data.username < 3) $("#errUsername").text("Please enter username").show();
    else $("#errUsername").hide();

    if(data.password != data.confirm) $("#errConfirm").text("Password not match").show();
    else $("#errConfirm").hide();

    if(data.email.length < 6) $("#errEmail").text("Email to short, at least 6 characters").show();
    else $("#errEmail").hide();
 

    return false;

    /** ajax call */

    
});