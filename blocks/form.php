<?php 

$text 			= get_sub_field('text');

$form_shortcode = get_sub_field('form_shortcode');

$id 			= get_sub_field('id');

?>
<div 
class="
block 
form" 
id="<?php echo $id; ?>">
	
	<div 
	class="
	container">

		<div 
		class="
		row">

			<?php if($text) { ?>

			<div 
			class="
			col-lg-6 
			col-12">

				<?php echo $text; ?>

			</div>

			<?php } ?>

			<div 
			class="
			col-lg-6 
			col-12">

				<?php echo do_shortcode($form_shortcode); ?>

			</div>
		

		</div>
	

	</div>


</div>