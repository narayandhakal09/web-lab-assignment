
var getdata = document.querySelector("#input");
getdata.addEventListener("keyup", function () {
    let printdata = document.querySelector("#print");
    
    printdata.innerHTML = getdata.value;
});