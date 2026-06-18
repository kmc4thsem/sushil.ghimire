function validate() {

    let phone =
        document.getElementById("phone").value;

    let pattern = /^[0-9]{10}$/;
    if (pattern.test(phone)) {
        alert("Valid phone number");
    } else {
        alert("Invalid phone number");
    }
}