function checkGender(){

    let gender =
    document.querySelector(
    'input[name="gender"]:checked');

    document.getElementById("result").innerHTML =
    gender.value;
}