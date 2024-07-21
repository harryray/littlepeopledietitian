<?php 

	$text						    = get_sub_field('text');

	$link 					    = get_sub_field('link');

	$image 						    = get_sub_field('image');
	$secondary_images 				= get_sub_field('secondary_images');

?>
<div 
class='
block 
image-text 
background--white'>
	
	<div 
	class="
	container">

		<div class="row image-text__content">
		
			<div 
				class="
				col-md-7 
				col-12">
				<?php if($image) { ?>
				
					<div
					class="
					image-text__image">
						<img src="<?php echo $image['url']; ?>" />
					</div>
				
				<?php } ?>
			</div>

			<div 
			class="
			col-md-5 
			col-12">

				<div class="image-text__text-wrap">

					<?php if($text) { ?><div class="image-text__text"><?php echo $text; ?></div><?php } ?>

				</div>

			</div>

		</div>

		<div class="row">

		<?php if($secondary_images) { ?>
			<div class="col-md-7 col-12">
				<div class="image-text__secondary-image-wrap">
						<?php foreach($secondary_images as $secondary_image) { ?>
						
						<div
						class="
						image-text__secondary-image">
							<img src="<?php echo $secondary_image['image']['url']; ?>" />
						</div>
					
					<?php } ?>
				</div>
			</div>
			<?php } ?>
			<?php if($link) { ?>
				<div class="col-md-5 col-12">
				<div 
				class="
				image-text__button-wrap">
					<a 
					href="<?php echo $link['url']; ?>" 
					class="button button--murk image-text__button" 
					target="<?php echo $link['target']; ?>"
					title="<?php echo $link['title']; ?>"><?php echo $link['title']; ?></a>
				</div>
				</div>
			<?php } ?>

		</div>

	</div>

	<div class="scroll-trigger"></div>
	<div class="reset-trigger"></div>

</div>