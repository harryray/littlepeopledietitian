<?php 

  $title = get_sub_field('title');
  $text = get_sub_field('text');
  $services = get_sub_field('services');

?>
<div 
class="
block
services 
background--white">

	
  <div 
    class="
    container">

      <div 
      class="
      row">
        <h2><?php echo $title; ?></h2>
        <?php echo $text; ?>
      </div>

      <div 
      class="
      row">
      <?php if($services) {
        foreach($services as $service) { ?>
        <div 
        class="
        col-12 
        col-md-4">
          <?php echo $service; ?>
        </div>
      <?php } } ?>
      </div>

  </div>

</div>