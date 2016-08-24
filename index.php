<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>


<div class="content">
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
        <section class="hero">

        <!-- LEFT SIDE  -->
        <div class="box box-left" style="background: url('<?php echo $image['url'] ?>') no-repeat; background-size: 80%; background-position: center;">
          <!-- <img src="<?php echo $image['url'] ?>"> -->
          hi
        </div> 

        <div class="box box-right">
            <h3><?php the_title(); ?></h3>
              <p><?php the_content(); ?></p>
            <p><?php the_field('language') ?></p>
          </div><!-- END PORTFOLIO CONTENT LOOP -->
      <?php endwhile ?> <!-- END IMAGE LOOP --> 
     
    <?php endwhile; ?> <!-- END POSTS LOOP -->
    <?php wp_reset_postdata(); ?>
    <?php endif; ?> <!-- END PORTFOLIO IMAGE LOOP -->

<!-- 
    <div class="grid">
      <figure class="effect-bubba">
        <img src="https://unsplash.it/800/1000?random"s/>
        <figcaption>
          <h2>Fresh <span>Bubba</span></h2>
          <p>Bubba likes to appear out of thin air.</p>
          <a href="#">View more</a>
        </figcaption>     
      </figure>
    </div> -->


  <!-- RIGHT SIDE -->


      

</section> 
<!-- END HERO SECTION -->

</main> <!-- END MAIN SECTION -->

<?php get_footer(); ?>  