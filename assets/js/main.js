
/** register form */

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

    if(data.name.length < 3) {
        $("#errName")
            .text("Please enter valid name")
            .show();
    } else $("#errName").hide();

    if(data.password.length < 3) {
        $("#errPassword")
            .text("Password to short, at least 3 character")
            .show();
    }  else $("#errPassword").hide();

    if(data.username < 3) {
        $("#errUsername")
            .text("Please enter username")
            .show();
    } else $("#errUsername").hide();

    if(data.password != data.confirm) {
        $("#errConfirm")
            .text("Password not match")
            .show();
    } else $("#errConfirm").hide();

    if(data.email.length < 6) {
        $("#errEmail")
            .text("Email to short, at least 6 characters")
            .show();
    } else $("#errEmail").hide();
 

    

    /** ajax call */

    $.ajax({
        method: "POST",
        url: "http://localhost/php-login-system/ajax/register.php",
        dataType: "json",
        data: data
    })
    .done(function(data){
        if(data.err !== undefined) {
            $("#errAjax").text(data.err).show();
        } else {
            window.location.href = data.redirect;
        } 
    })
    .fail(function(err) { console.log(err); })
    .always(function() { console.log("always"); });

    /** dont submit form */
    return false;
    
});





/** login form */


$(document).on("submit",".form-signin", function(e) {
    e.preventDefault();

    var _form = $(this);
    var dataObj = {
        password: $("input[name='password']").val(),
        email: $("input[name='email']").val()
    }

    if(dataObj.password.length < 3) $("#errPassword").text("Password to short, at least 3 character").show();
    else $("#errPassword").hide();

    if(dataObj.email < 3) $("#errEmail").text("Please enter username").show();
    else $("#errEmail").hide();



    /** ajax call */

    $.ajax({
        method: "POST",
        url: "http://localhost/php-login-system/ajax/login.php",
        dataType: "json",
        data: dataObj
    })
    .done(function(data){
        if(data.err === undefined) {
            window.location.href = data.redirect;
        } else {
            $("#errAjax")
                .text(data.err)
                .show();
        }
    })
    .fail(function(err) {
        console.log(err);
    })
    .always(function() {
        console.log("always");
    });

    /** dont submit form */
    return false;
    
});
