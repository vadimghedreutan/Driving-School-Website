<?php 
$auto_park_title = get_field('auto_park_title');
?>

<div class="fahr-team-two">
  <h2><?php echo $auto_park_title; ?></h2>
  <div class="card-columns">

    <?php $autopark = new WP_Query(array(
      'post_type' => 'autos', 'orderby' => 'post_id', 'order' => 'ASC'
    )); ?>

    <?php 
      while($autopark->have_posts()) : $autopark->the_post();
      
      $auto_image = get_field('auto_image');
      $auto_title = get_field('auto_title');
      $auto_description = get_field('auto_description');
      $auto_klassen = get_field('auto_klassen');
    
    ?>
    <div class="card">
    <a href="#" data-featherlight="#mylightbox<?php echo the_ID(); ?>">
      <?php if( !empty($auto_image) ): ?>
        <img class="img-fluid img-thumbnail" src="<?php echo $auto_image['url']; ?>" id="mylightbox<?php echo the_ID(); ?>" alt="<?php echo $auto_image['alt']; ?>" />
      <?php endif; ?>
    </a>
      <div class="card-body">
        <h5 class="card-title"><?php echo $auto_title; ?></h5>
        <p class="card-text text-muted"><?php echo $auto_description; ?></p>
        <p class="card-text"><?php echo $auto_klassen; ?></p>
      </div>
    </div>
    <?php endwhile; ?>

  </div>
</div><!-- /.fahr-team-two -->