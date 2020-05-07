<div class="c-entry col-desk-12">
  <a href="<?php the_permalink(); ?>" class="wrap">
    <h1 class="title"><?php the_title(); ?></h1>
    <?php if( has_post_thumbnail() ): ?>
      <span class="thumb">
        <?php the_post_thumbnail( 'thumbnail', array('class' => 'thumb_img') ); ?>
      </span>
    <?php endif; ?>
  </a>
  <div class="info">
    <!--カテゴリ-->
      <span class="category">
        <?php the_category(','); ?>
      </span>
      <!--投稿日を表示-->
      <span class="date">
        <time datetime="<?php echo get_the_date( 'Y/m/d' ); ?>">
          <?php echo get_the_date(); ?>
        </time>
      </span>
  </div>
</div>