function validatePassword(){

    let password =
    document.getElementById("password").value;

    if(password.length >= 8){
        alert("Valid Password");
    }
    else{
        alert("Minimum 8 Characters");
    }
}