<?php get_header(); ?>

  <div id="product-contents">
    <?php
    $taxonomy = 'products-item';
    $term_slug = get_query_var('term');
    $the_term = get_term_by('slug', $term_slug, $taxonomy);
    $term_id = $the_term->term_id;
    $term_idsp = $taxonomy."_".$term_id;
    if (!is_paged()) {
    if( get_field('item_contents',$term_idsp) ) { ?>
    <?php the_field('item_contents',$term_idsp); ?>
    <?php } } ?>
    <div id="blog-archive">
      <div class="category-brand-links" style="margin: 0 auto 55px">
        <h3 class="product-heading-3"<?php if (is_paged()) echo ' style="margin-top:0;"'; ?>><span class="ttl-bg">そのほか高価買取中の人気のブランド</span></h3>
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
      <h3 class="product-heading-3"><span class="ttl-bg"><?php single_term_title(); ?>の買取実績</span></h3>
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
      <div class="pager">
        <?php if(function_exists('wp_pagenavi')):
         wp_pagenavi();
       endif; ?>
      </div><!-- .pager -->
      <?php else: ?>
      <p>買取実績は準備中です。</p>
      <?php endif; ?>
    </div>
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
    <div id="purchase-contents">
      <h3 class="heading-3"><span>選べる３つのお買取方法</span></h3>
      <ul class="purchase-list">
        <li>
          <h4>
            <span class="icon-shop">店頭で</span>
          </h4>
          <img src="/images/purchase/img_shop.jpg" alt="">
          <p>不要になった、家具や家電をお店までお持ち込みできる方は、まとめてお持ちください。専門のスタッフが迅速に買取査定いたします。</p>
          <div class="btn-area">
            <a href="/purchase/index.html" class="btn current">詳しくはこちら</a>
          </div>
        </li>
        <li>
          <h4>
            <span class="icon-send">郵送で</span>
          </h4>
          <img src="/images/purchase/img_send.jpg" alt="">
          <p>日本全国、送料無料にてお買取しております。お電話か下記フォームからご予約いただき<a href="/about/index.html#shop1">アドア世田谷買取センター</a>まで着払いにてご郵送ください。<br>（郵送でのお買取は3辺が170cm程度まで）</p>
          <div class="btn-area">
            <a href="/purchase/send.html" class="btn current">詳しくはこちら</a>
          </div>
        </li>
        <li>
          <h4>
            <span class="icon-delivery">出張で</span>
          </h4>
          <img src="/images/purchase/img_delivery.jpg" alt="">
          <p>東京23区、または近郊にお住まいの方は出張買取もご利用いただけます。お電話か下記フォームからご予約いただいた後、専門のスタッフがお伺いし、その場で査定いたします。</p>
          <div class="btn-area">
            <a href="/purchase/delivery.html" class="btn current">詳しくはこちら</a>
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

  <?php
  $term_slug = get_query_var('products-item');
  $term_ID = get_term_by('slug', $term_slug, 'products-item')->term_id;
  $relation_column = get_field( 'relation_column_category', 'products-item_'.$term_ID);
  if ($relation_column) {
    $relation_column_category = $relation_column->slug;
    $args = array(
      'paged' => $paged,
      'post_status' => 'publish',
      'post_type' => 'column',
      'posts_per_page' => 6,
      'tax_query' => array(
          array(
              'taxonomy' => 'column-cat',
              'field' => 'slug',
              'terms' => $relation_column_category
              ),
          ),
      );
  } else {
    $args = array(
      'paged' => $paged,
      'post_status' => 'publish',
      'post_type' => 'column',
      'posts_per_page' => 6
    );
  }
  query_posts($args);
  if ( have_posts() ) : ?>
  <div id="column-archive" class="top-column-archive">
  <h3 class="heading-3"><span>新着のコラム</span></h3>
  <ul class="column-archive-list">
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
        $taxonomy = 'column-cat';
        $terms = get_the_terms( $post->ID, $taxonomy );
        if ($terms && ! is_wp_error($terms)):
          echo '<div class="item-category">';
          foreach($terms as $term):
      ?>
        <a href="<?php echo home_url('/column/'); ?><?php echo $term->slug; ?>"><?php echo $term->name; ?></a>
      <?php
        endforeach;
        echo '</div>';
      endif; ?>
      <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
    </li>
    <?php endwhile; ?>
  </ul>
  <div class="btn-area">
    <a href="/column<?php if ($relation_column) echo '/'.$relation_column_category; ?>">もっと見る</a>
  </div>
  </div><!-- #column-archive -->
  <?php endif; wp_reset_query(); ?>
  <div class="column-validation">
    <h3 class="heading-3"><span>出張買取で必要なもの<br>本人確認書類（身分証明書）</span></h3>
    <p>家具をお売りいただく際に「本人確認書類」が必要となります。<br>必ず「氏名」「現住所」「生年月日(年齢)」が確認できる本人確認書類をご用意ください。本人確認書類とお申込みの住所が異なる場合は、別途公共料金の領収書のコピー（補助書類）が必須となります。</p>
    <p><b>■公共料金の領収書（補助書類）について</b><br>公共料金の領収書は、発行日より3ヶ月以内の「電力会社」「水道局」「ガス会社」発行のもので、本人名義と現住所が記載されているもののみ利用可能です。<br>※ご家族の別の方が世帯主の場合は、名字が同一であれば利用可能。</p>
    <div class="column-validation-box">
      <h4>ご利用いただける本人確認書類</h4>
      <ul>
        <li>運転免許所（現住所が記載されたもの）</li>
        <li>健康保険証（現住所が記載されたもの）</li>
        <li>学生証（顔写真付き、現住所が記載されたもの）</li>
        <li>マイナンバーカード</li>
        <li>パスポート（現住所が記載された日本政府発行のもの）</li>
        <li>住民基本台帳カード（顔写真付き）</li>
        <li>障がい者手帳（顔写真付き、現住所が記載されたもの）</li>
        <li>在留カード（現住所が記載されたもの）</li>
        <li>特別永住者証明書（現住所が記載されたもの）</li>
        <li>外国人登録証明書（現住所が記載されたもの）</li>
        <li>小型船舶免許所（現住所が記載されたもの）</li>
      </ul>
      <h4>出張買取をご利用の場合の注意点</h4>
      <p>古物営業法により、取引相手の確認が義務付けられています。<br>本人確認書類をご呈示されない場合は買取りできませんので、ご注意ください。<br> 有効期限切れ、海外で発行された免許証、住所変更をされていない場合、記載事項が最新でない本人確認書類はご利用いただけません。<br>18歳未満のお客様は親権者様のご同伴が必要となり、 保護者（親権者）様の本人確認書類でのお申込みとなります。<br>住民票・個人番号の通知カードはご利用いただけません。</p>
    </div>
  </div>
<!-- callFooter -->
<?php get_footer(); ?>
<!-- /callFooter -->
