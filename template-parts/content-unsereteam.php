<?php
$fahrlehrer_team_title = get_field('fahrlehrer_team_title');
$buro_team_title = get_field('buro_team_title');
$buro_team_ein_name = get_field('buro_team_ein_name'); 
$buro_team_ein_iamge = get_field('buro_team_ein_image');
$buro_team_zwei_name = get_field('buro_team_zwei_name'); 
$buro_team_zwei_iamge = get_field('buro_team_zwei_image');
$buro_team_drei_name = get_field('buro_team_drei_name'); 
$buro_team_drei_iamge = get_field('buro_team_drei_image');
?>


<div class="fahr-team">
  <h2><?php echo $buro_team_title; ?></h2>
  <div class="fahr-team__content d-sm-flex flex-sm-column flex-md-row">

    <div class="fahr-team__card">
      <div class="card">
      <a href="<?php echo $buro_team_ein_iamge['url']; ?>" data-featherlight="#mylightbox">
        <?php if( !empty($buro_team_ein_iamge) ): ?>
          <img class="img-fluid img-thumbnail" src="<?php echo $buro_team_ein_iamge['url']; ?>" id="mylightbox"  alt="<?php echo $buro_team_ein_iamge['alt']; ?>" />
        <?php endif; ?>
      </a>
        <div class="card-body">
          <p class="card-text"><?php echo $buro_team_ein_name; ?></p>
        </div>
      </div>
    </div>
    <div class="fahr-team__card">
      <div class="card">
      <a href="<?php echo $buro_team_zwei_iamge['url']; ?>" data-featherlight="#mylightbox">
        <?php if( !empty($buro_team_zwei_iamge) ): ?>
          <img class="img-fluid img-thumbnail" src="<?php echo $buro_team_zwei_iamge['url']; ?>" id="mylightbox" alt="<?php echo $buro_team_zwei_iamge['alt']; ?>" />
        <?php endif; ?>
      </a>
        <div class="card-body">
          <p class="card-text"><?php echo $buro_team_zwei_name; ?></p>
        </div>
      </div>
    </div>
    <div class="fahr-team__card">
      <div class="card">
      <a href="<?php echo $buro_team_drei_iamge['url']; ?>" data-featherlight="#mylightbox">
        <?php if( !empty($buro_team_drei_iamge) ): ?>
          <img class="img-fluid img-thumbnail" src="<?php echo $buro_team_drei_iamge['url']; ?>" id="mylightbox" alt="<?php echo $buro_team_drei_iamge['alt']; ?>" />
        <?php endif; ?>
      </a>
        <div class="card-body">
          <p class="card-text"><?php echo $buro_team_drei_name; ?></p>
        </div>
      </div>
    </div>

  </div>
</div><!-- /.fahr-team -->

<div class="fahr-team-two">
  <h2><?php echo $fahrlehrer_team_title; ?></h2>
  <div class="card-columns">

    <?php $teamfahrlehrer = new WP_Query(array(
      'post_type' => 'fahrlehrer', 'orderby' => 'post_id', 'order' => 'ASC'
    )); ?>

    <?php 
      while($teamfahrlehrer->have_posts()) : $teamfahrlehrer->the_post();
      
      $fahrlehrer_image = get_field('fahrlehrer_image');
      $fahrlehrer_name = get_field('fahrlehrer_name');
      $fahrlehrer_klassen = get_field('fahrlehrer_klassen');
      $fahrlehrer_phone = get_field('fahrlehrer_phone');
    
    ?>
    <div class="card">
      <?php if( !empty($fahrlehrer_image) ): ?>
        <img class="img-fluid img-thumbnail" src="<?php echo $fahrlehrer_image['url']; ?>" alt="<?php echo $fahrlehrer_image['alt']; ?>" />
      <?php endif; ?>
      <div class="card-body">
        <h5 class="card-title"><?php echo $fahrlehrer_name; ?></h5>
        <p class="card-text text-muted"><?php echo $fahrlehrer_klassen; ?></p>
        <p class="card-text text-muted"><i class="material-icons inline-icon text-muted">phone</i> <?php echo $fahrlehrer_phone; ?></p>
      </div>
    </div>
    <?php endwhile; ?>

  </div>
</div><!-- /.fahr-team-two -->