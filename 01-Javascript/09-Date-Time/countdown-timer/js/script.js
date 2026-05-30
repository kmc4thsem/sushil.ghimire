let count = 10;

let timer = setInterval(function(){

    document.getElementById("output").innerHTML =
    count;

    count--;

    if(count < 0){
        clearInterval(timer);
    }

},1000);