var xmlhttp = false;

try {
	xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
} catch (e) {
	try {
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	} catch (E) {
		xmlhttp = false;
	}
}

if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
	xmlhttp = new XMLHttpRequest();
}

function propinsi(id_prop){
	//alert(pilihan);
	
	var obj=document.getElementById("kota-view");
	var url='proses.php?mode=kota-view';
	url=url+'&id_prop='+id_prop
	
	xmlhttp.open("GET", url);
	
	xmlhttp.onreadystatechange = function() {
		if ( xmlhttp.readyState == 4 && xmlhttp.status == 200 ) {
			obj.innerHTML = xmlhttp.responseText;
		} else {
			obj.innerHTML = "<div align ='center'><img src='js/waiting.gif' alt='Loading' /></div>";
		}
	}
	xmlhttp.send(null);
}

function prop(id_prop){
	//alert(pilihan);

	var obj=document.getElementById("kota-view");
	var url='proses.php?mode=kota-view';
	url=url+'&id_prop='+id_prop

	xmlhttp.open("GET", url);

	xmlhttp.onreadystatechange = function() {
		if ( xmlhttp.readyState == 4 && xmlhttp.status == 200 ) {
			obj.innerHTML = xmlhttp.responseText;
		} else {
			obj.innerHTML = "<div align ='center'><img src='js/waiting.gif' alt='Loading' /></div>";
		}
	}
	xmlhttp.send(null);
}