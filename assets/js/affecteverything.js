window.onload = function() {
	x = document.getElementById("footer").getElementsByClassName("col-4")[2];
	x.getElementsByTagName("h2")[0].innerHTML = "Editorial";
	x.getElementsByTagName("ul")[0].innerHTML = "<a href=\"Editorials.html\"><li>Almost all editions</li></a>";

	if(y = document.getElementById("register-now"))
	{
		for(var i = 0; i < 4; i++)
		{
			y = y.parentNode;
		}
		y.parentNode.remove(y);
	}
};