var height = window.innerHeight;
var width  = window.innerWidth;
function setsize() 
{
	var height = window.innerHeight;
	var width  = window.innerWidth;
	document.getElementById("main").style.height = height +"px";
	document.getElementById("main").style.width  = width +"px";
	document.getElementById("img-background").style.height = height +"px";
	document.getElementById("img-background").style.width  = width +"px";
	var toplogin = (height - 295)/2;
	document.getElementById("loginform").style.top = toplogin +"px";
	var centergoto = (width - 60)/2;
	document.getElementById("goto").style.left  = centergoto +"px";
}
function gotologin()
{
	document.getElementById("main2").style.display  = "none";	
	document.getElementById("main1").style.display  = "block";
	document.getElementById("main1").style.width = 100 + "%";
	document.getElementById("main1").style.height = 100 + "%";
	document.getElementById("main1").style.animationName  = "main1intop";	
}