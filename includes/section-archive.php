<?php if( have_posts() ): while( have_posts() ): the_post();  ?>

<div class="col-md-4 mt-3">
  <div class="card" > <img class="card-img-top" src="https://static.pingendo.com/cover-moon.svg" alt="Card image cap">
    <div class="card-body">
      <h4 class="card-title"><?= the_title(); ?>(article)</h4>
      <p class="card-text"><?php the_excerpt(); ?></p>
      <a href="<?php the_permalink(); ?>" class="btn btn-success">Lire Plus</a>
    </div>
  </div>
</div>

<?php endwhile; else: endif; ?>