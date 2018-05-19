<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fahrschule-team
 */

$klassen_description = get_field('klassen_description');
$klassen_image = get_field('klassen_image');

?>

<div class="auto-klasse">
  <h2><?php the_title(); ?></h2>
  
  <div class="auto-klasse__content d-sm-flex mt-4 flex-sm-column flex-md-row">

    <div class="auto-klasse__description">
      <?php echo $klassen_description; ?>
    </div>

		<div class="auto-klasse__image">
    
    <?php if( !empty($klassen_image) ): ?>
      <img class="img-fluid img-thumbnail" src="<?php echo $klassen_image['url']; ?>" alt="<?php echo $klassen_image['alt']; ?>" />
    <?php endif; ?>

    </div>

  </div>

</div><!-- /.auto-klasse -->
