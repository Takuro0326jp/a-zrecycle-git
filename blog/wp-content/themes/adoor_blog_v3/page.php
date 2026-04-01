<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="post" id="post-<?php the_ID(); ?>">
<?php the_content(); ?>
</div><!-- post-wrap -->
<?php endwhile; endif; ?>



<!-- callFooter -->
<?php get_footer(); ?>
<!-- /callFooter -->
