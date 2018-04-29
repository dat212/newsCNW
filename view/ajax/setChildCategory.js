function setChildCategory() {
	// console.log("wtf");
	var xmlhttp = new XMLHttpRequest();

	
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
		
			var arr_child = JSON.parse(this.response);
			for (var index = 0; index < arr_child.length; ++index) {
				category_id = parseInt(arr_child[index][0]['parent_id']);
				root = document.getElementById(category_id);
				console.log(root);
				li = root.parentElement.parentElement;
				a = root.parentElement;
					// console.log(root);	
					// console.log(li);
				// Set to view child category
				li.classList.add("dropdown");
				root.parentElement.setAttribute("data-toggle", "dropdown");
					// console.log(li);

				

				// Set value to ul list contain child category
				var ul = document.createElement("ul");
				ul.setAttribute("class", "dropdown-menu");
				ul.setAttribute("role", "menu");
				li.appendChild(ul);
				
				for (var i = 0; i < arr_child[index].length; ++i) {
					child = arr_child[index][i];
						// console.log(arr_child[index][i]);
					

					// Set value of child category
					li_child = document.createElement("li");
					a_child = document.createElement("a");
					a_child.setAttribute("href", "#");
					a_child.textContent = child['label'];
					li_child.appendChild(a_child);
					ul.appendChild(li_child);
					
					

					
					
				}
			}
			
		}
	}
	xmlhttp.open("GET", "../controller/getChildCategory.php", true);
	xmlhttp.send();
}