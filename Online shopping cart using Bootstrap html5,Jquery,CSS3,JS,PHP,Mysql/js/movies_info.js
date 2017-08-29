
			function movies_info(){
	 document.getElementById("product").innerHTML="Welcome";
	obj ={"table1":"products","table2":"movies","table3":"actor","table4":"actress","limit":10};
	dbParam = JSON.stringify(obj);
	xmlhttp = new XMLHttpRequest();
	
	xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("product").innerHTML = this.responseText;
    }
	};
	xmlhttp.open("GET", "movies.php?w=" + dbParam, true);	
	xmlhttp.send();
}
			