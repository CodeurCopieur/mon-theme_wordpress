<?= 
  get_header();
?>

<div class="container">

  <h1><?= the_title(); ?></h1>

  <!-- param 1: ou il se trouve, param 2: deuxième partie du nom  -->
  <?= get_template_part('includes/section','content'); ?>
  
</div>

<?=
  get_footer();
?>