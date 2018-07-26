var i = 0;
function ocmenu(){ // open/close menu
  var y = window.scrollY;
  if(i == 0){
  document.getElementById('menu-icon').classList.add('menu-icona');
  document.getElementById('sidenav').style.left = '0px';
  document.getElementsByTagName('body')[0].style.overflow = 'hidden';
  document.getElementById('header').style.top = y + 'px';
  i++;
  }
  else{
    document.getElementById('menu-icon').classList.remove('menu-icona');
    document.getElementById('sidenav').style.left = '-80%';
    document.getElementsByTagName('body')[0].style.overflow = '';
    document.getElementById('header').style.position = '';
    document.getElementById('header').style.top = '';
    i--;
  }
}
