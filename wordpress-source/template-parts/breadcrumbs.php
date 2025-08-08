	<div class="breadcrumbs">
	  <div class="container">
	    <?php
      if (!is_front_page() && function_exists('yoast_breadcrumb')) {
        yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
      }
      ?>
	  </div>
	</div>