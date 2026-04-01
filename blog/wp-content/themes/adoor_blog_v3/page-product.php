<?php
/*
Template Name: 取り扱い商品テンプレート
*/
?>
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="post" id="post-<?php the_ID(); ?>">
  <div id="product-contents">
    <?php the_content(); ?>

    <?php
    $term_objects = get_field('set_item');
    if($term_objects) {
      $term_slugs = array_column($term_objects, 'slug');
      $term_names = array_column($term_objects, 'name');
      $link_slug = $term_slugs[0];
      $term_name = '';
      if (is_page('design-furniture')) {
        $term_name = 'ブランド家具・一般家具';
      } else {
        foreach ($term_names as $val) {
          if ($val === end($term_names)) {
            $term_name .= $val;
          } else {
            $term_name .= $val.'・';
          }
        }
      }
      $args = array(
        'paged' => $paged,
        'post_status' => 'publish',
        'post_type' => 'post',
        'posts_per_page' => 6,
        'tax_query' => array(
    			array(
    					'taxonomy' => 'item',
    					'field' => 'slug',
    					'terms' => $term_slugs
    				)
    			)
      );
    } else {
      $args = array(
        'paged' => $paged,
        'post_status' => 'publish',
        'post_type' => 'post',
        'posts_per_page' => 15
      );
    }
    query_posts($args);
    if ( have_posts() ) : ?>
    <div id="blog-archive" class="top-blog-archive">
      <?php if($term_objects) { ?>
      <h3 class="product-heading-3"><span class="ttl-bg"><?php echo $term_name; ?>の買取実績</span></h3>
      <?php } else { ?>
      <h3 class="product-heading-3"><span class="ttl-bg">新着の買取実績</span></h3>
      <?php } ?>
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
            <a href="<?php echo home_url('/jisseki/'); ?>item/<?php echo $term->slug ?>"><?php echo $term->name; ?></a>
          <?php
            endforeach;
            echo '</div>';
          endif; ?>
          <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        </li>
        <?php endwhile; ?>
      </ul>
      <div class="btn-area">
        <?php if($term_objects) { ?>
        <a href="/jisseki/item/<?php echo $link_slug; ?>">もっと見る</a>
        <?php } else { ?>
        <a href="/jisseki/">もっと見る</a>
        <?php } ?>
      </div>
    </div>
    <?php endif; ?>
    <?php wp_reset_query(); ?>

    <div class="top-products">
      <h3><span class="ttl-bg">取り扱い商品</span></h3>
      <ul>
        <li>
        <a href="/products/design-furniture"><img src="/images/idx/product_img02.jpg" alt="ブランド家具"></a>
        <div class="txt">北欧家具・カッシーナ・B&B・IDC大塚家具などブランド家具からヴィンテージ家具まで名作家具を高価買取致します。</div>
        <div class="link">
          <a href="/products/design-furniture">詳しくはこちら</a>
        </div>
      </li>
      <li>
        <a href="/products/bed"><img src="/images/idx/product_img05.jpg" alt="ベッド"></a>
        <div class="txt">テンピュール・シモンズ・シーリー・キングスダウンなど高級ベッドを高価買取致します。</div>
        <div class="link">
          <a href="/products/bed">詳しくはこちら</a>
        </div>
      </li>
      <li>
        <a href="/products/antique"><img src="/images/idx/product_img06.jpg" alt="ビンテージ家具"></a>
        <div class="txt">ウェグナー・フィンユール・G-PLAN・アーコールなど北欧家具をはじめヴィンテージ家具を高価買取致します。</div>
        <div class="link">
          <a href="/products/antique">詳しくはこちら</a>
        </div>
      </li>
      <li>
        <a href="/products/instrument"><img src="/images/idx/product_img03.jpg" alt="楽器・オーディオ"></a>
        <div class="txt">弦楽器、管楽器、鍵盤楽器などの他、オーディオ、DJ機器、スタジオ機材など音楽機材全般を高価買取しています。</div>
        <div class="link">
          <a href="/products/instrument">詳しくはこちら</a>
        </div>
      </li>
      <li>
        <a href="/products/bicycle"><img src="/images/idx/product_img04.jpg" alt="自転車"></a>
        <div class="txt">モールトン・ブロンプトン・キャノンデール・スペシャライズドなどロードバイクから電動自転車まで高価買取いたします。</div>
        <div class="link">
          <a href="/products/bicycle">詳しくはこちら</a>
        </div>
      </li>
      <li>
        <a href="/products/home-electronics"><img src="/images/idx/product_img01.jpg" alt="家電"></a>
        <div class="txt">ヤマギワ・ダイソン・バルミューダなどブランド照明・デザイン家電・輸入家電を高価買取いたします。</div>
        <div class="link">
          <a href="/products/home-electronics">詳しくはこちら</a>
        </div>
      </li>
    </ul>
    </div>
    <div class="top-shop">
      <h3><img src="/images/idx/shop_fukidashi.png" alt="What’s ｢a door｣? " width="170">アドア東京｜A door東京って、どんなお店？</h3>
      <div class="cont clearfix">
        <div class="img">
          <img src="/images/idx/shop_img.jpg" alt="アドア東京">
        </div>
        <div class="txt">
          <p class="large">「アドア東京は家具、家電、楽器買取の専門ショップです。」</p>
          <p>店舗名：【adoor東京】世田谷店「買い取りセンター」<br>
          住所： 〒158-0098<br>
          東京都世田谷区上用賀6-26-7永井ビル1F<br>
          電話・FAX： TEL/0120-531-017 / FAX/03-3706-3380<br>
          古物商許可番号： 東京都公安委員会許可 第303270407882号<br>
          営業時間： 10：00～19：00<br>
          取扱内容： 店頭買取、郵送買取、出張買取受付販売など</p>
        </div>
      </div>
    </div>
  </div>
</div><!-- post -->
<?php endwhile; endif; ?>



<!-- callFooter -->
<?php get_footer(); ?>
<!-- /callFooter -->
