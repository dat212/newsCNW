function setMainContent() {
	// console.log("wtf");
	var xmlhttp = new XMLHttpRequest();
	
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
		
			var main_content = JSON.parse(this.response);
			console.log("Thông tin trả về");
			console.log(main_content);
			// console.log(main_content[0]);		
			console.log("Các chuyên mục");
			var list_post = document.getElementsByClassName("single_post_content");
			console.log(list_post[0]);
			console.log(list_post[1]);
			console.log(list_post[2]);
			// console.log(list_post[0].children[1]);
			
			// Set header title
				// list_post[0].children[0].children[0].textContent = main_content[0];
			console.log("Mỗi thẻ ảnh to");
			var list_figure = document.getElementsByClassName("bsbig_fig");
			// console.log(list_figure);

				// for (var i = 0; i < list_figure.length ; ++i) {
				// 	// i = 0;
				// 	root = list_figure[0];
				// 	// Set link to click image
				// 	root.children[0].href = "m.facebook.com";
				// 	root.children[0].children[0].src = "images/" + main_content[1][0]['url_thumb'];
				// 	// Set link to click title and set title
				// 	root.children[1].children[0].href = "m.facebook.com";
				// 	root.children[1].children[0].text = main_content[1][0]['title'];
				// 	// Set description
				// 	root.children[2].textContent = main_content[1][0]['descr'];



				// }
			for (var cate = 0; cate < 2; ++cate) {

				// Set title
				list_post[cate].children[0].children[0].textContent = main_content[2 * cate];

				// Set image big
					// Get to figure tag contain image, link
				if (cate == 0) {
					figure = list_post[cate].children[1].children[0].children[0].children[0];
				}
				else {
					figure = list_post[cate].children[1].children[0].children[0];
				}
					// console.log(figure);

					// Set link to click image and image
				figure.children[0].href = main_content[2*cate+1][0]['slug'];
				figure.children[0].children[0].src = "images/" + main_content[2 * cate + 1][0]['url_thumb'];
					// Set link to click title and set title
				figure.children[1].children[0].href = main_content[2*cate+1][0]['slug'];
				figure.children[1].children[0].text = main_content[2*cate + 1][0]['title'];
					// Set description
				figure.children[2].textContent = main_content[2*cate+1][0]['descr'];

				// Set image small
				if (cate == 0) {
					ul = list_post[cate].children[2].children[0];
				}
				else {
					ul = list_post[cate].children[2];
				}

				for (var i = 0; i < 4; ++i) {
						if (main_content[2*cate+1].length > i + 1) {
								// tag a contain img
							a = ul.children[i].children[0].children[0];
							a.href = main_content[2*cate+1][i+1]['slug'];
							a.children[0].src = "images/" + main_content[2*cate+1][i+1]['url_thumb'];
							// tag div contain a with title
							div = ul.children[i].children[0].children[1];
							div.children[0].href = main_content[2*cate+1][i+1]['slug'];
							div.children[0].text = main_content[2*cate+1][i+1]['title'];
						}
						else {
							ul.children[i].style.display = 'none';
						}
				}


			}

		}
	}
	xmlhttp.open("GET", "../controller/getMainContent.php", true);
	xmlhttp.send();
}