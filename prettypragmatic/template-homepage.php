<?php
/**
 * @package WordPress
 * @subpackage StanleyWP
 * Template Name: Homepage
 */
?>

<?php get_header(); ?>

<div class="home-wrap clearfix">



	<section class="video">
		<div class="info">
			<div class="padding">
				<h2><?php the_field('title'); ?></h2>
				<p><?php the_field('description'); ?></p>
			</div>
		</div>

		<?php
			$autoplay = get_field('autoplay')[0];
			$loop = get_field('loop')[0];
		?>
		<div class="video-container">
			<video <?php if ($autoplay == "autoplay") { echo "autoplay"; } ?> <?php if ($loop == "loop") { echo "loop"; } ?> poster="<?php the_field('poster'); ?>" width="100%" height="auto">
				<source src="<?php the_field('mp4'); ?>" type="video/mp4" />
				<source src="<?php the_field('webm'); ?>" type="video/webm" />
				<source src="<?php the_field('ogg'); ?>" type="video/ogg" />
			</video>
		</div>
	</section>


	<script>
		var windowWidth = jQuery(window).width();

		if (windowWidth > 420) {		
			jQuery('section.video .info').css('opacity', 0);
			setTimeout(function(){
 				jQuery('section.video .info').animate({opacity: 1}, {queue: false, duration: 'slow'});
				jQuery('section.video .info').animate({ marginTop: "-10px" }, 'slow');
			}, 3500);
		} else {
			jQuery('section.video .info').css('opacity', 0);
			setTimeout(function(){
 				jQuery('section.video .info').animate({opacity: 1}, {queue: false, duration: 'slow'});
				jQuery('section.video .info').animate({ marginTop: "-10px" }, 'slow');
			}, 1500);
		}
	</script>



	<section class="services white_bg">
		<div class="container">
			<div class="padding">
				<h2>what we do</h2>
			</div>
			<?php $services_loop = new WP_Query(array('post_type' => 'services', 'posts_per_page' => -1)); ?>
				<ul>
				    <?php while ( $services_loop->have_posts() ) : $services_loop->the_post(); ?>
					    <li>
					    	<?php the_post_thumbnail('medium'); ?>
					    	<h3><?php the_title(); ?></h3>
						</li> 
					<?php endwhile; wp_reset_postdata(); ?>
				</ul>
			<p style="text-align:center;clear:both;display:block;padding-top:20px;margin:0;"><button><a href="what-we-do/">find out more</a></button></p>
		</div>
	</section>



	<section class="how grey_bg">
		<div class="container">
			<div class="padding">
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			</div>
		</div>
	</section>



	<section class="blog">

			<?php $blog_loop = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 1)); ?>
			    <?php while ( $blog_loop->have_posts() ) : $blog_loop->the_post(); ?>
			    	
			    	<div class="info">
				    	<div class="padding">
					    	<h2>our thinking</h2>
						<h4>latest blog</h4>
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<button><a href="<?php the_permalink(); ?>">take a look</a></button>
					    </div>
				    </div>

				    <?php the_post_thumbnail(); ?>
			    	

				<?php endwhile; wp_reset_postdata(); ?>
	</section>



	<section class="contact grey_bg">
		<div class="container">
			<div class="padding">
				<h2>get in touch</h2>
			</div>
			<div class="half">
				<?php the_field('contact_info'); ?>
			</div>
			<div class="half" onClick="style.pointerEvents='none'">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2486.216301808215!2d-2.594455048440718!3d51.454184979526396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48718e79cde2927d%3A0xa7da82d54fafbbdf!2sPretty+Pragmatic!5e0!3m2!1sen!2suk!4v1452158696270" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
	</section>



</div><!-- END home-wrap -->

<?php get_footer(); ?>