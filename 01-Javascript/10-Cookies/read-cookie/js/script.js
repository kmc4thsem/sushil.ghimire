function readCookie() {
    document.getElementById("output").innerHTML =
        document.cookie = "name=sushil; max-age=3600";
}
readCookie();