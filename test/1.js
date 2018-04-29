function getData() {
	var slug = document.getElementById('123').innerHTML;
	console.log(slug);
	$.ajax({
		type: 'POST',
		url: '1.php',
		data: {slug: slug},
		success: function(response) {
			console.log(response);
		}
	});
}