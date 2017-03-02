function getData(str) {
	if (str == "") {
		document.getElementById("txtsearchresult").innerHTML = "";
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
				document.getElementById("txtsearchresult").innerHTML = this.responseText;
			}
		};
		xmlhttp.open("GET","getuserdata.php?q="+str,true);
		xmlhttp.send();
	}
}

function getDbData(str) {
	if (str == "") {
		document.getElementById("txtdbsearchresult").innerHTML = "";
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
				document.getElementById("txtdbsearchresult").innerHTML = this.responseText;
			}
		};
		xmlhttp.open("GET","getuserdata.php?qdb="+str,true);
		xmlhttp.send();
	}
}


function showUser(str) {
	if (str == "") {
		document.getElementById("txtselectionresult").innerHTML = "";
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
				document.getElementById("txtselectionresult").innerHTML = this.responseText;
			}
		};
		xmlhttp.open("GET","getuserdata.php?selection="+str,true);
		xmlhttp.send();
	}
}









function load() {
	//alert ('welcome!');
}