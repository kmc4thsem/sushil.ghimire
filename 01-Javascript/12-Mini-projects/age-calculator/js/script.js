function calculateAge() {

    let dob =
        new Date(document.getElementById("dob").value);

    let today = new Date();

    let age =
        today.getFullYear() - dob.getFullYear();

    let month =
        today.getMonth() - dob.getMonth();

    if (month < 0) {
        age--;
    }

    document.getElementById("result").innerHTML =
        `Age: ${age} Years`;
}