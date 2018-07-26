function scroll(){
var y = window.scrollY;
var side = document.getElementById('side');
if(y < 55){
	var z = 55 - y;
	side.style.top = z + 'px';
	side.style.height = 'calc(100% - ' + z + 'px)';
}
else{
	side.style.top = '0px';
	side.style.height = '100%';

	}
}
