function getData(str) {
	if (str == "") {
		document.getElementById("userdata").innerHTML = "";
		return;
	} else { 
		if (window.XMLHttpRequest) {
			// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp = new XMLHttpRequest();
		} else {
			// code for IE6, IE5
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById("userdata").innerHTML = this.responseText;
			}
		};
		xmlhttp.open("GET","getuserdata.php?q="+str,true);
		xmlhttp.send();
	}
}

function getDbData(str) {
	if (str == "") {
		document.getElementById("userdata").innerHTML = "";
		return;
	} else { 
		if (window.XMLHttpRequest) {
			// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp = new XMLHttpRequest();
		} else {
			// code for IE6, IE5
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById("userdata").innerHTML = this.responseText;
			}
		};
		xmlhttp.open("GET","getuserdata.php?qdb="+str,true);
		xmlhttp.send();
	}
}

function load() {
	alert ('welcome!');
}