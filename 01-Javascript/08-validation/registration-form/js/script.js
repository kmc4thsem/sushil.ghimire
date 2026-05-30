function validateForm(){

    let name =
    document.getElementById("name").value;

    let email =
    document.getElementById("email").value;

    if(name === "" || email === ""){
        alert("All Fields Required");
        return false;
    }

    return true;
}