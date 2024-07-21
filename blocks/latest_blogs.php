<?php
?>
<div 
class="
block 
latest-blogs 
background--white">

  <div 
  class="
  container">

    <div 
    class="row">

      <div 
      class="
      col-12 
      col-md-6 
      latest-blogs__column 
      latest-blogs__column--big">
      <?php
      $args = [
        'post_type' => 'post',
        'posts_per_page' => 1,
      ];
      $results = new WP_Query($args);
      if ( $results->have_posts() ) {
        while ( $results->have_posts() ) {
          $results->the_post();
          include(get_template_directory() . '/partials/latest-blog-post.php');
        }
      }
      wp_reset_postdata();
      ?>
      </div>

      <div 
      class="
      col-12 
      col-md-6">
        <h3>My latest blog posts</h3>

      <?php
      $args = [
        'post_type' => 'post',
        'posts_per_page' => 2,
        'offset' => 1
      ];
      $results = new WP_Query($args);
      if ( $results->have_posts() ) {
        while ( $results->have_posts() ) {
          $results->the_post();
          include(get_template_directory() . '/partials/latest-blog-post--small.php');
        }
      }
      wp_reset_postdata();
      ?>
      </div>

    </div>

  </div>

</div>