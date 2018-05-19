<?php 
$contact_form_title = get_field('contact_form_title');

?>


<div class="kontakt">
  <h2><?php the_title(); ?></h2>

  <div class="kontakt__maps">
    <?php echo do_shortcode('[gmap-embed id="197"]');?>
  </div>

  <div class="kontakt__forms">
    <h2><?php echo $contact_form_title ?></h2>

    <?php echo do_shortcode( '[contact-form-7 id="198" title="Kontakt"]' ); ?>
    

  </div>
</div>