<div class="latest-blogs__blog latest-blogs__blog--small">
  <div>
    <?php the_post_thumbnail(); ?>
  </div>
  <div>
    <span class="latest-blogs__title"><?php echo get_the_title(); ?></span>
    <div class="latest-blogs__excerpt"><?php echo limit_text(get_the_excerpt(), 6); ?></div>
    <a href="<?php echo get_permalink(); ?>" class="button button--primary">Read more</a>
  </div>
</div>