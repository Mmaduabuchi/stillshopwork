var menuContainer = document.getElementById('cate-dropdown');
var dropDown = document.getElementById('drop-down');

document.getElementById('drop-down').onmouseover = ()=> {

    if (menuContainer.style.display = "none") {

        menuContainer.style.display = "block";

    }
    dropDown.style.background = "rgb(140, 182, 171)";
}

document.getElementById('drop-down').onmouseleave = ()=> {
    
        menuContainer.style.display = "none";

}

var smMenuHolder = document.getElementById('sm-menu-holder');

document.getElementById('dropDownMenuIcon').onclick = ()=> {
    smMenuHolder.style.display = "block";
}

document.getElementById('remover-icon').onclick = ()=>{
    smMenuHolder.style.display = "none";
}
