<?php 

$agb_description = get_field('agb_description');

?>

<div class="agb-content">
  <h2><?php the_title(); ?></h2>

  <div class="agb-content__description">
    <?php echo $agb_description; ?>
  </div>
</div>