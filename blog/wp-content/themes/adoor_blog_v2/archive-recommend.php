<?php get_header(); ?>

<div id="recommend-top">
  <h3>買取一押し商品</h3>
  <p>家具の買取につきましては、当社指定のメーカー（ブランド）を買取の対象とさせていただいております。<br />ウニコやモモナチュラルといったシンプル系のものから、パシフィックファニチャー、D＆Dのような個性的なアイテムまで幅広くお取り扱い致しております。<br />デザイナーズ家具と言われるカッシーナ、アルフレックス等もまだまだ人気があり、他にもIDC（大塚家具）、ボーコンセプト等モダン系はもちろん、松本民芸、岩谷堂といった民芸家具も家具買取の対象となっております。<br /><small>※ネットショップやホームセンター等で購入された家具はお取り扱い出来かねるケースが多くございますのでご留意ください。</small></p>
  <p>家電・楽器につきましては、型番やモデル名をお知らせくださいませ。<br />まずはお気軽にお問い合わせください！</p>
</div><!-- #recommend-top -->
<?php if ( have_posts() ): ?>
<ul class="recommend-list">
<?php while (have_posts()) : the_post(); ?>
  <li class="recommend-list-item clearfix">
    <div class="item-photo">
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
    <div class="item-txt clearfix">
      <?php the_content(); ?>
      <?php if(post_custom( 'url' )): ?>
      <p class="link"><a href="<?php echo post_custom( 'url' ); ?>">詳しくはこちら</a></p>
      <?php endif; ?>
    </div>
  </li>
<?php endwhile; ?>
</ul>
<div class="pager">
  <?php if(function_exists('wp_pagenavi')):
   wp_pagenavi();    //wp_pagenavi()の呼び出し
 endif; ?>
</div><!-- .pager -->
<?php else : ?>
<p>買取一押し商品は準備中です。</p>
<?php endif; ?>
<?php wp_reset_query(); ?>

<!-- callFooter -->
<?php get_footer(); ?>
<!-- /callFooter -->
