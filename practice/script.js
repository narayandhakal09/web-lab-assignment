const spanElements = document.querySelectorAll('span');
for (el of spanElements) {
    el.addEventListener("mousedown", grab);
}
function grab(event) {
    event.target.addEventListener("mousemove", function (event) {
        event.target.style.left = event.clientX + "px";
        event.target.style.top = event.clienty + "px";

        
    });
    event.target.addEventListener("mouseup", function () {
        
    });
}