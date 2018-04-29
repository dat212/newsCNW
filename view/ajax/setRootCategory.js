function setRootCategory() {
	// console.log("wtf");
	var xmlhttp = new XMLHttpRequest();
	
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.createAttribute("category");
			var cate = document.getElementsByClassName("category");
			
			
			var category = JSON.parse(this.response);
			
			cate[0].textContent = category[0]['label'];
			
			

			// If num of result < 4
			var ul = cate[0].parentElement.parentElement.parentElement;
			// console.log(ul);
			if (category.length < cate.length) {
				// Set value of category
			
				for (var i = 0; i < cate.length; ++i) {
					if (i < category.length) {
						cate[i].textContent = category[i]['label'];
						
						// cate[i].setAttribute("category", category[i]['id_cate']);
						cate[i].setAttribute("id", category[i]['id_cate']);
					} 
					else {
						cate[i].parentElement.parentElement.style.display = "none";
						// console.log(cate[i].parentElement.parentElement.nodeName);
					}

				}
			} 
			else if (category.length > cate.length) {
				for (var i = 0; i < category.length; ++i) {
					if ( i < cate.length) {
					cate[i].textContent = category[i]['label'];
					cate[i].setAttribute("id", category[i]['id_cate']);
					// cate[i].setAttribute("category", category[i]['id_cate']);
				}
				else {
					// Create node <li>
					var li = document.createElement("LI");
					var a = document.createElement("A");
					var cateElement = document.createElement("DIV");
					cateElement.textContent = category[i]['label'];
					cateElement.setAttribute("id", category[i]['id_cate']);
					// cateElement.setAttribute("category", category[i]['id_cate']);
					cateElement.classList.add("category");
					a.appendChild(cateElement);
					li.appendChild(a);
					
					ul.insertBefore(li, document.getElementById("contact-us").parentElement);
					// console.log(li);
				}
				}
				
			}
		}
	}
	xmlhttp.open("GET", "../controller/getRootCategory.php", true);
	xmlhttp.send();
}