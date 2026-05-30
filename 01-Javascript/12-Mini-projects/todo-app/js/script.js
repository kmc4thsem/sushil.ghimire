function addTask() {

    let task =
        document.getElementById("task").value;

    if (task === "") return;

    let li =
        document.createElement("li");

    li.textContent = task;

    document.getElementById("list")
        .appendChild(li);

    document.getElementById("task").value = "";
}