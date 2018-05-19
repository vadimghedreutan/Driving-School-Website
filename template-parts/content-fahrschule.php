<?php
$buro_title = get_field('buro_title'); 
$buro_left_image = get_field('buro_left_image');
$buro_center_image = get_field('buro_center_image');
$buro_right_image = get_field('buro_right_image');

$fahrschule_team_title = get_field('fahrschule_team_title');
$fahrschule_team_left_img = get_field('fahrschule_team_left_image');
$fahrschule_team_center_img = get_field('fahrschule_team_center_image');
$fahrschule_team_right_img = get_field('fahrschule_team_right_image');

$unterrichtsraume_title = get_field('unterrichtsraume_title');
$unterrichtsraume_left_img = get_field('unterrichtsraume_left_image');
$unterrichtsraume_center_img = get_field('unterrichtsraume_center_image');
$unterrichtsraume_right_img = get_field('unterrichtsraume_right_image');

?>

<div class="team-one">
  <h2><?php echo $buro_title; ?></h2>
  <div class="team-one__content d-sm-flex flex-sm-column flex-md-row align-items-stretch">
    <div class="team-one__image">
    <a href="<?php echo $buro_left_image['url']; ?>" data-featherlight="#mylightbox">
      <?php if( !empty($buro_left_image) ): ?>
        <img class="img-fluid img-thumbnail" src="<?php echo $buro_left_image['url']; ?>" id="mylightbox" alt="<?php echo $buro_left_image['alt']; ?>" />
      <?php endif; ?>
    </a>
    </div>
    <div class="team-one__image">
    <a href="<?php echo $buro_center_image['url']; ?>" data-featherlight="#mylightbox">
      <?php if( !empty($buro_center_image) ): ?>
        <img class="img-fluid img-thumbnail" src="<?php echo $buro_center_image['url']; ?>" id="mylightbox" alt="<?php echo $buro_center_image['alt']; ?>" />
      <?php endif; ?>
    </a>
    </div>
    <div class="team-one__image">
    <a href="<?php echo $buro_right_image['url']; ?>" data-featherlight="#mylightbox">
      <?php if( !empty($buro_right_image) ): ?>
        <img class="img-fluid img-thumbnail" src="<?php echo $buro_right_image['url']; ?>" id="mylightbox" alt="<?php echo $buro_right_image['alt']; ?>" />
      <?php endif; ?>
    </a>
    </div>
  </div>
</div><!-- /.team-one -->

<div class="team-one">
  <h2><?php echo $fahrschule_team_title; ?></h2>
  <div class="team-one__content d-sm-flex flex-sm-column flex-md-row align-items-stretch">
    <div class="team-one__image">
    <a href="<?php echo $fahrschule_team_left_img['url']; ?>" data-featherlight="#mylightbox">
      <?php if( !empty($fahrschule_team_left_img) ): ?>
        <img class="img-fluid img-thumbnail" src="<?php echo $fahrschule_team_left_img['url']; ?>" id="mylightbox" alt="<?php echo $fahrschule_team_left_img['alt']; ?>" />
      <?php endif; ?>
    </a>
    </div>
    <div class="team-one__image">
    <a href="<?php echo $fahrschule_team_center_img['url']; ?>" data-featherlight="#mylightbox">
      <?php if( !empty($fahrschule_team_center_img) ): ?>
        <img class="img-fluid img-thumbnail" src="<?php echo $fahrschule_team_center_img['url']; ?>" id="mylightbox" alt="<?php echo $fahrschule_team_center_img['alt']; ?>" />
      <?php endif; ?>
    </a>
    </div>
    <div class="team-one__image">
    <a href="<?php echo $fahrschule_team_right_img['url']; ?>" data-featherlight="#mylightbox">
      <?php if( !empty($fahrschule_team_right_img) ): ?>
        <img class="img-fluid img-thumbnail" src="<?php echo $fahrschule_team_right_img['url']; ?>" id="mylightbox" alt="<?php echo $fahrschule_team_right_img['alt']; ?>" />
      <?php endif; ?>
    </a>
    </div>
  </div>
</div><!-- /.team-two -->

<div class="team-one">
  <h2><?php echo $unterrichtsraume_title; ?></h2>
  <div class="team-one__content d-sm-flex flex-sm-column flex-md-row align-items-stretch">
    <div class="team-one__image">
    <a href="<?php echo $unterrichtsraume_left_img['url']; ?>" data-featherlight="#mylightbox">
      <?php if( !empty($unterrichtsraume_left_img) ): ?>
        <img class="img-fluid img-thumbnail" src="<?php echo $unterrichtsraume_left_img['url']; ?>" id="mylightbox" alt="<?php echo $unterrichtsraume_left_img['alt']; ?>" />
      <?php endif; ?>
    </a>
    </div>
    <div class="team-one__image">
    <a href="<?php echo $unterrichtsraume_center_img['url']; ?>" data-featherlight="#mylightbox">
      <?php if( !empty($unterrichtsraume_center_img) ): ?>
        <img class="img-fluid img-thumbnail" src="<?php echo $unterrichtsraume_center_img['url']; ?>" id="mylightbox" alt="<?php echo $unterrichtsraume_center_img['alt']; ?>" />
      <?php endif; ?>
    </a>
    </div>
    <div class="team-one__image">
    <a href="<?php echo $unterrichtsraume_right_img['url']; ?>" data-featherlight="#mylightbox">
      <?php if( !empty($unterrichtsraume_right_img) ): ?>
        <img class="img-fluid img-thumbnail" src="<?php echo $unterrichtsraume_right_img['url']; ?>" id="mylightbox" alt="<?php echo $unterrichtsraume_right_img['alt']; ?>" />
      <?php endif; ?>
    </a>
    </div>
  </div>
</div><!-- /.team-three -->