<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
	<script type="text/javascript">
	function loadContent(cari) {
		var httpRequest = new XMLHttpRequest();
		httpRequest.onreadystatechange =function(){
			if (this.readyState == 4 && this.status == 200){
				document.getElementById("hasil").innerHTML = this.responseText;
			}
		};
		httpRequest.open("GET","cari.php?q="+cari,true);
		httpRequest.send();
	}	
</script>
<body>

<div id="ajax">
	<h1>pencarian data</h1>
	<input type="text" name="dataCari" onkeyup="loadContent(this.value)">
	<div id="hasil"></div>
</div>
</body>
</html>