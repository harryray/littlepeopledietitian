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
					<div class="testimonials__slider-prev"><svg width="90" height="90" viewBox="0 0 90 90" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="45" cy="45" r="45" fill="#9EABA2"/><path d="M61.4749 47.4749C62.8417 46.108 62.8417 43.892 61.4749 42.5251L39.201 20.2513C37.8342 18.8844 35.6181 18.8844 34.2512 20.2513C32.8844 21.6181 32.8844 23.8342 34.2513 25.201L54.0503 45L34.2513 64.799C32.8844 66.1658 32.8844 68.3819 34.2513 69.7487C35.6181 71.1156 37.8342 71.1156 39.201 69.7487L61.4749 47.4749ZM55 48.5L59 48.5L59 41.5L55 41.5L55 48.5Z" fill="#EFFFFF"/></svg></div>
					<div class="testimonials__slider-next"><svg width="90" height="90" viewBox="0 0 90 90" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="45" cy="45" r="45" fill="#9EABA2"/><path d="M61.4749 47.4749C62.8417 46.108 62.8417 43.892 61.4749 42.5251L39.201 20.2513C37.8342 18.8844 35.6181 18.8844 34.2512 20.2513C32.8844 21.6181 32.8844 23.8342 34.2513 25.201L54.0503 45L34.2513 64.799C32.8844 66.1658 32.8844 68.3819 34.2513 69.7487C35.6181 71.1156 37.8342 71.1156 39.201 69.7487L61.4749 47.4749ZM55 48.5L59 48.5L59 41.5L55 41.5L55 48.5Z" fill="#EFFFFF"/></svg></div>
				</div>

			</div>

		<?php } ?>

		</div>

	</div>


	<div class="scroll-trigger"></div>
	<div class="reset-trigger"></div>
</div>