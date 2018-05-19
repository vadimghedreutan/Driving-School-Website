<?php 

$impressum_description = get_field('impressum_description');

?>

<div class="impressum-content">
  <h2><?php the_title(); ?></h2>

  <div class="impressum-content__description">
    <?php echo $impressum_description; ?>
  </div>
</div>