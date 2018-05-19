<?php 

$sponsor_description = get_field('sponsor_description');

?>

<div class="sponsor-content">
  <h2><?php the_title(); ?></h2>

  <div class="sponsor-content__description">
    <?php echo $sponsor_description; ?>
  </div>
</div>