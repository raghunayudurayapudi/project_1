
			function games_info(){
	 document.getElementById("product").innerHTML="Welcome";
	obj ={"table1":"products","table2":"games","table3":"categories"};
	dbParam = JSON.stringify(obj);
	xmlhttp = new XMLHttpRequest();
	
	xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("product").innerHTML = this.responseText;
    }
	};
	xmlhttp.open("GET", "games.php?w=" + dbParam, true);	
	xmlhttp.send();
}
		