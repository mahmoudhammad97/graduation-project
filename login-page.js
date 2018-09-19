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
	var toplogin = (height - 293)/2;
	document.getElementById("loginform").style.Top = toplogin +"px";
	document.getElementById("").style.width  = (width - 50) +"px";
}