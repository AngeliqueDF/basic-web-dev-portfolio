"use strict";

//get menu button
var menuButton = document.querySelector('.mobile-menu-button');

// toggle header nav hide/display
function toggleHeaderNav(){    
    //get menu
    var headerNav = document.querySelector('nav.header-nav');
    headerNav.classList.toggle('display-none');
}
//listen for click or tap event
menuButton.addEventListener("click", toggleHeaderNav);