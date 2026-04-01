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
}?>
<div id="blog-archive">
<?php
$brand_ID = get_field('products_brand');
if($brand_ID):
$brand_term = get_term( $brand_ID );
?>
<h3><?php echo $brand_term->name; ?>の買取実績</h3>
<?php
$cat_title = get_the_title();
$args = array(
  'post_status' => 'publish',
  'posts_per_page' => 15,
  'post_type' => 'products',
  'tax_query' => array(
    array(
      'taxonomy' => 'products-brand',
      'field' => 'slug',
      'terms' => $brand_term->slug,
    )
  ),
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
      $taxonomy = 'products-item';
      $terms = get_the_terms( $post->ID, $taxonomy );
      if ($terms && ! is_wp_error($terms)):
        echo '<div class="item-category">';
        foreach($terms as $term):
    ?>
      <a href="<?php echo home_url('/products/'); ?><?php echo $term->slug; ?>"><?php echo $term->name; ?></a>
    <?php
      endforeach;
      echo '</div>';
    endif; ?>
    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
  </li>
  <?php endwhile; ?>
</ul>
<div class="btn-area">
  <a href="<?php echo home_url('/products/brand/').$brand_term->slug; ?>" class="btn"><?php echo $brand_term->name; ?>の買取実績一覧はこちら</a>
</div>
<?php else: ?>
<p>買取実績は準備中です。</p>
<?php endif; wp_reset_postdata(); ?>
<?php endif; ?>
<div class="category-brand-links" style="margin: 0 auto 55px">
  <h3 class="product-heading-3" style="margin-top: 30px"><span class="ttl-bg">そのほか高価買取中の人気のブランド</span></h3>
  <ul class="category-brand-list">
  <?php
    $maker_id = '';
    $taxonomy_slug = 'products-brand';
    $terms = get_terms($taxonomy_slug, array(
      'orderby' => 'count',
      'order' => 'DESC',
    ));
    if( $terms && !is_wp_error($terms) ){
      foreach ( $terms as $value ) {
        echo '<li><a href="'.esc_url( home_url( '/products/brand/' ) ).$value->slug.'">'.esc_html($value->name).'</a></li>';
      }
    }
  ?>
  </ul>
  <div class="more-link">
    <button type="button" class="show-more">
      <span>もっと見る</span>
    </button>
  </div>
</div>
</div>
</div>
<!-- callFooter -->
<?php get_footer(); ?>
<!-- /callFooter -->
