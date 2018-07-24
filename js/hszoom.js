var result = document.getElementById('myresult');
var lens = document.getElementById('Zoomlens');
result.style.width = '0';
function ShowZoom(){
  result.style.opacity = '1';
  result.style.width = '300px';
  lens.style.opacity = '1';
}
function HideZoom(){
  result.style.opacity = '0';
  result.style.width = '0';
  lens.style.opacity = '0';
}
