function validateEmail() {

    let email =
        document.getElementById("email").value;

    if (email.includes("@")) {
        alert("Valid Email");
    }
    else {
        alert("Invalid Email");
    }
}