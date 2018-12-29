/*#############################################################
 Name: MyForm
 Version: 1.3
 Author: Franz Ordóñez & Ellery Aguilar
 http://www.paulund.co.uk/regular-expression-to-validate-email-address
 http://www.webdesignerforum.co.uk/topic/68584-anti-spam-form-without-captcha/
 URL: 
 Feel free to use and modify but please provide credits!
 #############################################################*/


/* VALIDATION */
function validateEmail(email) {
    var emailReg = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
    var valid = emailReg.test(email);

    if (!valid) {
        return false;
    } else {
        return true;
    }
}

function focusEmpty(inputName) {
    if ($("input[name=" + inputName + "]").val() === "") {
        $("#" + inputName + "_error").show();
        $("input[name=" + inputName + "]").focus();
        return false;
    } else {
        return true;
    }
}

function OnProgress(event, position, total, percentComplete) {
    //Progress bar
    $('#progressbox').show();
    $('#progressbar').width(percentComplete + '%'); //update progressbar percent complete
    $('#statustxt').html(percentComplete + '%'); //update status text
    if (percentComplete > 50)
    {
        $('#statustxt').css('color', '#000'); //change status text to white after 50%
    }
}

/* MAIN FUNCTION */
$(function () {
    $('.error').hide();

    $(".demoSubmit").click(function (e) {
        e.preventDefault();

        $("#loader").show();

        $('.error').hide();

        if ($("input[name=reference]").val()) {
            return false;
        }
        // validate and process form here
        if (!(validateEmail($("#email").val()))) {
            $("#email_missing").show();
            focusEmpty("email");
            return false;
        }

        var $options = {
            type: "POST",
            url: "mail_demo.php",
            dataType: 'JSON',
            data: {
                //THIS WILL TELL THE FORM IF THE USER IS CAPTCHA VERIFIED.
                captcha: grecaptcha.getResponse()
            },
            complete: function (data) {
                alert("Thank you for requesting a demonstration of the Ivory Digital Denture system. A member of our team will contact you shortly to schedule your personal demonstration.");
                document.getElementById("innerForm").reset();
                $("#loader").hide();
            },
            resetForm: true
        };

        $("#innerForm").ajaxSubmit($options);

    });
    
    $(".techSubmit").click(function (e) {
        e.preventDefault();

        $("#loader").show();

        $('.error').hide();

        if ($("input[name=reference]").val()) {
            return false;
        }
        // validate and process form here
        if (!(validateEmail($("#email").val()))) {
            $("#email_missing").show();
            focusEmpty("email");
            return false;
        }

        var $options = {
            type: "POST",
            url: "mail_tester.php",
            dataType: 'JSON',
            data: {
                //THIS WILL TELL THE FORM IF THE USER IS CAPTCHA VERIFIED.
                captcha: grecaptcha.getResponse()
            },
            complete: function (data) {
                alert("Thank you for applying to become a Ivory Digital Denture system tech leader. A member of our team will contact you shortly.");
                document.getElementById("innerForm").reset();
                $("#loader").hide();
            },
            resetForm: true
        };

        $("#innerForm").ajaxSubmit($options);

    });
    
    $(".contactSubmit").click(function (e) {
        e.preventDefault();

        $("#loader").show();

        $('.error').hide();

        if ($("input[name=reference]").val()) {
            return false;
        }
        // validate and process form here
        if (!(validateEmail($("#email").val()))) {
            $("#email_missing").show();
            focusEmpty("email");
            return false;
        }

        var $options = {
            type: "POST",
            url: "mail_contact.php",
            dataType: 'JSON',
            data: {
                //THIS WILL TELL THE FORM IF THE USER IS CAPTCHA VERIFIED.
                captcha: grecaptcha.getResponse()
            },
            complete: function (data) {
                alert("We are thrilled to hear from you! A member of our team will contact you shortly.");
                document.getElementById("innerForm").reset();
                $("#loader").hide();
            },
            resetForm: true
        };

        $("#innerForm").ajaxSubmit($options);

    });
});