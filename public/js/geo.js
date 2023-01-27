var map = L.map('map').setView([-23.5489, -46.6388], 7.4);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">Map</a>'
}).addTo(map);



L.marker([-23.5489, -46.6388], 13).addTo(map)
L.marker([ -23.9618, -46.3322], 13).addTo(map)
//L.marker([-8.27519, -38.0376], 13).addTo(map)
L.marker([-23.5062, -47.4559], 13).addTo(map)
//L.marker([-8.23255, -35.4619], 13).addTo(map)


L.circle([-23.5489, -46.6388], {radius: 100000}).addTo(map)

