<?php 
// Template for single item listed in the Resource archive.
$post=$args;

$image = get_field('image', $post->ID);
$file = get_field('file', $post->ID);
$link = get_field('link', $post->ID);
$file_or_link = get_field('file_or_link', $post->ID);
$digital_document_category = get_the_terms($post->ID, 'digital-document-category');

?>
<a 
href="<?php echo $file_or_link ? $link : $file['url']; ?>" 
class="resource-archive__item" 
id="<?php echo get_the_title($post->ID); ?>" 
target="_blank">
	<div>
		<div class="resource-archive__item--image">
			
				<img src="<?php echo($image['sizes']['a4_resource_thumbnail']); ?>" />

		</div>
		<div class="resource-archive__item--meta">
			<div class="col-md-8 col-12">
				<h3 class="resource-archive__item--title"><?php echo get_the_title($post->ID); ?></h3>
        <?php if( $digital_document_category[0]->name ) { ?>
				  <p class="resource-archive__item--supertitle"><?php echo $digital_document_category[0]->name; ?></p>
        <?php } ?>
			</div>
			<div class="col-md-4 col-12">
				<div 
				class="resource-archive__button-wrap">
					<span class="cta resource-archive__cta"><svg class="arrow" width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.91431 0.486816L18.4753 9.04779L9.91431 17.6088" stroke="#2F3F47"/><path d="M0.475342 9.04785L18.4753 9.04785" stroke="#2F3F47"/></svg>View PDF</span>
				</div>
			</div>
		</div>
	</div>
</a>