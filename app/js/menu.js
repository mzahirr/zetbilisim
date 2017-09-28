$(document).ready(function() {
    $('.container-menu').click(function(){
    	$('.menuBar').toggle();
    });
})

$(document).ready(function() {
	$('.opt').click(function() {
		$('.opt').removeClass('selected');
		$(this).addClass('selected');
	})
})

$(document).ready(function() {
	$('.opt2').click(function() {
		$('.opt2').removeClass('selected');
		$(this).addClass('selected');
	})
})