<?php get_header(); ?>

<div class="section">
  <div class="innerWrapper">
    <div class="full">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        
      <?php endwhile; // end of the loop. ?>

    <div class="content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
      <?php 
        $portfolio = new WP_Query(
          array(
            'post_type' => 'portfolio',
            'posts_per_page' => -1,
            'order' => 'ASC'
          )
        );

      ?>
      <h2> Portfolio Items</h2>
      <?php if ($portfolio->have_posts()): ?>
        <?php while ($portfolio->have_posts()) : $portfolio->the_post(); ?>
          <div class="portfolio-item">
            <h2><?php the_title(); ?></h2>

            <?php while(have_rows('images')): the_row();  ?>
              <?php $image = get_sub_field('image') ?>
              <img src="<?php echo $image['sizes']['medium'] ?>">
            <?php endwhile ?>

            <p><?php the_field('short_desc') ?></p>
          </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      <?php endif; ?>

      <h2>Posts</h2>
      <?php 
        $posts = new WP_Query(
          array(
            'post_type' => 'post',
            'posts_per_page' => -1,
            'order' => 'ASC'
          )
        );

      ?>
      <?php if ($posts->have_posts()): ?>
        <?php while ($posts->have_posts()) : $posts->the_post(); ?>
          <div class="posts">
            <h2><?php the_title(); ?></h2>

            <p><?php the_content(); ?></p>
          </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      <?php endif; ?>
    </div> <!-- /,content -->

    </div>
  </div> <!-- /.innerWrapper -->
</div> <!-- /.section -->

<?php get_footer(); ?>