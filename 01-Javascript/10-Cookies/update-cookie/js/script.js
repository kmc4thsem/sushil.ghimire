// CREATE
function createStudentCookie() {
    document.cookie = "student=Ram; max-age=20; path=/";
    console.log("Cookie Created");
    console.log(document.cookie);
}

// READ
function readStudentCookie() {
    console.log("Cookie Value:");
    console.log(document.cookie);
}

// UPDATE
function updateStudentCookie() {
    document.cookie = "student=Hari; max-age=20; path=/";
    console.log("Cookie Updated");
    console.log(document.cookie);
}
createStudentCookie();
readStudentCookie();
updateStudentCookie();