function setCategorySidebar() {

	var xmlhttp = new XMLHttpRequest();
	
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			category = JSON.parse(this.response);
				// console.log(category);
			var list_category_sidebar = document.getElementsByClassName("cat-item");
			ul = list_category_sidebar.parentElement;
			if (category.length < list_category_sidebar.length) {
				for (var i = 0; i < list_category_sidebar.length; ++i) {
					if (i < category.length) {
						list_category_sidebar[i].children[0].text = category[i]['label'];
					}
					else {
						list_category_sidebar[i].children[0].style.display = "none";
					}
				}
			} 
			else if (category.length > list_category_sidebar.length) {
				for (var i = 0; i < category.length; ++i) {
					if (i < list_category_sidebar.length) {
						list_category_sidebar[i].children[0].text = category[i]['label'];
					}
					else {
						li = document.createElement("li");
						li.classList.add("cat-item");
						a = document.createElement("a");
						a.setAttribute("href", "#");
						a.textContent = category[i]['label'];
						li.appendChild(a);
						ul.appendChild(li);
							// console.log(li);
					}
				}
			}
		}
	}
	xmlhttp.open("GET", "../controller/getRootCategory.php", true);
	xmlhttp.send();
}
