function init() {
		 /* body... */ 
		 var mapDiv = document.getElementById("mymap");
		 var mapOptions = {
		 	center:new google.maps.LatLng(4.540954, -75.674114),
		 	zoom: 15,
		 	mapTypeControl: false,
      		scaleControl: true,
		 };
		 var map = new google.maps.Map(mapDiv, mapOptions);	
	 	
	 	var location = [];
	 	location.push({name:"condominio sorrernto", latlng: new google.maps.LatLng(4.549462, -75.668645)});
		 location.push({name:"Instituto CEDEC", latlng: new google.maps.LatLng(4.536396, -75.669105)});
		 location.push({name:".................", latlng: new google.maps.LatLng(4.536951, -75.671176)});
		 location.push({name:"Centro comercial el castillo Local 10", latlng: new google.maps.LatLng(4.534221, -75.672358)});
		 location.push({name:"Barberia y peluqueria ALBEIRO", latlng: new google.maps.LatLng(4.532022, -75.674782)});
		 location.push({name:"NSTITUCIÓN EDUCATIVA MARCELINO CHAMPAGNAT", latlng: new google.maps.LatLng(4.535854, -75.666879)});
		 location.push({name:"optica vision & vision", latlng: new google.maps.LatLng(4.536434, -75.670114)});
		 location.push({name:"GIMNASIO TOTLA GYM ", latlng: new google.maps.LatLng(4.539297, -75.677785)});
		 location.push({name:"Estetica Felina y Canina MOTICAS", latlng: new google.maps.LatLng(4.538863, -75.668415)});
		 
		 var bounds = new google.maps.LatLngBounds ();
		 for (var i = 0; i < location.length; i++) {
		 	var marker = new google.maps.Marker({position: location[i].latlng, map:map,title:location[i].name});
		 	bounds.extend (location[i].latlng);
		 }	
		 map.fitBounds (bounds);
	}
	window.onload = init;