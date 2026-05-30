function validatePhone(){

    let phone =
    document.getElementById("phone").value;

    if(phone.length === 10){
        alert("Valid Phone");
    }
    else{
        alert("Invalid Phone");
    }
}