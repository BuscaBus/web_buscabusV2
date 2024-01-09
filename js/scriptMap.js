var map = L.map('map').setView([-27.593463, -48.558080], 13);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([-27.598362, -48.553845]).addTo(map)
    .bindPopup('TICEN<br> Terminal de Integração do Centro')
    .openPopup();

 