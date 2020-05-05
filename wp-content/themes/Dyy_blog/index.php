<?php
/*
トップページ用テンプレート
*/
get_header(); ?>

<div class="l-container">


<?php

	if ( have_posts() ) {

		$i = 0;

		while ( have_posts() ) {
			the_post();

			get_template_part( 'partials/post', 'list' );

		}
	} elseif ( is_search() ) {
		?>

		<div class="no-search-results-form section-inner thin">


		</div><!-- .no-search-results -->

		<?php
	}
	?>

	<?php get_template_part( 'partials/pagination' ); ?>

</div>
<?php get_footer(); ?>

