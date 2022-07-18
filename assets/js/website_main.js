$(document).ready( function(){
  const path = window.location.pathname;
  const page_end = path.split("/").pop();
  const page_start = page_end.split(".")[0];
  const tree_column = $('#fetch_tree_name')

  if (page_start == 'lineage' || page_start == 'about' || page_start == 'family_men'){
    $.get("includes/get_data.php?request="+ page_start, function(data, status){
      // alert("Data: " + data + "\nStatus: " + status);
      $('#fetch_'+ page_start).html(data)
    });
  }else if (page_start == 'home'){
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

  }else if (page_start == 'occasion'){
    $.get("includes/get_data.php?request="+ page_start, function(data, status){
      data = JSON.parse(data);
      $('#fetch_occasion').html('');
      if (data.length > 0){
        for (var i = 0; i < data.length; i++) {
          $('#fetch_occasion').append(`<li class="event-list" onclick="view_occasion('${data[i].title}', '${data[i].date}', '${data[i].content}', '${data[i].photo}')"><div><p class="text-primary">${data[i].date}</p><h5>${data[i].title}</h5><p class="text-muted">${data[i].content}</p></div></li>`)
        }
      }else{
        $('#fetch_occasion').html(`<li class="event-list"><div><h5>لاتوجد مناسبات</h5></div></li>`);
      }

      // console.log(data.length);
    });
  }else if (page_start == 'gallery'){
    $.get("includes/get_data.php?request="+ page_start, function(data, status){
      data = JSON.parse(data);
      $('#fetch_gallery').html('');
      if (data.length > 0){
        for (var i = 0; i < data.length; i++) {
          $('#fetch_gallery').append(`<div class="col-lg-3 col-md-6">
              <div class="gallery-box text-center card p-2">
                  <a href="assets/images/gallery/${data[i].photo}" class="text-dark gallery-popup">
                      <div class="position-relative gallery-content">
                          <div class="demo-img">
                              <img src="assets/images/gallery/${data[i].photo}" alt="" class="img-fluid mx-auto d-block rounded">
                          </div>
                          <div class="gallery-overlay">
                              <div class="gallery-overlay-icon">
                                  <i class="ti-zoom-in text-white"></i>
                              </div>
                          </div>
                          <div class="overlay-content">
                              <h5 class="font-size-14 text-truncate mb-0">${data[i].title}</h5>
                          </div>
                      </div>
                  </a>
              </div>
          </div>`)
        }
      }else{
        $('#fetch_gallery').html(`<div class="col-lg-6">
            <div class="card alert border mt-4 mt-lg-0 p-0 mb-0">
                <div class="card-body">
                    <div class="text-center">
                        <div class="mb-4">
                            <i class="mdi mdi-alert-outline display-4 text-danger"></i>
                        </div>
                        <h4 class="alert-heading font-18">لاتوجد صور في مكتبة الصور</h4>

                    </div>
                </div>
            </div>
        </div>`);
      }

      // console.log(data.length);
    });
  }else if(tree_column.length > 0){
    console.log('YESSSS');
  }
})

const view_occasion = function(title, date, content, photo){
  // console.log(data);
  $('#view_occasion_photo').html(`<img class="card-img-top img-fluid" src="assets/images/uploads/${photo}" alt="${title}">`);
  $('#view_occasion_title').html(title);
  $('#view_occasion_content').html(content);
  $('#view_occasion_date').html(date);

  $('#showOccasion').modal('show')
}
