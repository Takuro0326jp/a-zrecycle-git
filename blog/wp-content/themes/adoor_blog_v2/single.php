<?php get_header(); ?>

<div id="blog-detail">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <div class="post" id="post-<?php the_ID(); ?>">
    <h2 class="post-title"><?php the_title(); ?></h2>

    <?php
      $taxonomy = 'item';
      $terms = get_the_terms( $post->ID, $taxonomy );
      if ($terms && ! is_wp_error($terms)):
      echo '<p class="post-category">';
      foreach($terms as $term):
      $term_url = get_term_link($term->slug, $taxonomy);
    ?>
    <a href="<?php echo $term_url; ?>" class="category--<?php echo $term->slug; ?>"><?php echo $term->name; ?></a>
    <?php break; endforeach;
    echo '</p>';
    endif; ?>
    <?php the_date('', '<p class="post-date tr">', '</p>') ?>

    <div class="entry clearfix">
    <?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
    </div>

  </div>

  <nav role="navigation" class="page-navigation">
    <div class="prev">
      <?php if( get_previous_post() ): ?>
        <?php previous_post_link('%link', '%title'); ?>
      <?php endif; ?>
    </div>
    <div class="back">
      <a href="<?php echo home_url('/'); ?>">一覧に戻る</a>
    </div>
    <div class="next">
      <?php if( get_next_post() ): ?>
        <?php next_post_link('%link', '%title'); ?>
      <?php endif; ?>
    </div>
  </nav>
  <?php endwhile; else: ?>
  <p>このページは準備中です。</p>
  <?php endif; ?>
</div>

<!-- callFooter -->
<?php get_footer(); ?>
<!-- /callFooter -->
