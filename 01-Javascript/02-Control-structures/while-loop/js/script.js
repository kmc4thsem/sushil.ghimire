let i = 1;
let text = "";

while(i <= 10){
    text += i + "<br>";
    i++;
}

document.getElementById("output").innerHTML =
text;