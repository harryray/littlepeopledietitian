<?php $id = get_sub_field('id'); ?>
<div 
class="
block 
shortcode" 
id="<?php echo $id; ?>">
	<div class="container">
		<?php if (get_sub_field('title')) { ?><h1 class="shortcode__title"><?php echo get_sub_field('title'); ?></h1><?php } ?>
<?php 
$shortcode = get_sub_field('shortcode');
echo do_shortcode($shortcode);
?>
	</div>
</div>