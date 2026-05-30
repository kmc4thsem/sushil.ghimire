function showTime(){

    let now = new Date();

    let h = now.getHours();
    let m = now.getMinutes();
    let s = now.getSeconds();

    document.getElementById("clock").innerHTML =
    h + ":" + m + ":" + s;
}

setInterval(showTime,1000);