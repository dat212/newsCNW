// jQuery(document).ready(function() {
// 	var cate = document.getElementById("123");
// 	cate.onclick = function() {
// 		console.log("getdata succes");
// 	}
	
// 	// Change category test
// 	var cateArr = document.getElementsByClassName("category");
// 	console.log(cateArr);
// 	for (var i = 0; i < cateArr.length; ++i) {
// 		console.log(cateArr[i].textContent);
// 	}
	
// 	console.log("Start change category");
// 	cateArr[1].textContent = "Porn";debugger
// 	function showCategory() {

// 		// if (window.XMLHttpRequest) {
// 		// 	// Code for IE+7, Firefox, Chrome, Opera, Safari
// 		// 	xmlhttp = new XMLHttpRequest();			
// 		// } else {
// 		// 	// Code for IE6, IE5
// 		// 	xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
// 		// }
// 		var xmlhttp = new XMLHttpRequest();	
// 		xmlhttp.onreadystatechange = function() {
// 			if (this.readyState == 4 && this.status == 200) {
// 				var cateArr = document.getElementsByClassName("category");
// 				for (var i = 0; i < cateArr.length; ++i) {
// 					cateArr[i] = this.responseText;

// 				}
// 				console.log('test');
// 				console.log(this.responseText);
// 			}
// 			xmlhttp.open("GET", "../../controller/getRootCategory.php", true);
// 			xmlhttp.send();
// 		}
// 	}
// });
function showHint() {
    // debugger
    console.log('123');
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;

                var category = JSON.parse(this.response);
                for (var i = 0; i < category.length; ++i) {
                    var cate = document.createElement("p");
                    cate.innerHTML = category[i]['label']
                    document.body.appendChild(cate);
                    console.log(category[i]['label']);
                }
            }
        }
        xmlhttp.open("GET", "../controller/getRootCategory.php", true);
        xmlhttp.send();
    }