(function($) {
	"use strict"
	$(document).on('click', '.search-btn', function(e) {
		//
		e.preventDefault();
		$.ajax({
			type: 'GET',
			url: 'http://localhost:81/demo/data.php',
			dataType: 'JSON',
			success: function(data) {
			  console.log(data);
			}
		  });
	});
	

})(jQuery);
