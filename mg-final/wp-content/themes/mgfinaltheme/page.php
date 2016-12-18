<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
    <div class="whole">
        <div class="top left"></div>
        <div class="top right"></div>
        <div class="bottom left"></div>
        <div class="bottom right"></div>
    </div>
<?php endwhile; ?>
