function init () {	
	 // body...  
	var mapDiv = document.getElementById("mymapUb");

	var mapOption = {
		center:new google.maps.LatLng(4.540954, -75.674114),
		 	zoom: 15,
		  	mapTypeControl: false,
      		scaleControl: true,
	};
	var fund = 'http://www.smilieicons.com/smiley/emoticons/Animals/talking-dog-emoticon.gif';
	var map = new google.maps.Map(mapDiv,mapOption);
	var posfun = new google.maps.LatLng(4.536396, -75.669105);
	var beachMarker = new google.maps.Marker({
		position: posfun,
		map: map,
		icon: fund,
		animation: google.maps.Animation.BOUNCE,
		title:"fundacion pattitas callejeras",
	});
}
	window.onload = init;