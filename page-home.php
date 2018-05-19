<?php
/*
       Template Name: Startseite Page
*/

get_header(); ?>

  <div class="row">
    <div class="col-md-8">
      <?php get_template_part('template-parts/content', 'about'); ?>
    </div><!-- /.blog-main -->

    <?php get_sidebar(); ?><!-- /.blog-sidebar -->
  </div><!-- /.row -->






<?php
get_footer();