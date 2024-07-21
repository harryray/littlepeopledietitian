<?php 

	$title = get_sub_field('testimonial_slider_title');

	$testimonials = get_sub_field('testimonials');

	$images = get_sub_field('images');

	$id = get_sub_field('id');
?>
<div 
class="
block 
testimonials 
background--eggshell
" 
id="<?php echo $id; ?>">

	<div 
	class="
	container">

		<div 
		class="
		row">

		<?php if($images) {  ?>
			<div class="col-md-6 col-12">
				<div class="image-0 testimonials-slider__image">
					<img src="<?php echo $images[0]['image']['url']; ?>" />
				</div>
				<div class="image-2 testimonials-slider__image">
					<img src="<?php echo $images[2]['image']['url']; ?>" />
				</div>
			</div>
			<div class="col-md-6 col-12">
				<div class="image-1 testimonials-slider__image">
					<img src="<?php echo $images[1]['image']['url']; ?>" />
				</div>
				<div class="image-3 testimonials-slider__image">
					<img src="<?php echo $images[3]['image']['url']; ?>" />
				</div>
			</div>
		<?php } ?>

		<?php if($testimonials) { ?>

			<div 
			class="
			col-12 
			testimonials__container">

				<div 
				class="testimonials__wrap">

					<div 
					class="testimonials__wrap--slider">

						<?php foreach($testimonials as $testimonial) { ?>
							<div 
							class="
							testimonials__testimonial--container">

								<div 
								class="
								testimonials__testimonial">

									<span class="heading-1"><?php echo $title; ?></span>
									
									<div 
									class="
									testimonials__quote">
										<?php echo $testimonial['testimonial']; ?>
									</div>
									
								</div>

							</div>

						<?php } ?>

					</div>

				</div>

				<div class="testimonials__slider-arrows">
					<div class="testimonials__slider-prev"><svg xmlns="http://www.w3.org/2000/svg" width="11.735" height="21.938" viewBox="0 0 11.735 21.938"><path id="Icon_metro-chevron-thin-down" data-name="Icon metro-chevron-thin-down" d="M25.16,10.911a.888.888,0,0,1,1.249,0,.867.867,0,0,1,0,1.236L16.322,22.134a.888.888,0,0,1-1.249,0L4.988,12.147a.868.868,0,0,1,0-1.236.888.888,0,0,1,1.249,0L15.7,20.019Z" transform="translate(22.39 -4.729) rotate(90)" fill="#333333"/></svg></div>
					<div class="testimonials__slider-next"><svg xmlns="http://www.w3.org/2000/svg" width="11.735" height="21.938" viewBox="0 0 11.735 21.938"><path id="Icon_metro-chevron-thin-down" data-name="Icon metro-chevron-thin-down" d="M25.16,10.911a.888.888,0,0,1,1.249,0,.867.867,0,0,1,0,1.236L16.322,22.134a.888.888,0,0,1-1.249,0L4.988,12.147a.868.868,0,0,1,0-1.236.888.888,0,0,1,1.249,0L15.7,20.019Z" transform="translate(-10.655 26.667) rotate(-90)" fill="#333333"/></svg></div>
				</div>

			</div>

		<?php } ?>

		</div>

	</div>


	<div class="scroll-trigger"></div>
	<div class="reset-trigger"></div>
</div>