window.onload = function() {
    render();
};

function render() {
    window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container');
    recaptchaVerifier.render();
}

function phoneAuth() {
    //get the number
    var number = "+91" + contact;
    // alert(number);
    //it takes two parameter first one is number and second one is recaptcha
    firebase.auth().signInWithPhoneNumber(number, window.recaptchaVerifier).then(function(confirmationResult) {
        //s is in lowercase
        window.confirmationResult = confirmationResult;
        coderesult = confirmationResult;
        // console.log(coderesult);
        document.getElementById('msgsnt').classList.remove('hidden');
        setTimeout(function() {
            document.getElementById('msgsnt').classList.add('hidden');

        }, 3000);
    }).catch(function(error) {
        console.log(error);
        alert(error.message);
    });
}

function codeverify() {
    var code = document.getElementById('verificationCode').value;
    console.log(code);

    coderesult.confirm(code).then(function(result) {
        alert("Successfully registered");
        var user = result.user;
        console.log(user);
        document.getElementById("btn").style.display = "none";
        document.getElementById("verify").style.display = "none";
    
        document.getElementById('reqForm').submit();
    }).catch(function(error) {
        console.log(error);
        alert(error.message);
        return false;
    });
    return false;
}