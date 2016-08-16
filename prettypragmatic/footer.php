<?php
/**
 * Footer Template
 *
 *
 * @file           footer.php
 * @package        StanleyWP 
 * @author         Brad Williams & Carlos Alvarez 
 * @copyright      2011 - 2014 Gents Themes
 * @license        license.txt
 * @version        Release: 3.0.3
 * @link           http://codex.wordpress.org/Theme_Development#Footer_.28footer.php.29
 * @since          available since Release 1.0
 */
?>
</div><!-- end of wrapper-->
<?php gents_wrapper_end(); // after wrapper hook ?>


<?php gents_container_end(); // after container hook ?>


<section class="social">
	<div class="container">
		<div class="social-link linkedin">
			<a href="https://www.linkedin.com/company/9479985" target="_blank">
				<div class="icon"><img src="<?php echo get_template_directory_uri();?>/images/linkedin_icon.png" alt="LinkedIn" /></div>
				<div class="link-hover">Follow us</div>
			</a>
		</div>
		<div class="social-link twitter">
			<a href="https://twitter.com/PrettyPrag" target="_blank">
				<div class="icon"><img src="<?php echo get_template_directory_uri();?>/images/twitter_icon.png" alt="Twitter" /></div>
				<div class="link-hover">Follow us</div>
			</a>
		</div>
		<div class="social-link instagram">
			<a href="https://www.instagram.com/prettyprag/" target="_blank">
				<div class="icon"><img src="<?php echo get_template_directory_uri();?>/images/instagram_icon.png" alt="Instagram" /></div>
				<div class="link-hover">Follow us</div>
			</a>
		</div>
	</div>
</section>


<footer id="footer">
  <div class="container">

      <div class="padding">
          <h3>want to receive our newsletter?</h3>
          <button><a href="#" class="show-newsletter">sign up</a></button>
          

	<div class="newsletter-signup">
		<!-- Begin MailChimp Signup Form -->
<div id="mc_embed_signup">
<form action="//prettypragmatic.us11.list-manage.com/subscribe/post?u=1f7fbbeaa417605e2d50f5c03&amp;id=8b27f9b228" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
<div class="mc-field-group">
	<label for="mce-EMAIL">email address  <span class="asterisk">*</span>
</label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
<div class="mc-field-group">
	<label for="mce-FNAME">first name </label>
	<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
</div>
<div class="mc-field-group">
	<label for="mce-LNAME">last name </label>
	<input type="text" value="" name="LNAME" class="" id="mce-LNAME">
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_1f7fbbeaa417605e2d50f5c03_8b27f9b228" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>

<!--End mc_embed_signup-->

<script>
jQuery(document).ready(function() {
    jQuery(".newsletter-signup").hide();

	jQuery(".show-newsletter").on( "click", function(e) {
		e.preventDefault();
  		jQuery(".newsletter-signup").slideDown( "slow", function() {
    			// Animation complete.
			jQuery('html, body').animate({
        			scrollTop: jQuery("#footer").offset().top
    			}, 2000);
			jQuery(".show-newsletter").fadeOut();
  		});
		return false
	});

	jQuery('.maps').click(function () {
        	jQuery('.maps').css("pointer-events", "auto");
   	});

});
</script>

	
</div>
		
	<p>&copy; 2016 pretty pragmatic ltd<br />company number: 09518414</p>
      </div>

    </div>
</footer>




<?php wp_footer(); ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-61445618-1', 'auto');
  ga('send', 'pageview');
</script>

</body>
</html>