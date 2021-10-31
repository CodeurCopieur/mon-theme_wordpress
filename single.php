<?= 
  get_header();
?>
<section class="page-wrap">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <h1><?= the_title(); ?> - (je suis dans une article)</h1>
        <!-- param 1: ou il se trouve, param 2: deuxième partie du nom  -->
        <?= get_template_part('includes/section','blogcontent'); ?>
      </div>
      <div class="col-md-4">
        
      </div>
    </div>
  </div>
</section>
<?=
  get_footer();
?>