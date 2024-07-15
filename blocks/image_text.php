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
				col-md-6 
				col-12">
			<?php if($image) { ?>
			
				<div
				class="
				image-text__image">
					<img src="<?php echo $image['url']; ?>" />
				</div>
			
			<?php } ?>
		
			<?php if($secondary_images) { 
				foreach($secondary_images as $secondary_image) { ?>
				
				<div
				class="
				image-text__secondary-image">
					<img src="<?php echo $secondary_image['image']['url']; ?>" />
				</div>
			
			<?php } } ?>
			</div>

			<div 
			class="
			col-md-6 
			col-12">

				<div>

					<?php if($text) { ?><div class="image-text__text"><?php echo $text; ?></div><?php } ?>
					<?php if($link) { ?>
						
						<div 
						class="
						image-text__button-wrap">
							<a 
							href="<?php echo $link['url']; ?>" 
							class="cta image-text__cta" 
							target="<?php echo $link['target']; ?>"
							title="<?php echo $link['title']; ?>"><svg class="arrow" width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.91431 0.486816L18.4753 9.04779L9.91431 17.6088" stroke="#2F3F47"/><path d="M0.475342 9.04785L18.4753 9.04785" stroke="#2F3F47"/></svg><?php echo $link['title']; ?></a>
						</div>

					<?php } ?>

				</div>

			</div>

		</div>

	</div>

	<div class="scroll-trigger"></div>
	<div class="reset-trigger"></div>

</div>