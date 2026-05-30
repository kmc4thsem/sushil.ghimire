function validate() {

    let password =
        document.getElementById("password").value;

    let pattern =
        /^(?=.*[A-Z])(?=.*[0-9]).{8,}$/;

    alert(pattern.test(password));
}