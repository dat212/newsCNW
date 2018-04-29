function getData() {
	var slug = document.getElementById('123').innerHTML;
	console.log(slug);
	$.ajax({
		type: 'POST',
		url: '../controller/getContentPost.php',
		data: {slug: slug},
		success: function(response) {
			console.log(response);
		}
	});
}