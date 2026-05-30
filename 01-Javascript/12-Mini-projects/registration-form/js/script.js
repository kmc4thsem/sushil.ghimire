function validateForm() {

    let name =
        document.getElementById("name").value;

    let email =
        document.getElementById("email").value;

    let password =
        document.getElementById("password").value;

    if (name === "" ||
        email === "" ||
        password === "") {

        alert("All Fields Required");
        return false;
    }

    if (password.length < 8) {

        alert("Password must be 8 characters");
        return false;
    }

    alert("Registration Successful");

    return true;
}