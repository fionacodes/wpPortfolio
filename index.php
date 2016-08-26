<?php get_header(); ?>

<main id="main" class="wrapper">

  <!-- BEGIN ABOUT SECTION  -->
  <h2>About.</h2>

    <section class="about" id="about">
    <div class="grid center">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <p><?php the_field('about') ?></p>

      <?php endwhile; ?> <!-- END POST QUERY -->
      </div>
    </section>

  <!-- BEGIN PORTFOLIO SECTION -->
  <h2>Portfolio.</h2>
  
    <?php 
    $portfolio = new WP_Query(
      array(
        'post_type' => 'portfolio',
        'posts_per_page' => -1,
        'order' => 'ASC'
      )
    ); ?>
    <!-- END PORTFOLIO QUERY -->

  <section class="portfolio" id="portfolio">

    <?php if ($portfolio->have_posts()): ?>
    <?php while ($portfolio->have_posts()) : $portfolio->the_post(); ?>

      <?php while(have_rows('images')): the_row();  ?>
        <?php $image = get_sub_field('image') ?>

        <!-- BEGIN PORTFOLIO SECTION -->
        <div class="grid-container">
            <div class="grid-wrap">
              <div class="grid-content">
                <span>
                  <div class="grid">
                    <figure class="effect-goliath">
                      <img src="<?php echo $image['url'] ?>" alt="img01"/>
                      <figcaption>
                        <p>view <?php the_field('portfolio_name') ?> live</a>
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
                <span class="grid-desc">
                  <h3><?php the_title(); ?></h3>
                    <p><?php the_content(); ?></p>
                  <p><?php the_field('language') ?></p>
                </span>
              </div>
            </div>
        </div>
      <?php endwhile ?> <!-- END PORTFOLIO CONTENT LOOP --> 
     
    <?php endwhile; ?> <!-- END PORTFOLIO POSTS LOOP -->
    <?php wp_reset_postdata(); ?>
    <?php endif; ?> <!-- END PORTFOLIO QUERY -->
  </section> <!-- END PORTFOLIO SECTION -->

  <!-- BEGIN SKILLS SECTION  -->
  <section class="skills" id="skills">
    <h2>Skills.</h2>

    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <p><?php the_field('skills') ?></p>

    <?php endwhile; ?> <!-- END POST QUERY -->
  </section> <!-- END SKILLS SECTION -->

  <section>
      <h2>get in touch.</h2>
      <p>
          I'm currently available for full-time and contract work opportunities.
      </p>
      <p>
          Send me an e-mail at <b>info@fionacodes.com</b> or through the contact form.
      </p>

          <div class="center">
          <form action="http://www.focuspocus.io/magic/fionarofl@gmail.com" method="POST">
          <input type="name" name="name" placeholder="name">
          <input type="email" name="email" placeholder="e-mail">
          <textarea name="comments" placeholder="comments"></textarea>
          <input type="submit" value="submit" class="button">
          </form>
          </div>
      </section>

</main> <!-- END MAIN SECTION -->

<?php get_footer(); ?>  