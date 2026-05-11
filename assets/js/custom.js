//  Navigation js
document.getElementByTagName('body').addEventListener('click', closeNav);
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("menu").style.display = "none";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("menu").style.display = "block";
}
//  Counter js
$('.count').countUp({
	delay: 10,
	time: 1000
});