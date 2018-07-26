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
var j = 0;
function navbutts(butt){
  butt.style.backgroundColor = '#f8f8f8';
  setTimeout(function () {
    butt.style.backgroundColor = '#fff';

  }, 150);
  if(j == 0){
  butt.classList.add('bappear');

  j++;
  }
  else{
    butt.classList.remove('bappear');
    j--;
  }
}
