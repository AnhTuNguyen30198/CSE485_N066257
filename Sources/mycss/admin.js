var chooseThem = document.getElementById('choose-them');
var chooseXoa	=	document.getElementById('choose-xoa');
var chooseSua	=	document.getElementById('choose-sua');
var chooseView	=	document.getElementById('choose-view');

var them = document.getElementById('them');
var xoa = document.getElementById('xoa');
var sua = document.getElementById('sua');
var view = document.getElementById('view');

if(chooseThem){
chooseThem.addEventListener('click',function(){
	them.style.display = "block";
	xoa.style.display = "none";
	sua.style.display = "none";
	view.style.display = "none";
},false);
}

if(chooseXoa){
chooseXoa.addEventListener('click',function(){
	them.style.display = "none";
	xoa.style.display = "block";
	sua.style.display = "none";
	view.style.display = "none";
},false);
}

if(chooseSua){
chooseSua.addEventListener('click',function(){
	them.style.display = "none";
	xoa.style.display = "none";
	sua.style.display = "block";
	view.style.display = "none";
},false);
}

if(chooseView){
chooseView.addEventListener('click',function(){
	them.style.display = "none";
	xoa.style.display = "none";
	sua.style.display = "none";
	view.style.display = "block";
},false);
}

