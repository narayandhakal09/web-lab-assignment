document.getElementById('title').innerHTML = 'Query selector';
const selectp1 = document.querySelector('#title');
selectp1.style.color = "red";

const selectall = document.querySelectorAll('.hi');
for (allp of selectall) {
    allp.style.color = 'blue';
}