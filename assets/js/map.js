let tileLayer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  'attribution': 'Map data Â© <a href="http://openstreetmap.org">OpenStreetMap</a> contributors'
});

let Google_WorldImagery = L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}',{
  maxZoom: 20,
  subdomains:['mt0','mt1','mt2','mt3']
});

let map = new L.Map('map', {
  'center': [27.53978, 41.73196],
  'zoom': 18,
  'layers': [Google_WorldImagery]
});

let polygon = L.polygon([
  [27.53990, 41.73342],
  [27.54017, 41.73254],
  [27.53998, 41.73234],
  [27.53965, 41.73236],
  [27.53941, 41.73336],
  [27.53980, 41.73343],
]).addTo(map);
polygon.bindPopup("موطن وأملاك عائلة الجريفاني");

map.on('popupopen', function(openEvent){
  $(function () {
    $('#marker-popover').popover();
  });
});

let marker = L.marker([39.73, -104.99])
.addTo(map)
.bindPopup('<button id="marker-popover" type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Popover</button>');