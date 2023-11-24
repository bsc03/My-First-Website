
function myFunction(){
    var nav = document.getElementById('myNavBar');
    if(nav.className === 'nav-bar'){
        nav.className += ' responsive';
    }else{
        nav.className = 'nav-bar';
    }
    
}