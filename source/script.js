var nav = document.getElementById("navbar");
var search = document.getElementById("search");
var main = document.getElementById("main");
var title = document.getElementById("head1");
var stick = nav.offsetTop;
		
var upbutton = document.getElementById("up");
		
window.onscroll = function() {scroll()};
		
function scroll() {
	if(document.body.scrollTop > 500 || document.documentElement.scrollTop > 500){
	upbutton.style.display="block";
	}
	else {
	upbutton.style.display="none";
	}
			
	if(window.pageYOffset >= stick){
		nav.classList.add("stick");
		search.style.display="none";
		main.style.marginTop="180px";
		title.style.display="none";
	}else{
		nav.classList.remove("stick");
		search.style.display="inline-block";
		main.style.marginTop="50px";
		title.style.display="inline-block";
	}
}
		
function scrollToTop(){
	document.body.scrollTop = 0;
	document.documentElement.scrollTop = 0;
}