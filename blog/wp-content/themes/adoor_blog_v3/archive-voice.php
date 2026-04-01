<?php get_header(); ?>

  <div id="voice-archive">
    <h2><span class="ttl-bg">お客様の声<small>（アドアの口コミ）</small></span></h2>
    <?php if ( have_posts() ): ?>
    <ul class="voice-archive-list">
      <?php while (have_posts()) : the_post(); ?>
      <li>
        <?php
          $rate = get_field('rate');
          $comment = get_field('comment');
        ?>
        <div class="block">
          <div class="block-header">
            <h3 class="tit"><?php the_title(); ?></h3>
            <?php if ($rate) {
              $percent = $rate / 5 * 100;
              $percent = $percent.'%';
            ?>
            <div class="rate">
              <div class="txt">おすすめ度：</div>
              <div class="star-ratings">
                <div class="star-ratings-top" style="width:<?php echo $percent;?>"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
                <div class="star-ratings-bottom"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
              </div>
              <?php
                echo '<div class="num">'.$rate.'</div>';
              ?>
            </div>
            <?php } ?>
            <div class="post-date"><?php the_time( 'Y年n月j日' ); ?></div>
          </div>
          <div class="block-body">
            <?php if ($comment) {
              echo '<div class="comment"><h4>【コメント】</h4><p>'.nl2br($comment).'</p></div>';
            } ?>
          </div>
        </div>
      </li>
      <?php endwhile; ?>
    </ul>
    <div class="pager">
      <?php if(function_exists('wp_pagenavi')):
       wp_pagenavi();    //wp_pagenavi()の呼び出し
     endif; ?>
    </div><!-- .pager -->
    <?php else: ?>
    <p>お客様の声は準備中です。</p>
    <?php endif; ?>
  </div>
<!-- callFooter -->
<?php get_footer(); ?>
<!-- /callFooter -->
