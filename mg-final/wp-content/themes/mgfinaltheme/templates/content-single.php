<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <div class="whole" style="background-image:url('<?php echo get_field('image'); ?>');">
    <div class="center-div">
        
    </div>
    
      <div class="center-div-text">
      <h1><?php echo get_field('topic'); ?></h1>
        <p><?php echo get_field('theories'); ?></p>
      </div>
        </div>
  </article>
<?php endwhile; ?>
