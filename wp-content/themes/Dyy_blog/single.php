<?php
/*
トップページ用テンプレート
*/
get_header(); ?>


		<?php if ( have_posts() ) : ?>
		<!-- entry -->
		<article class="c-article col-desk-12">
			<?php
			while ( have_posts() ) {
				the_post();
				get_template_part( 'partials/content-single', get_post_format() );
			}

			// ページナビゲーション
			the_posts_pagination( array(
				'prev_text'          => '&lt; PREV',
				'next_text'          => "NEXT &gt;",
			) );
		?>
		</article>
		<!-- /entry -->

		<?php endif; ?>

<?php get_footer(); ?>
