<?php
/*
トップページ用テンプレート
*/
get_header(); ?>


		<?php if ( have_posts() ) : ?>
		<!-- entry -->
		<article class="c-article col-desk-12 col-mb-12">
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

		<div class="p-article_footer col-desk-12 col-mb-12">
			<ul class="p-article_footer_share">
				<li>
						<a href="" class="twitter-share-button" data-show-count="false">Tweet</a>
					</a>
				</li>
			</ul>
			<div class="p-article_back">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">戻る</a>
			</div>
		</div>

<?php get_footer(); ?>
