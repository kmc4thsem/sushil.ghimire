function validate() {

    let name =
        document.getElementById("name").value;

    if (name === "") {
        alert("Name Required");
        return false;
    }

    return true;
}