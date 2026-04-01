<?php get_header(); ?>

  <div id="blog-archive">
    <h3 class="heading-3"><span>お客様の声（買取実績）</span></h3>
    <div class="category-brand-links">
      <ul class="category-brand-list">
      <?php
        $maker_id = '';
        $taxonomy_slug = 'category';
        $maker = get_category_by_slug( 'maker' );
        foreach ($maker as $key => $value) {
          if ($key == 'term_id') {
            $maker_id = $value;
          }
        }
        $terms = get_terms($taxonomy_slug, array(
          'orderby' => 'count',
          'parent' => $maker_id,
          'order' => 'DESC',
        ));
        if( $terms && !is_wp_error($terms) ){
          foreach ( $terms as $value ) {
            echo '<li><a href="'.get_term_link($value->slug,$taxonomy_slug).'">'.esc_html($value->name).'</a></li>';
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
    <p>アドア東京で家具買取をさせていただいたお客様の声や、買い取り実績をアップしています。<br>信頼と実績のアドアにぜひご相談ください。</p>
    <?php if ( have_posts() ): ?>
    <ul class="blog-archive-list">
      <?php while (have_posts()) : the_post(); ?>
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
    <div class="pager">
      <?php if(function_exists('wp_pagenavi')):
       wp_pagenavi();    //wp_pagenavi()の呼び出し
     endif; ?>
    </div><!-- .pager -->
    <?php else: ?>
    <p>お客様の声（買取実績）は準備中です。</p>
    <?php endif; ?>
  </div>

<!-- callFooter -->
<?php get_footer(); ?>
<!-- /callFooter -->
