function sendanswer(answer, username, passwd) {
	var xhttp = new XMLHttpRequest();
	var params = "function=sendanswer&answer=" + answer + "&username=" + username;
	xhttp.open("POST", "process.php", true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send(params);
	console.log("send post request to php file");
}

function showanswers() {
	var xhttp = new XMLHttpRequest();
	var params = "function=showanswers&passwd=saasmannistsaas";
	xhttp.onreadystatechange = function() {
    if (xhttp.readyState == XMLHttpRequest.DONE) {
        document.getElementById("answer").value = xhttp.responseText;
		}
	}
	xhttp.open("GET", "process_r.php", true);
	xhttp.send(params);
	console.log("requested answers");
	var el = document.getElementById("answer").value;
	document.getElementById("answer").value = xhttp.responseText;
}