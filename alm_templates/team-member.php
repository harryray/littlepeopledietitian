<?php 
// Template for single item listed in the Team Member archive.
$post=$args;

$image = get_field('image', $post->ID);
$job_title = get_field('job_title', $post->ID);

?>
<a 
href="<?php echo get_permalink($post->ID); ?>" 
class="team-member col-md-3">
	<div>
		<div class="team-member__image">
			
				<img src="<?php echo($image['url']); ?>" />

		</div>
		<div class="team-member__meta">
			<h5 class="team-member__supertitle"><?php echo $job_title; ?></h5>
			<h3 class="team-member__title"><?php echo get_the_title($post->ID); ?></h3>
		</div>
	</div>
</a>