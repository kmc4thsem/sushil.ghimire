let name = "Ram";
let age = 20;
let isStudent = true;

let result = `
Name: ${name} (${typeof name})<br>
Age: ${age} (${typeof age})<br>
Student: ${isStudent} (${typeof isStudent})
`;

document.getElementById("output").innerHTML = result;