function calculate(operator) {

    let a =
        Number(document.getElementById("num1").value);

    let b =
        Number(document.getElementById("num2").value);

    let result;

    switch (operator) {

        case '+':
            result = a + b;
            break;

        case '-':
            result = a - b;
            break;

        case '*':
            result = a * b;
            break;

        case '/':
            result = a / b;
            break;
    }

    document.getElementById("result").innerHTML =
        result;
}