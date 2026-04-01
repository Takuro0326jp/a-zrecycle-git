<?php get_header(); ?>

  <div id="blog-archive">
    <h3 class="heading-3"><span>お客様の声（買取実績）</span></h3>
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
