<?php 
$lkw_title = get_field('lkw_weiterbildung_title');
$lkw_description = get_field('lkw_weiterbildung_description');
?>

<div class="lkw-content">
  <h2><?php echo $lkw_title; ?></h2>

  <div class="lkw-content__description">
    <?php echo $lkw_description;  ?>
  </div>
</div>