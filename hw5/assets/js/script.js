menu.onclick = function myFunc(){
	var x = document.getElementById("myTopnav");
	console.log("click");

	if(x.className === "topnav"){
		x.className += " responsive";
	} else {
		x.className = "topnav";
	}
}