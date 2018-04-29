function setLatestPost() {
	// console.log("wtf");
	var xmlhttp = new XMLHttpRequest();
	
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
		
			var latest_post = JSON.parse(this.response);
			// console.log(latest_post);
			
			
			
		}
	}
	xmlhttp.open("GET", "../controller/getLatestPost.php", true);
	xmlhttp.send();
}