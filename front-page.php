<?php
  get_header('secondary');
  // le paramètre permet d'avoir un header des autres page 
?>

<div class="container">

  <div class="row">

      <h1><?php the_title(); ?></h1>
      <!-- param 1: ou il se trouve, param 2: deuxième partie du nom  -->
      <?php get_template_part('includes/section','content'); ?>
      
  </div>
  
</div>

<?php
  get_footer();
?>