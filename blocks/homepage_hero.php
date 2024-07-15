<?php 

	$title			= get_sub_field('heading');

	$link				= get_sub_field('link');

?>
<div 
class="
block 
hero 
background--eggshell
" >
	
	<div 
	class="
	container">

		<div 
		class="
		row">

			<div 
			class="
			<?php echo $image ? 'col-lg-8' : ''; ?> 
			col-12 
			hero__content-wrap">

				<div 
				class="
				hero__content">
					
					<h1 class="title hero__title"><?php echo $title; ?></h1>
					<?php if($link) { ?>
						
						<div 
						class="
						hero__button-wrap">

							<a 
							href="<?php echo $link['url']; ?>" 
							class="button button--primary hero__button" 
							target="<?php echo $link['target']; ?>"
							title="<?php echo $link['title']; ?>"><?php echo $link['title']; ?></a>

						</div>

					<?php } ?>

				</div>

			</div>

		</div>

	</div>

	<div class="scroll-trigger"></div>
	<div class="reset-trigger"></div>

</div>