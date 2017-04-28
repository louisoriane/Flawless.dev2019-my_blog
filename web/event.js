$(function() {
	$('#menu-hamburger').click(function(){
		// $('#submenu').css('transform', 'translateX(0%)');
		var nav = document.querySelector('.submenu');
		nav.classList.toggle('open');
	});
});