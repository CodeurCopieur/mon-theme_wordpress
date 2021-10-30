<?= 
  get_header();
?>
<section class="page-wrap">
  <div class="container">

    <h1><?= the_title(); ?>(je suis une page)</h1>

    <!-- param 1: ou il se trouve, param 2: deuxième partie du nom  -->
    <?= get_template_part('includes/section','content'); ?>
    
  </div>
</section>
<?=
  get_footer();
?>