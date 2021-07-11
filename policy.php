<html>
<head>
<script>
var xmlhttp = new XMLHttpRequest();
var flag=true;
var errors=0;

function showHint(el) {
	var str=el.value;
	document.getElementById("spinner").style.visibility="visible";
	xmlhttp.onreadystatechange = function() {		
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {	
			var m=document.getElementById("txtHint");
			m.innerHTML=xmlhttp.responseText;
			document.getElementById("spinner").style.visibility="hidden";
		}
	};
	var url="";
	
	if(el.id="uname"){
		url="xfetch.php?uname="+str;
	}
	
	xmlhttp.open("GET", url,true);
	xmlhttp.send();

}
function validate(){
	flag=true;
	un=document.frm.uname;
	if(un.value.length==0){
		flag=false;
	}
	if(errors>0)
		flag=false;
	return flag;
}
</script>
</head>
<body>

<form name="frm">
<input type="text" name="uname" value="policy" onmouseover="showHint(this)" onkeyup ="showHint(this)" id="uname"> <img id="spinner" src="pictures/loading.gif" width="20px" height="20px" style="visibility:hidden">
<p id="txtHint"></p>
<br/>
</form>
</body>
</html>