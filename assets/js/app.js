$(document).ready( function(){
  const path = window.location.pathname;
  const page_end = path.split("/").pop();
  const page_start = page_end.split(".")[0];
  
  if (page_end != '' && page_end != 'home.php'){
    console.log('page', page_start);
    $.get("../includes/get_"+ page_end, function(data, status){
      console.log(data);
      $('#fetch_'+ page_start).html(data)
    });
  }
})
