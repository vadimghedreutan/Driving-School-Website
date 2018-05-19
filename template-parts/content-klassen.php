<?php 
$klassen_page_title = get_field('klassen_page_title');
?>

<div class="fahr-team-two">
  <h2><?php echo $klassen_page_title; ?></h2>
  <div class="card-columns">

    <?php $autoklasse = new WP_Query(array(
      'post_type' => 'klasse', 'orderby' => 'post_id', 'order' => 'ASC'
    )); ?>

    <?php 
      while($autoklasse->have_posts()) : $autoklasse->the_post();
      
      $klassen_image = get_field('klassen_image');
      $klassen_klasse = get_field('klassen_klasse');
      $klassen_title = get_field('klassen_title');
      $klassen_description = get_field('klassen_description');
    ?>
    <a href="<?php the_permalink(); ?>">
    <div class="card">
      <?php if( !empty($klassen_image) ): ?>
        <img class="img-fluid img-thumbnail" src="<?php echo $klassen_image['url']; ?>" id="mylightbox<?php echo the_ID(); ?>" alt="<?php echo $klassen_image['alt']; ?>" />
      <?php endif; ?>
      <div class="card-body">
        <p class="card-text text-muted text-lowercase"><?php echo $klassen_title; ?></p>
        <h5 class="card-text"><?php echo $klassen_klasse; ?></h5>
      </div>
    </div>
    <?php endwhile; ?>
    </a>

  </div>
</div><!-- /.fahr-team-two -->