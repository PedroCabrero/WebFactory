$(document).ready(function(){
	$('a[href=#seccion_1]').click(function (event)
	{
	event.stopPropagation();
	var Position = jQuery('[id="seccion_1"]').offset().top;
	jQuery('html, body').animate({ scrollTop: Position }, 1100);
	return false;
	});
});