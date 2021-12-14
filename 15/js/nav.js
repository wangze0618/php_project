window.onload = function() {
	var content_left = document.getElementById('content_left');
	var content_about = document.getElementById('about');
	var content_left_li = content_left.getElementsByTagName('li');
	var content_info = document.getElementsByClassName('content_info');
	// var sec2_con_details=sec2_content[0].getElementsByClassName('sec2_con_details')
	console.log(content_left);
	console.log(content_left_li);
	console.log(content_left_li.length);
	console.log(content_info);

	for (i = 0; i < content_left_li.length; i++) {
		var li = content_left_li[i];
		li.index = i;
		li.onmouseover = function() {
			for (j = 0; j < content_left_li.length; j++) {
				content_left_li[j].className = "";
				content_info[j].style.display = "none";
							}
			this.className = "nav_selected";
			content_info[this.index].style.display = "block";
			// content_about.style.display="none";
		}
	}
}
