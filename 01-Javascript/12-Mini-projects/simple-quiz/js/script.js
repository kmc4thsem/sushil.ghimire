function checkAnswer() {

    let answer =
        document.querySelector(
            'input[name="quiz"]:checked'
        );

    if (!answer) {
        alert("Select an answer");
        return;
    }

    let result =
        answer.value === "Kathmandu"
            ? "Correct Answer"
            : "Wrong Answer";

    document.getElementById("result").innerHTML =
        result;
}