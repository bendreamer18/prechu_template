<?php if (have_posts()) : ?>                    
  <?php     while (have_posts()) : the_post(); ?>

							<!-- Код самой статьи -->

<?php endwhile; ?>
<div class="pagenavi"><?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?></div>
<?php else : ?>
<?php endif; ?>