<?php
/**
 * @package WordPress
 * @subpackage StanleyWP
 * Template Name: Services
 */
?>
 <?php get_header(); ?>

 <div class="container pt">

  <div class="row mt">

	<div class="col-lg-8 col-lg-offset-2 centered">

        <h1 style="max-width:340px;"><?php the_title(); ?></h1>
        <?php the_content(); ?>

	</div>

  </div>


  <?php
  $services_loop = new WP_Query(array(
      'post_type' => 'services',
      'posts_per_page' => -1)
    );
  ?>


  <div class="row mt services">


    <?php while ( $services_loop->have_posts() ) : $services_loop->the_post(); ?>

      <?php
      	$color = get_field('color');
      	$image = get_field('image');
        $post_slug = get_post_field( 'post_name', get_post() );
      ?>

      <div id="<?php echo $post_slug; ?>" class="service <?php echo $color; ?>">
        <div class="service-logo-container">
  	       <img src="<?php echo $image; ?>" />
        </div>
        <div class="service-desc">
            <h3><?php the_title(); ?></h3>
            <div class="port-desc"><?php the_content(); ?></div>
        </div>
      </div>
    <?php endwhile; wp_reset_postdata(); ?>

</div>



</div><!-- end of container -->


<?php get_footer(); ?>
