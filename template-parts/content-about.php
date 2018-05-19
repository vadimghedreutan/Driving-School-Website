<?php 
$about_image = get_field('about_image');
$service_image = get_field('service_image');
$about_description = get_field('about_description');



?>

<div class="about">
  <h2>FAHRSCHULE-TEAM IN PFORZHEIM</h2>
  
  <div class="about__content d-sm-flex mt-4 flex-sm-column flex-md-row">
    <div class="about__image">
    
    <a href="#" data-featherlight="#mylightbox">
      <?php if( !empty($about_image) ): ?>
        <img class="img-fluid img-thumbnail" src="<?php echo $about_image['url']; ?>" id="mylightbox" alt="<?php echo $about_image['alt']; ?>" />
      <?php endif; ?>
    </a>
    </div>
    <div class="about__description">
      <?php echo $about_description; ?>
    </div>
  </div>

</div><!-- /.about -->

<div class="services mt-4">
  <h2>UNSERE LEISTUNGEN</h2>

  <div class="services__content mt-4 d-sm-flex flex-sm-column flex-md-row">
    <div class="services__list">
      <ul>
      <?php $myservices = new WP_Query(array(
        'post_type' => 'services', 'orderby' => 'post_id', 'order' => 'ASC'
      )); ?>
      <?php while($myservices->have_posts()) : $myservices->the_post(); ?>
        <li><i class="material-icons inline-icon">check</i><?php the_title(); ?></li>
      <?php endwhile; ?>
      </ul>
    </div>
    <div class="services__image" data-aos="fade-up">
    <?php 

      if( !empty($service_image) ): ?>

        <img class="img-fluid img-thumbnail" src="<?php echo $service_image['url']; ?>" alt="<?php echo $service_image['alt']; ?>" />

      <?php endif; ?>

    </div>
  </div>
</div><!-- /.services -->

<div class="derka mt-4">
  <div class="derka__content mt-4 d-sm-flex flex-sm-column flex-md-row">
    <div class="derka__description">
      <p>Unsere Bildungseinrichtung ist ein zugelassener Träger für die Förderung der beruflichen Aus- und Weiterbildung zum Kraftfahrer nach dem Recht der Arbeitsförderung. Zugelassen durch DEKRA Certification GmbH, welche von der Anerkennungsstelle der Bundesagentur für Arbeit eine anerkannte Zertifizierungsstelle ist.</p>
    </div>
    <div class="derka__image mb-4">
      <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/wsb_103x131_AZAV_ger_tc_p.png" class="img-fluid" alt="">
    </div>
  </div>
</div><!-- /.derka -->