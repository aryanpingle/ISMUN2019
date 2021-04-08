function index()
{
	// var x = document.getElementById("dates");
	// x.style.display = 'none';

	// Remove the leaders
	var y = document.getElementById("the-team");
	y.getElementsByClassName("owl-carousel")[1].remove();
	y.getElementsByTagName("header")[1].remove();

	// Change banner header
	y = document.getElementById("banner-header");
	y = y.getElementsByTagName("h2")[0];
	y.innerHTML = "The International Singhania Model United Nations 2019";

	// var z = document.getElementsByClassName("owl-item")[0].getElementsByTagName("img")[0];
	// z.src = "https://compassionate-nobel-a2561f.netlify.com/images/shrek.png";

	z = document.getElementById("pingle_description");
	z.innerHTML = "Student. Artist. Coder. Archaeologist. Osteoporosis. Proud mother of these two idiots to my right. No wait, your right. Ahhh you know what I mean.<br><br>Wow it's almost like this guy's a goddamn legend haha. I can put whatever I want here with my elite hacking skillz. Anything I want... I mean, if I was creative enough. Look, it's 3am for me right now. Give me a break.";

	// z = document.getElementById("banner");
	// z.style.backgroundImage = "url('https://compassionate-nobel-a2561f.netlify.com/images/Cistern.jpg')";
}

function replaceAllWords(newWord) {
    for (var i = 0; i < document.childNodes.length; i++) {
        checkNode(document.childNodes[i]);
    }
    function checkNode(node) {
        var nodeName = node.nodeName.toLowerCase();
        if(nodeName === 'script' || nodeName === 'style') {return;}
        if (node.nodeType === 3) {
            var text = node.nodeValue;
            var newText = text.replace(/\b\w+/g, newWord);
            node.nodeValue = newText;
        }
        if (node.childNodes.length > 0) {
            for (var j = 0; j < node.childNodes.length; j++) {
                checkNode(node.childNodes[j]);
            }
        }
    }
}

window.onload = index();