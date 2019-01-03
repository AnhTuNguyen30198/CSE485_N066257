//Vpopp

var vpop = document.getElementById('choose-vpop');
var kpop = document.getElementById('choose-kpop');
var usuk = document.getElementById('choose-usuk');

var boxvpop = document.getElementsByClassName('boxvpop');
var boxkpop = document.getElementsByClassName('boxkpop');
var boxusuk = document.getElementsByClassName('boxusuk');

if(vpop){
vpop.addEventListener('click',function(){

	boxvpop[0].style.display = "block";
	boxvpop[1].style.display = "block";
	boxvpop[2].style.display = "block";
	
	boxkpop[0].style.display = "none";
	boxkpop[1].style.display = "none";
	boxkpop[2].style.display = "none";
	
	boxusuk[0].style.display = "none";
	boxusuk[1].style.display = "none";
	boxusuk[2].style.display = "none";
	
},false);
};

if(kpop){
kpop.addEventListener('click',function(){
	boxvpop[0].style.display = "none";
	boxvpop[1].style.display = "none";
	boxvpop[2].style.display = "none";
	
	boxkpop[0].style.display = "block";
	boxkpop[1].style.display = "block";
	boxkpop[2].style.display = "block";
	
	boxusuk[0].style.display = "none";
	boxusuk[1].style.display = "none";
	boxusuk[2].style.display = "none";
},false);
};

if(usuk){
usuk.addEventListener('click',function(){
	boxvpop[0].style.display = "none";
	boxvpop[1].style.display = "none";
	boxvpop[2].style.display = "none";
	
	boxkpop[0].style.display = "none";
	boxkpop[1].style.display = "none";
	boxkpop[2].style.display = "none";
	
	boxusuk[0].style.display = "block";
	boxusuk[1].style.display = "block";
	boxusuk[2].style.display = "block";
},false);
};
