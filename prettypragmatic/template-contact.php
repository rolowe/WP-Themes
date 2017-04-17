<?php
/**
 * Contact
 *
   Template Name:  Contact Page
 *
 * @file           template-contact.php
 * @package        StanleyWP
 * @author         Brad Williams & Carlos Alvarez
 * @copyright      2014 Gents Themes
 * @license        license.txt
 * @version        Release: 3.0.3
 * @link           http://codex.wordpress.org/Theme_Development#Pages_.28page.php.29
 * @since          available since Release 1.0
 */
   ?>

<?php get_header(); ?>


<div class="container pt">


        <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); ?>


        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <div class="row mt">
            <div class="col-lg-6 col-lg-offset-3 centered">
            		<header>
            		    <h1><?php the_title(); ?></h1>
                </header>
                <?php the_content(); ?>
            </div>
        </div>

        </article>

</div><!-- container -->


<section class="contact grey_bg">
  <div class="container">
    <div class="padding">
      <h2>how to find us</h2>
    </div>
    <div class="half">
      <?php the_field('contact_info'); ?>
    </div>
    <div class="half" onClick="style.pointerEvents='none'" style="pointer-events: none;">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2486.216301808215!2d-2.594455048440718!3d51.454184979526396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48718e79cde2927d%3A0xa7da82d54fafbbdf!2sPretty+Pragmatic!5e0!3m2!1sen!2suk!4v1452158696270" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div>
</section>



<div class="form_container">
  <div class="padding">
      <h2>drop us a note</h2>
  </div>
  <?php echo do_shortcode('[contact-form-7 id="206" title="Contact form"]'); ?>
</div>



<?php endwhile; ?>

<?php if (  $wp_query->max_num_pages > 1 ) : ?>
    <nav class="navigation">
       <div class="previous"><?php next_posts_link( __( '&#8249; Older posts', 'gents' ) ); ?></div>
       <div class="next"><?php previous_posts_link( __( 'Newer posts &#8250;', 'gents' ) ); ?></div>
   </nav><!-- end of .navigation -->
<?php endif; ?>

<?php else : ?>

    <article id="post-not-found" class="hentry clearfix">
        <header>
           <h1 class="title-404"><?php _e('404 &#8212; Fancy meeting you here!', 'gents'); ?></h1>
       </header>
       <section>
           <p><?php _e('Don&#39;t panic, we&#39;ll get through this together. Let&#39;s explore our options here.', 'gents'); ?></p>
       </section>
       <footer>
           <h6><?php _e( 'You can return', 'gents' ); ?> <a href="<?php echo home_url(); ?>/" title="<?php esc_attr_e( 'Home', 'gents' ); ?>"><?php _e( '&#9166; Home', 'gents' ); ?></a> <?php _e( 'or search for the page you were looking for', 'gents' ); ?></h6>
           <?php get_search_form(); ?>
       </footer>

   </article>

<?php endif; ?>


<?php get_footer(); ?>
