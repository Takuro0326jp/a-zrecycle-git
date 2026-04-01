<?php get_header(); ?>
<div id="recommend-top">
  <h3>買取一押し商品</h3>
</div><!-- #recommend-top -->
<?php if ( have_posts() ): ?>
<div id="recommend-detail">
  <h4><?php the_title(); ?></h4>
  <?php while (have_posts()) : the_post(); ?>
  <div class="clearfix">
    <div class="recommend-detail-photo">
      <?php if(post_custom( 'url' )): ?>
      <a href="<?php echo post_custom( 'url' ); ?>">
      <?php endif; ?>
        <?php if(has_post_thumbnail()): ?>
        <?php the_post_thumbnail('large'); ?>
        <?php else: ?>
        <img src="images/no_image.jpg" alt="No Image" />
        <?php endif; ?>
      <?php if(post_custom( 'url' )): ?>
      </a>
      <?php endif; ?>
    </div>
    <div class="recommend-detail-txt clearfix">
      <?php the_content(); ?>
      <?php if(post_custom( 'url' )): ?>
      <p class="link"><a href="<?php echo post_custom( 'url' ); ?>">詳しくはこちら</a></p>
      <?php endif; ?>
    </div>
  </div>
<?php endwhile; ?>
</div>
<?php endif; ?>
<!-- callFooter -->
<?php get_footer(); ?>
<!-- /callFooter -->
