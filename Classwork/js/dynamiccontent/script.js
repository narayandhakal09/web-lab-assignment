const add = document.querySelector('#addbtn');
const remove = document.querySelector('#remove');
const getcontainer = document.querySelector('#container');
const boxs = "<div class='box'></div>";
const getcontainerdiv = document.querySelector('#container div');


add.addEventListener("click", function () {
    getcontainer.innerHTML += boxs;
    
})
remove.addEventListener("click", function () {
    console.log(getcontainerdiv);

})
 