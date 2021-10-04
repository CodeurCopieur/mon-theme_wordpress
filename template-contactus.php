<?php
/*
Template Name: Contact us
*/
?>

<?php
  get_header();
?>

<div class="container">

  <h1><?php the_title(); ?></h1>

  <div class="row">

    <div class="col-lg-6">
       autre contenu
    </div>
    <div class="col-lg-6">

      <!-- param 1: ou il se trouve, param 2: deuxième partie du nom  -->
      <?php get_template_part('includes/section','content'); ?>

    </div>
  </div>

  
  
</div>

<?php
  get_footer();
?>