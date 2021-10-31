<?= 
  get_header();
?>
<section class="page-wrap">
  <div class="container">
    <div class="row">
    <h1><?php echo single_cat_title() ?></h1>
      <!-- param 1: ou il se trouve, param 2: deuxième partie du nom  -->
      <?= get_template_part('includes/section','archive'); ?>

      
      <div class="py-2">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <ul class="pagination">
                <li class="page-item"> <?php previous_posts_link()?></li>
                <li class="page-item"> <?php next_posts_link();?></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?=
  get_footer();
?>