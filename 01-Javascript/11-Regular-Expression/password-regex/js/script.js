function validate() {

    let password =
        document.getElementById("password").value;

    let pattern =
        /^(?=.*[A-Z])(?=.*[0-9]).{8,}$/;
    if (!pattern.test(password)) {
        alert("Password is not valid");
    } else {
        alert("Password is valid");
    }
}