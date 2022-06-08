document.getElementById("title").innerHTML = 'dOCUMENT OBJECT MODEL';

const element = document.getElementsByClassName("hi");
for (elem of element) {
    elem.style.color = "red";

}
console.log(element);

const elembytagname = document.getElementsByTagName('h1');
for (tag of elembytagname) {
    tag.style.fontWeight = "100";
}
