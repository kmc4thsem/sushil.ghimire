let day = 3;
let result;

switch(day){
    case 1:
        result = "Sunday";
        break;

    case 2:
        result = "Monday";
        break;

    case 3:
        result = "Tuesday";
        break;

    default:
        result = "Invalid Day";
}

document.getElementById("result").innerHTML =
result;