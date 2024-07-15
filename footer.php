<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-12">
				
				<!-- logo -->
				<div class="footer__logo logo">
					<a href="/">
						<?php 
						$footer_logo = get_field('footer_logo','options'); 
						?>
					</a>
				</div>
				<!-- /logo -->
			</div>
		</div>

		<div class="row">
			<div class="col-md-6 col-12 footer__images">
				<img src="" />
				<img src="" />
			</div>
			<!-- nav -->
			<div class="col-md-6 col-12">
			<?php
				wp_nav_menu( [ 
					'theme_location' 	=> 'footer-menu', 
					'container_class' 	=> '',
					'menu_class'		=> '',
					'items_wrap'      	=> '<ul>%3$s</ul>',
					'walker' => new Findlay_Menu_Walker()
				] ); 
				?>
			</div>
			<!-- /nav -->
		</div>

		<div class="row">
			<div class="col-12">
				<div class="footer__copyright-and-legal">
					<p>&copy; <?php echo date('Y'); ?> Little People Dietitian Ltd. All rights reserved.</p>
					<p>Little People Dietitian Ltd is a registered limited company of England and Wales (12345678).</p>
				</div>
			</div>
		</div>
	</div>
	</div>
</footer>

<!-- smooth scroll -->
</div>
</div>
</div>
<!-- Greensock -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/ScrollTrigger.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/ScrollSmoother.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/gsap.animation.min.js"></script>
<!--<script src="<?php //echo get_stylesheet_directory_uri(); ?>/assets/js/addIndicators.js"></script>-->

<script>
	if(window.innerWidth > 1024) {
	gsap.registerPlugin(ScrollTrigger, ScrollSmoother);

ScrollSmoother.create({
  smooth: 1.1,               // how long (in seconds) it takes to "catch up" to the native scroll position
  effects: true,           // looks for data-speed and data-lag attributes on elements
 smoothTouch: true,        // much shorter smoothing time on touch devices (default is NO smoothing on touch devices)
});
}
</script>
<?php wp_footer(); ?>
</body>
</html>