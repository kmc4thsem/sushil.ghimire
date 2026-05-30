let students = ["Ram","Sita","Hari","Gita"];

let result = "";

for(let i=0;i<students.length;i++){
    result += students[i] + "<br>";
}

document.getElementById("output").innerHTML =
result;