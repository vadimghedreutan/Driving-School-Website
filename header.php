<?php
/**
 * The header for our theme
 *
 * * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fahrschule-team
 */
$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID) );
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

	<?php wp_head(); ?>
</head>

<div class="wrapper">

	<div class="container">
		<header class="header-main">
			<div class="header-main__logo">
			<a href="<?php echo home_url(); ?>">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo2.svg" width="300" alt="">
			</a>
			</div>
		</header>

		<div class="nav-scroller py-1 nav-bg">


			<?php
				wp_nav_menu( array(
					'menu' 							=> 'top_menu',
					'depth' 						=> 2,
					'container' 				=> false,
					'menu_class' 				=> 'nav d-flex justify-content-between align-items-center'
					)
				);
			?>

	
		</div>
		
	</div>

	<?php if ( is_page( 'home' ) ) {	?>
		<div class="jumbotron px-0 py-0 text-white bg-dark">
			<?php echo do_shortcode('[metaslider id="9"]'); ?>
		</div>
	<?php } else { ?>		
		<div class="feature-image text-white bg-dark">
      <div style="background: url(<?php echo $thumbnail_url; ?>) no-repeat 50% 0%; min-height: 150px; background-size: cover;"></div>
    </div>
	<?php } ?>	
	
		
		
	<div class="container">
		<div class="type-box">
			<div class="type-info">
					<p>Bei uns: Der 360° Fahrsimulator!</p>
			</div>

			<div class="scrollingtext">
				<h4>Zur Verstärkung unseren sympathischen Teams suchen wir ab sofort eine/n Fahrlehrer/in für 15€ Lohn a' 45 min!</h4>
			</div>
		</div>

		<main role="main">