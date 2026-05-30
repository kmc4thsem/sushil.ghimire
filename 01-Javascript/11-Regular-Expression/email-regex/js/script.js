function validate() {

    let email =
        document.getElementById("email").value;

    let pattern =
        /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    alert(pattern.test(email));
}