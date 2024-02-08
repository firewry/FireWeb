// Add active class to the current button (highlight it)
const currentLocation = location.href;
const menuItem = document.getElementsByClassName("nav-item");
const xyz = document.getElementsByClassName("nav-item");
const menuLength = menuItem.length
for (let i = 0 ;  i<menuLength; i++ ){
    if(menuItem[i].href === currentLocation){
        xyz[i].className += " active"
    }
}
// Loader!
window.onload = function() {
    var preloader = document.getElementById("preloader");
    preloader.style.display = "none";
}