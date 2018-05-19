<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fahrschule-team
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside class="col-md-4 blog-sidebar">
	
		<?php dynamic_sidebar( 'sidebar-1' ); ?>

		<div class="card text-white p-3 mb-3 mt-4 bg-yellow border-0">
		<div class="card-header">Kontactinformationen</div>
		<div class="card-body">
			<ul class="card-text">
				<li class="list-group-item"> <i class="material-icons inline-icon">place</i> Wurmberger Str. 13a<br> 75175 Pforzheim</li>
				<li class="list-group-item"> <i class="material-icons inline-icon">phone</i> 07231/424 53 55</li>
				<li class="list-group-item"> <i class="material-icons inline-icon">phone_iphone</i> 0176/248 478 15</li>
				<li class="list-group-item"> <i class="material-icons inline-icon">local_printshop</i> 07231/413 83 90</li>
				<li class="list-group-item"> <i class="material-icons inline-icon">email</i> fahrschule-team@web.de</li>
				<li class="list-group-item"> <i class="material-icons inline-icon">access_time</i> Montag bis Donnerstag: 9 - 12 Uhr und 17 - 20 Uhr</li>
				<li class="list-group-item"> <i class="material-icons inline-icon">access_time</i> Freitag: 9 - 12 Uhr</li>
			</ul>
		</div>

	</div>

</aside>
