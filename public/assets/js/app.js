$(document).ready(function() {

	setTimeout(function(){
		$('.flash-msg').slideUp(function(){
			$(this).remove();
		});
	}, 7000);

});