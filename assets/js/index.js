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
	z.innerHTML = "Few men can dream big, and fewer still can fulfil them. Never satisfied with 'getting the job done', Aryan strives for perfection in everything he does. He's quick of wit, big of heart and lacking of any sense of self-awareness.<br><br>He loves meta humour and penguins.";

	// z = document.getElementById("banner");
	// z.style.backgroundImage = "url('https://compassionate-nobel-a2561f.netlify.com/images/Cistern.jpg')";

    document.getElementById("the-team").getElementsByTagName("accent2")[0].innerHTML = "Dev Team";
    // document.getElementById("the-team").getElementsByTagName("img")[0].src = "https://compassionate-nobel-a2561f.netlify.com/assets/images/aryan pingle.png";
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