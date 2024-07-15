<?php 

$body  = get_sub_field('body');

$id    = get_sub_field('id');
?>
<div 
class="
block 
shortcode" 
id="<?php echo $id; ?>">
	<div class="container free-text">
		<div  id="cmplz-document">
			<?php echo $body; ?>
		</div>
	</div>
</div>