<?php get_header(); global $post; ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div id="area-brand" class="cf">
<?php if($post->post_parent == false): ?>
<h3><?php the_title(); ?></h3>
<?php endif; ?>
<?php endwhile; else: ?>
<p>ページが見当たりません。</p>
<?php endif; ?>
<?php if (get_the_content()) {
  the_content();
} else {
  echo '<p>このページは準備中です。</p>';
}
$category_ID = get_field('brand_category');
if($category_ID):
$category = get_term( $category_ID );
?>
<div id="blog-archive">
<h3><?php echo $category->name; ?>の買取実績</h3>
<?php
$cat_title = get_the_title();
$args = array(
  'post_status' => 'publish',
  'posts_per_page' => 6,
  'post_type' => 'post',
  'category__in' => $category_ID,
  );
  $wp_query = new WP_Query( $args );
  if ( $wp_query->have_posts() ): ?>
<ul class="blog-archive-list">
  <?php while ( $wp_query->have_posts() ):
  $wp_query->the_post(); ?>
  <li>
    <a href="<?php the_permalink(); ?>">
    <?php $thumbnail_size = 'large';
    if(has_post_thumbnail()){
      the_post_thumbnail($thumbnail_size);
    } else {
      echo '<img src="'.catch_that_image().'" alt="">';
    } ?>
    </a>
    <?php
      $taxonomy = 'item';
      $terms = get_the_terms( $post->ID, $taxonomy );
      if ($terms && ! is_wp_error($terms)):
        echo '<div class="item-category">';
        foreach($terms as $term):
    ?>
      <a href="<?php echo home_url('/'); ?>item/<?php echo $term->slug; ?>"><?php echo $term->name; ?></a>
    <?php
      endforeach;
      echo '</div>';
    endif; ?>
    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
  </li>
  <?php endwhile; ?>
</ul>
<div class="btn-area">
  <a href="<?php echo get_category_link( $category_ID ); ?>" class="btn"><?php echo $category->name; ?>の買取実績一覧はこちら</a>
</div>
</div>
<?php else: ?>
<p>買取実績は準備中です。</p>
<?php endif; wp_reset_postdata(); ?>
<?php endif; ?>
</div>
<!-- callFooter -->
<?php get_footer(); ?>
<!-- /callFooter -->
