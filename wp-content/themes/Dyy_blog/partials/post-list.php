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
    <?php if (!is_category() && has_category()): ?>
      <span class="category">
        <a href="<?php get_category_link( $category_id ); ?>">
          <?php
            $postcat = get_the_category();
            echo $postcat[0]->name;
          ?>
        </a>
      </span>
      <!--投稿日を表示-->
      <span class="date">
        <time datetime="<?php echo get_the_date( 'Y/m/d' ); ?>">
          <?php echo get_the_date(); ?>
        </time>
      </span>
    <?php endif; ?>
  </div>
</div>