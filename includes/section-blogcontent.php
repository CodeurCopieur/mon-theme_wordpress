<?php if( have_posts() ): while( have_posts() ): the_post();  ?>

<?php 
  $fname = get_the_author_meta('first_name');
  $lname = get_the_author_meta('last_name');
  $tags = get_the_tags();
  $categories = get_the_category();
?>


<p>Par <?php echo $fname; ?> <?php echo $lname;?> alias <?php the_author();?></p>
<div class="col-md-12"> 
  <img class="img-fluid d-block" src="https://static.pingendo.com/cover-moon.svg" > 
</div>
<p>Publié le <?php echo get_the_date('d/m/Y à h:i:s'); ?></p>

<?php 
  the_content();
?>

<?php foreach($categories as $cat): ?>
  <a href="<?php echo get_category_link($cat->term_id); ?>"  class="btn btn-primary"><?php echo $cat->name; ?></a>
<?php endforeach; ?>

<?php foreach($tags as $tag): ?>
  <a href="<?php echo get_tag_link($tag->term_id); ?>" class="btn btn-outline-success"><?php echo $tag->name; ?></a>
<?php endforeach; ?>



<?php endwhile; else: endif; ?>