<div class="latest-blogs__blog">
  <?php the_post_thumbnail(); ?>
  <span class="latest-blogs__title"><?php echo get_the_title(); ?></span>
  <div class="latest-blogs__excerpt"><?php echo get_the_excerpt(); ?></div>
  <a href="<?php echo get_permalink(); ?>" class="button button--primary">Read more</a>
</div>