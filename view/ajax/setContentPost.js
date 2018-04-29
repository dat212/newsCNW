function setContentPost() {
	var slug = document.getElementById("slug").innerHTML;
	$.ajax({
		type: 'POST', 
		url: '../controller/getContentPost.php',
		data: {slug: slug},
		success: function(response) {
			response = JSON.parse(response);
			console.log(response);
			root = document.getElementsByClassName("single_page_content")[0];
			img = root.children[0];
			p = root.children[1];
			p.innerHTML = response[0]['body'];
			img.src = "images/" + response[0]['url_thumb'];


		}
	});
}
// function getData() {
// 	var slug = document.getElementById('123').innerHTML;
// 	console.log(slug);
// 	$.ajax({
// 		type: 'POST',
// 		url: '../controller/getContentPost.php',
// 		data: {slug: slug},
// 		success: function(response) {
// 			console.log(response);
// 		}
// 	});
// }