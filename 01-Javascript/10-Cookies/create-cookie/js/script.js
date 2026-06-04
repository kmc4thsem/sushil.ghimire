function createCookie() {
    const inputEmail = document.getElementById("email").value;

    document.cookie = `email=${inputEmail}; max-age=3600`;

    document.getElementById("cookie").innerHTML =
        "Cookie created with email: " + inputEmail;
}