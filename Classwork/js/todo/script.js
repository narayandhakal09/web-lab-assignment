const inputEl = document.getElementById("input-todo");
const resultEl = document.getElementById("result");

let tasks = [];

function Task(name) {
    this.name = name;
    this.isComplete = false;
    this.markAsComplete = () => this.isComplete = true;
}

function addTask(name) {
    tasks.push(new Task(name));
    renderDOM();

}

function markAsComplete(task) {
    tasks.forEach((task) => task.isComplete = true);

}

function removeTask(task) {
deleteDom()
}

inputEl.addEventListener("keyup", function (event) {
    if (event.code == "Enter") {
        addTask(inputEl.value);
        inputEl.value = "";
    }

});

function renderDOM() {
    resultEl.innerHTML = "";
    tasks.forEach(function (task) {
        resultEl.innerHTML += `<p><input type='checkbox' />${task.name} </p>`;
    })
}

function deleteDom() {
    resultEl.innerHTML = "";
    tasks.forEach(function (task) {
        resultEl.style.display="none";
    })
}