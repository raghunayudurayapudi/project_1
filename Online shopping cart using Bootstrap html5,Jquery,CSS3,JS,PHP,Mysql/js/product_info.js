function product_info(){
	console.log("welcome");
	obj ={"table1":"products","table2":"movies","table4":"games","limit":10};
	dbParam = JSON.stringify(obj);
	xmlhttp = new XMLHttpRequest();
	
	xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("demo").innerHTML = this.responseText;
    }
	};
	xmlhttp.open("GET", "products.php?x=" + dbParam, true);	
	xmlhttp.send();
}
