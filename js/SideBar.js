var i = 0;
function menu(){
	var x = document.getElementById('menu-icon');
	var side = document.getElementById('side');
	var profpic = document.getElementById('prof-pic');
	var body = document.getElementById('body');
	if(i == 0){
		x.classList.add("menu-icona");
		body.classList.remove("body-large");
		side.classList.remove("side-small");
		profpic.classList.remove("prof-pic-small");
		i = 1;
	}else{
		x.classList.remove("menu-icona");
		body.classList.add("body-large");
		side.classList.add("side-small");
		profpic.classList.add("prof-pic-small");

		i = 0;
	}
}
