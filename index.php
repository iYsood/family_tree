<?php include 'header.php'; ?>

<!--Some Feature -->
<section class="single-feature padding_bottom padding_top_half" id="tree">

</section>
<!--Some Feature ends-->
<!--Tree Charts-->
<script src="<?php echo $website_settings['website_url']; ?>/assets/js/FamilyTree.js"></script>
<script>
  var chart = new FamilyTree(document.getElementById("tree"), {
    enableSearch: false,
    levelSeparation: 80,
    menu: {
      pdf: { text: "Export PDF" },
      png: { text: "Export PNG" }
    },
    siblingSeparation: 120,
    template: 'john',
    nodeBinding: {
      field_0: "name",
      field_1: "title",
      img_0: "img",
    }
  });


  chart.load([
    { id: 1, pids: [0], name: "محمد", title: "ينتسبون الى الابينداء من المفضل من ال يحيا من عبدة من قبيلة شمر", img: "<?php echo $website_settings['website_url']; ?>/assets/images/no_avatar.png", life_state: 'dead' },
    { id: 2, mid: 1, name: "جريفان", img: "<?php echo $website_settings['website_url']; ?>/assets/images/no_avatar.png", life_state: 'dead' },
    { id: 3, mid: 2, name: "محمد", img: "<?php echo $website_settings['website_url']; ?>/assets/images/no_avatar.png", life_state: 'dead' },

    { id: 4, mid: 3, name: "Queen Elizabeth II", img: "<?php echo $website_settings['website_url']; ?>/assets/images/no_avatar.png", life_state: 'dead' },
    { id: 5, mid: 3, name: "Queen Elizabeth II", img: "<?php echo $website_settings['website_url']; ?>/assets/images/no_avatar.png", life_state: 'alive' },
    { id: 6, mid: 3, name: "Queen Elizabeth II", img: "<?php echo $website_settings['website_url']; ?>/assets/images/no_avatar.png", life_state: 'dead' },
    { id: 7, mid: 3, name: "Prince Philip", img: "<?php echo $website_settings['website_url']; ?>/assets/images/no_avatar.png", life_state: 'alive' },

    { id: 8, mid: 4, name: "Prince Philip", img: "<?php echo $website_settings['website_url']; ?>/assets/images/no_avatar.png", life_state: 'alive' },
    { id: 9, mid: 5, name: "Prince Philip", img: "<?php echo $website_settings['website_url']; ?>/assets/images/no_avatar.png", life_state: 'alive' },
    { id: 10, mid: 5, name: "Prince Philip", img: "<?php echo $website_settings['website_url']; ?>/assets/images/no_avatar.png", life_state: 'alive' },
    { id: 11, mid: 5, name: "Prince Philip", img: "<?php echo $website_settings['website_url']; ?>/assets/images/no_avatar.png", life_state: 'alive' },

  ]);
</script>

<?php include 'footer.php'; ?>
