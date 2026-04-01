<?php get_header(); ?>

<div class="information-archive" id="information-archive">
  <h3>
    <span>Information</span>
  </h3>
  <?php if ( have_posts() ): ?>
  <ul class="information-list">
    <?php while (have_posts()) : the_post(); ?>
      <li>
        <a href="<?php the_permalink(); ?>">
        <time class="post-date"><?php the_time( 'Y.m.d' ); ?></time>
        <?php
          $taxonomy = 'info_cat';
          $terms = get_the_terms( $post->ID, $taxonomy );
          if ($terms && ! is_wp_error($terms)):
          echo '<span class="post-category">';
          foreach($terms as $term):
          $term_url = get_term_link($term->slug, $taxonomy);
        ?>
        <span class="category--<?php echo $term->slug; ?>"><?php echo $term->name; ?></span>
        <?php break; endforeach;
        echo '</span>';
        endif; ?>
        <span class="post-title"><?php the_title(); ?></span>
        </a>
      </li>
    <?php endwhile; ?>
  </ul>
  <div class="pager">
    <?php if(function_exists('wp_pagenavi')):
     wp_pagenavi();    //wp_pagenavi()の呼び出し
   endif; ?>
  </div><!-- .pager -->
  <?php else: ?>
  <p>新しいお知らせはありません。</p>
  <?php endif; ?>
</div><!-- #faq-main -->


<!-- callFooter -->
<?php get_footer(); ?>
<!-- /callFooter -->
