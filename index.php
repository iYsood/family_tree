<?php include 'header.php'; ?>

  <!-- ============================================================== -->
  <!-- Start right Content here -->
  <!-- ============================================================== -->
  <div class="main-content">
    <div class="page-content container-fluid mt-n4" id="fetch_tree_name">

<script>

const preview = function(){
    FamilyTree.pdfPrevUI.show(chart, {
      format: 'A4'
    });
  }
const chart = new FamilyTree(document.getElementById("fetch_tree_name"), {
  enableSearch: false,
  scaleInitial: FamilyTree.match.width,
  orientation: FamilyTree.orientation.top,
  siblingSeparation: 100, // بين الشخصين لنفس الأب
  levelSeparation: 85, // بين الأب والابن
  subtreeSeparation: 150, // بين الابن لاب والابن للأب الآخر
  template: 'john',
  nodeBinding: {
    field_0: "name",
    field_1: "title",
    img_0: "img",
  },
  menu: {
    pdfPreview: {
      text: "معاينة للطباعة",
      icon: FamilyTree.icon.pdf(24,24, '#7A7A7A'),
      onClick: preview
    },
  },
});

chart.load([
  // { id: 1, name: "King George VI", img: "https://cdn.balkan.app/shared/f1.png", life_status: 'alive' },
  // { id: 2, mid: 1, name: "Queen Elizabeth", title: "The Queen Mother", img: "https://cdn.balkan.app/shared/f2.png", life_status: 'died' },
  //
  // { id: 3, mid: 2, name: "Queen Elizabeth II", img: "https://cdn.balkan.app/shared/f5.png", life_status: 'died' },
  // { id: 4, mid: 3, name: "Prince Philip", title: "Duke of Edinburgh", img: "https://cdn.balkan.app/shared/f3.png", life_status: 'alive' },
  // { id: 5, mid: 3, name: "Prince Philip", title: "Duke of Edinburgh", img: "https://cdn.balkan.app/shared/f3.png", life_status: 'alive' },
  // { id: 6, mid: 3, name: "Prince Philip", title: "Duke of Edinburgh", img: "https://cdn.balkan.app/shared/f3.png", life_status: 'alive' },

  <?php
    $sql = $conn->query("SELECT * FROM tree_names");
    while($row = $sql->fetch_assoc()){
      $is_father = '';
      $is_photo = $website_settings['website_url'] .'/assets/images/tree/no-avatar.png';
      $is_dead = 'alive';
      $daughter_info = '';
      $extra_info = '';

      if (!is_null($row['father'])){ $is_father = ", mid: ". $row['father']; }
      if($row['is_dead'] == true){ $is_dead = 'dead'; }

      if (!is_null($row['label'])){ $is_father .= ", label: '". $row['label'] ."'"; }
      if (!is_null($row['fullname'])){ $is_father .= ", fullname: '". $row['fullname'] ."'"; }
      if (!is_null($row['dateofbirth'])){ $is_father .= ", dateofbirth: '". $row['dateofbirth'] ."'"; }
      if (!is_null($row['city'])){ $is_father .= ", city: '". $row['city'] ."'"; }
      if (!is_null($row['work'])){ $is_father .= ", work: '". $row['work'] ."'"; }
      if (!is_null($row['death_city'])){ $is_father .= ", death_city: '". $row['death_city'] ."'"; }
      if (!is_null($row['death_date'])){ $is_father .= ", death_date: '". $row['death_date'] ."'"; }
      if (!is_null($row['photo'])){ $is_photo = "assets/images/tree/". $row['photo']; }
      if (!is_null($row['daughter_info'])){
        $daughter_info = str_replace("\r\n", "<br>", $row['daughter_info']);
        $daughter_info = " ,daughter_info: '". $daughter_info ."'"; }
      if (!is_null($row['extra_info'])){
        $extra_info = str_replace("\r\n", "<br>", $row['extra_info']);
        $extra_info = ", extra_info: '". $extra_info ."'";
      }

      echo "
        { id: ". $row['id'] .", name: '". $row['name'] ."', title: '". $row['label'] ."', img: '". $is_photo ."', life_status: '". $is_dead ."' ". $is_father . $daughter_info . $extra_info ." },";
    }
  ?>
]);
</script>

    </div>
    <div class="container-fluid">
      <div class="row justify-content-md-center">
        <!-- sample modal content -->
        <div id="viewTreeDetail" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="viewTreeDetailLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <div class="media" id="fetch_view_name_photo"></div>
                </div>
                  <div class="modal-body">
                    <div id="fetch_view_content"></div>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">اغلاق</button>
                  </div>
              </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
      </div>

<?php include 'get_footer.php'; ?>
  </div>
</div>
  <!-- end main content-->

<?php include 'footer.php'; ?>
