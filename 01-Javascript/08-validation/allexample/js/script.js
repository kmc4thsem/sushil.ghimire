function validatePassword() {

    let password =
        document.getElementById("password").value;

    let pattern =
        /^(?=.*[A-Z])(?=.*[0-9]).{8,}$/;
    if (!pattern.test(password)) {
        alert("Valid Password Required  (At least 8 characters, 1 uppercase letter and 1 number)");
    }
    else {
        alert("Valid Password");
    }
}