
function myFunction() {
    document.getElementById("demo").innerHtml = "Only Believe";
    document.getElementById("mySide").style.display = "none";
}




function myFunction(x) {
    x.classList.toggle("change");
}

function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    /*document.getElementById("top_nav").style.marginLeft = "250px";*/
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.body.style.backgroundColor = "white";
}



function myFunctions() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myul");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}


var ul = document.getElementById("myul");
var lis = ul.getElementsByClassName("li");
for (var i = 0; i < lis.length; i++) {
  lis[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("actives");
    current[0].className = current[0].className.replace(" actives", "");
    this.className += " actives";
  });
}
// const currentLocation = location.li;
// const menuItem = document.querySelectorAll('l');
// const menuLength = menuItem.length
// for (let i = 0; i<menuItem.length; i++){
//     if(menuItem[i].href === currentLocation){
//         menuItem[i].className = "active"
//     }
// }
   



