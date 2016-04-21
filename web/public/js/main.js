function getAjax() {
	var xmlhttp;
	if(window.XMLHttpRequest){

		xmlhttp = new XMLHttpRequest();
	}
	else{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
  	return xmlhttp;
}



function lgn() 
{
	var eml = toLowerCase(document.getElementById("eml").value);
	var psd = document.getElementById("psd").value;

	if(eml!=null && psd!=null && eml!="" && psd!="")
	{
		    alert("enviando la info por POST");
			var xmlhttp = getAjax();
			xmlhttp.open("POST","log/{"+eml+"}/{"+psd+"}", true);
			xmlhttp.send();	
			xmlhttp.onreadystatechange = function() {
		    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
		    	  document.getElementById("response").innerHTML=xmlhttp.responseText;
		    	  alert("done log");
		    	} 
		    	else alert("error - adding client");
		    }
	}
	else
		{
			alert("revise los datos ingresados");
		}
}