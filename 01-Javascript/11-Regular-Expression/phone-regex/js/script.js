function validate() {

    let phone =
        document.getElementById("phone").value;

    let pattern = /^[0-9]{10}$/;

    alert(pattern.test(phone));
}