<?php
$theorie_title = get_field('theorie_title');
$uhr_eins = get_field('uhr_eins');
$uhr_zwei = get_field('uhr_zwei');

$uhr_eins_dienstag = get_field('uhr_eins_dienstag');
$uhr_zwei_dienstag = get_field('uhr_zwei_dienstag');

$uhr_eins_mittwoch = get_field('uhr_eins_mittwoch');
$uhr_zwei_mittwoch = get_field('uhr_zwei_mittwoch');

$uhr_eins_donnerstag = get_field('uhr_eins_donnerstag');
$uhr_zwei_donnerstag = get_field('uhr_zwei_donnerstag');


?>

<div class="plan-one">
  <h2><?php echo $theorie_title; ?></h2>
  <div class="plan-one__conatent d-sm-flex flex-sm-column flex-md-row">
    <div class="plan-one__table">
      <ul class="list-group">
        <li class="list-group-item active">Montag:</li>
        <li class="list-group-item"><?php echo $uhr_eins; ?></li>
        <li class="list-group-item"><?php echo $uhr_zwei; ?></li>
      </ul>
    </div>
    <div class="plan-one__table">
      <ul class="list-group">
        <li class="list-group-item active">Dienstag:</li>
        <li class="list-group-item"><?php echo $uhr_eins_dienstag; ?></li>
        <li class="list-group-item"><?php echo $uhr_zwei_dienstag; ?></li>
      </ul>
    </div>
  </div>
</div><!-- /.plan-one -->

<div class="plan-one">
  <div class="plan-one__conatent d-sm-flex flex-sm-column flex-md-row">
    <div class="plan-one__table">
      <ul class="list-group">
        <li class="list-group-item active">Mittwoch:</li>
        <li class="list-group-item"><?php echo $uhr_eins_mittwoch; ?></li>
        <li class="list-group-item"><?php echo $uhr_zwei_mittwoch; ?></li>
      </ul>
    </div>
    <div class="plan-one__table">
      <ul class="list-group">
        <li class="list-group-item active">Donnerstag:</li>
        <li class="list-group-item"><?php echo $uhr_eins_donnerstag; ?></li>
        <li class="list-group-item"><?php echo $uhr_zwei_donnerstag; ?></li>
      </ul>
    </div>
  </div>
</div><!-- /.plan-two -->

<div class="plan-image">
  <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/theorie.png" class="img-fluid" alt="">
</div>