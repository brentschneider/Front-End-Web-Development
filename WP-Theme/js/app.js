jQuery(document).ready(function($) {

	$(document).foundation();
	
	$( ".nav-toggle" ).click(function() {
	  $(this).toggleClass("open");
	  $("nav").fadeToggle(100);
	  
	  console.log('nav-toggle clicked')

	  return false;
	});
});