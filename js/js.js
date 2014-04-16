/* gallery on frontpage */
$(".main .jcarousellite").jCarouselLite({
	btnNext: ".main .next",
	btnPrev: ".main .prev",
	speed: 500,
	easing: "easeinout",
	mouseWheel: true,
	circular: true
});

/* cool menu effects*/
//$(function() { $("#1").lavaLamp({ fx: "backout", speed: 700 })});



/* button top left to show grid*/
function toggleGrid() {
var toggle = document.getElementById('toggleGrid');
var container;
if(toggle.innerHTML == 'Hide Grid') {
  toggle.innerHTML = 'Show Grid';
  ripClass('');
}
else if(toggle.innerHTML == 'Show Grid') {
  toggle.innerHTML = 'Hide Grid';
  ripClass(' showgrid');
}
}

function ripClass(c) {
if(document.getElementsByClassName) {
  container = document.getElementsByClassName('container');
  for(var i=0; i < container.length; i++) {
	container[i].className = 'container' + c;
  }
}
else {
  container = document.getElementsByTagName('div');
  for(var i=0; i < container.length; i++) {
	if(container[i].className == 'container') {
	  container[i].className = 'container' + c;
	}
	else if(container[i].className == 'container showgrid') {
	  container[i].className = 'container';
	}
  }
}
}