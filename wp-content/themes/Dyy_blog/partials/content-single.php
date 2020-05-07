<?php
/*
パーツ：記事一覧のループ部分
*/
?>
<header class="header">
	<div class="wrap">
		<h1 class="title"><?php the_title(); ?></h1>
		<?php if( has_post_thumbnail() ): ?>
			<span class="thumb">
				<?php the_post_thumbnail( 'thumbnail', array('class' => 'thumb_img') ); ?>
			</span>
		<?php endif; ?>
	</div>
	<div class="info">
		<?php if (!is_category() && has_category()): ?>
			<span class="category">
				<!-- <a href="<?php get_category_link( $category_id ); ?>"> -->
					<?php
						// $postcat = get_the_category();
						// echo $postcat[0]->name;
						$category = get_the_category();

						echo '<a href="' . get_category_link( $category[0]->term_id ) . '">' . $category[0]->name . '</a>';

					?>
				<!-- </a> -->
			</span>
			<span class="date">
				<time datetime="<?php echo get_the_date( 'Y/m/d' ); ?>">
					<?php echo get_the_date(); ?>
				</time>
			</span>
		<?php endif; ?>
	</div>
</header>
<div class="content">
	<?php the_content(); ?>
</div>

