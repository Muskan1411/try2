$(document).on('submit', '#myForm', function() {
	$.ajax({
		url: "insertAnAd.php",
		method: "post",
		data: new FormData(this),
		success:function(data) {
			alert(data);
		}
	})
})