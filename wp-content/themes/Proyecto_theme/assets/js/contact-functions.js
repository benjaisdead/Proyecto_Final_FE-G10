$(function(){
	function createNode(element) {
    return document.createElement(element); // Create the type of element you pass in the parameters
  }

  function append(parent, el) {
    return parent.appendChild(el); // Append the second parameter(element) to the first one
  }

	const ul = document.getElementById('clientes'); // Get the list where we will place our id
  const url = 'https://randomuser.me/api/?results=9'; // Get 10 random users

	fetch(url)
  .then((resp) => resp.json()) // Transform the data into json
  .then(function(data) {
		function createNode(element) {
	      return document.createElement(element);
	  }

	  function append(parent, el) {
	    return parent.appendChild(el);
	  }

	  const ul = document.getElementById('clientes');
	  const url = 'https://randomuser.me/api/?results=9';
	  fetch(url)
	  .then((resp) => resp.json())
	  .then(function(data) {
	    let clientes = data.results;
	    return clientes.map(function(author) {
	      let li = createNode('li'),
	          img = createNode('img')
	      img.src = author.picture.large;
	      append(li, img);
	      append(ul, li);
	    })
	  })
	  .catch(function(error) {
	    console.log(error);
	  });
	});

	var map = L.map('map').setView([-33.5267285, -70.6664667], 13);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

// L.marker([-33.5267285, -70.6664667]).addTo(map)
//     .bindPopup('San Simón 421, La Cisterna')
//     .openPopup();

var LeafIcon = L.Icon.extend({
    options: {
       iconSize:     [38, 95],
       shadowSize:   [50, 64],
       iconAnchor:   [22, 94],
       shadowAnchor: [4, 62],
       popupAnchor:  [-3, -76]
    }
});

var greenIcon = new LeafIcon({
    iconUrl: 'http://leafletjs.com/examples/custom-icons/leaf-green.png',
    shadowUrl: 'http://leafletjs.com/examples/custom-icons/leaf-shadow.png'
})
L.marker([-33.5267285, -70.6664667], {icon: greenIcon}).addTo(map)
    .bindPopup('San Simón 421, La Cisterna')
    .openPopup();


});
