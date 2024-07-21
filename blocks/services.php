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
        
        <div 
        class="
        col-12">
        
          <h2 class="heading-1"><?php echo $title; ?></h2>
          <?php echo $text; ?>
        
        </div>
      
      </div>

      <div 
      class="
      row">
      <?php /* if($services) {
        foreach($services as $service) { ?>
        <div 
        class="
        col-12 
        col-md-4">
          <?php echo $service; ?>
        </div>
      <?php } } */ ?>
      <!---------->
      <!---------->
        <div 
          class="
          col-12 
          col-md-4">
            <img src="https://littlepeopledietitian.harryray.co.uk/wp-content/uploads/2024/07/service_thumbnail_example_no_label.jpg" />
            <a href="/">
              <div>
                <span>Allergy Weaning Academy</span>
              </div>
            </a>
        </div>
      <!---------->
        <div 
          class="
          col-12 
          col-md-4">
            <img src="https://littlepeopledietitian.harryray.co.uk/wp-content/uploads/2024/07/service_thumbnail_example_no_label.jpg" />
            <a href="/">
              <div>
                <span>1:1 Consults</span>
              </div>
            </a>
        </div>
      <!---------->
        <div 
          class="
          col-12 
          col-md-4">
            <img src="https://littlepeopledietitian.harryray.co.uk/wp-content/uploads/2024/07/service_thumbnail_example_no_label.jpg" />
            <a href="/">
              <div>
                <span>Free Resources</span>
              </div>
            </a>
        </div>
      <!---------->
      <!---------->
      </div>

  </div>

</div>