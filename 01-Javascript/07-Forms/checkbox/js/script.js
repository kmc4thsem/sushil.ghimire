function showSkills(){

    let skills = "";

    if(document.getElementById("html").checked){
        skills += "HTML ";
    }

    if(document.getElementById("css").checked){
        skills += "CSS";
    }

    document.getElementById("result").innerHTML =
    skills;
}