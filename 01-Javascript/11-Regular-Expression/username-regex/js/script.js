function validate() {

    let username =
        document.getElementById("username").value;

    let pattern =
        /^[a-zA-Z0-9_]{3,15}$/;

    alert(pattern.test(username));
}