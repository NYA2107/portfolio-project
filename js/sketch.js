const profile = new Picture('#pic-show', 'img/profile.jpg');
let list = new Array();



$( document ).ready(ready);

function ready(){
	for(let i = 1; i < 5; i++){
		list[i] = new Picture('#pic-show', 'img/'+i+'.jpg');
	}
}

function clicked(id) {
	window.location.href = "bridge.php?img_id=" + id;
}
