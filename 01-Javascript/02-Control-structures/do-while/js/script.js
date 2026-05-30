let i = 1;
let text = "";

do{
    text += i + "<br>";
    i++;
}
while(i <= 10);

document.getElementById("output").innerHTML =
text;