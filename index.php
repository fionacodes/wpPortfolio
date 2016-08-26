<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>
 

<!-- 
<div class="grid-container">
    <div class="grid-wrap">
      <div class="grid-content">
        <span>Aspect ratio 1:1</span>
      </div>
    </div>
</div>
 -->

<main id="main" class="container">
    <?php 
    $portfolio = new WP_Query(
      array(
        'post_type' => 'portfolio',
        'posts_per_page' => -1,
        'order' => 'ASC'
      )
    ); ?>
    <!-- END PORTFOLIO QUERY -->

    <?php if ($portfolio->have_posts()): ?>
    <?php while ($portfolio->have_posts()) : $portfolio->the_post(); ?>

      <?php while(have_rows('images')): the_row();  ?>
        <?php $image = get_sub_field('image') ?>

        <!-- BEGIN HERO SECTION -->
        <section>

        <div class="grid-container">
            <div class="grid-wrap">
              <div class="grid-content">
                <span>

                <div class="grid">
                  <figure class="effect-goliath">
                    <img src="<?php echo $image['url'] ?>" width="100%" alt="img01"/>
                    <figcaption>
                      <h2>Nice <span>Lily</span></h2>
                      <p>View</a>
                    </figcaption>     
                  </figure>
                </div>
                </span>

              </div>
            </div>
        </div>

        <div class="grid-container">
            <div class="grid-wrap">
              <div class="grid-content">
                <span>
                <h3><?php the_title(); ?></h3>
                  <p><?php the_content(); ?></p>
                <p><?php the_field('language') ?></p>
                </span>
              </div>
            </div>
        </div>
      <?php endwhile ?> <!-- END IMAGE LOOP --> 
     
    <?php endwhile; ?> <!-- END POSTS LOOP -->
    <?php wp_reset_postdata(); ?>
    <?php endif; ?> <!-- END PORTFOLIO IMAGE LOOP -->
        </section> 
<!-- END HERO SECTION -->

</main> <!-- END MAIN SECTION -->

<?php get_footer(); ?>  