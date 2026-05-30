function checkResult() {

    let marks =
        Number(document.getElementById("marks").value);

    let result;

    if (marks >= 80)
        result = "Distinction";
    else if (marks >= 60)
        result = "First Division";
    else if (marks >= 40)
        result = "Pass";
    else
        result = "Fail";

    document.getElementById("result").innerHTML =
        result;
}