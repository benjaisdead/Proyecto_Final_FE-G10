$(function(){
	$('.main_nav__hamb-link').on('click', function(event) {
		event.preventDefault();
		$('.main_nav__elements').toggleClass('show');
	});
  // Initialize and add the map
$(function initMap() {
  // The location of Uluru
  var uluru = {lat: -33.5266811, lng: -70.66644289999999};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 16, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
});
})
