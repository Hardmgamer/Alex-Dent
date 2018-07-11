var Timer = window.setInterval(Next, 5000),
z = 0,
max = 2,
x = document.getElementById("b-container");
function Next(){
  clearInterval(Timer);
  Timer = window.setInterval(Next, 5000);
  if(z != max){
    z = z + 1;
    x.style.left = z * -100 + "%";
}
  else{
    x.style.left = "0";
    z = 0;
  }
}
function Prev(){
  clearInterval(Timer);
  Timer = window.setInterval(Next, 5000);
  if(z != 0){
    z = z - 1;
    x.style.left = z * -100 + "%";
  }
  else{
    x.style.left = max * -100 + "%";
    z = max;
  }
}
