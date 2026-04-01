<?php get_header(); ?>
<div id="product-contents">
<?php if (!is_paged()) : ?>
<h2><img src="/images/products/index_fukidashi.png" alt="家具、家電、楽器の高価買取なら" width="200">アドア東京のお取り扱い商品</h2>
	<p>◇有名なデザイナーの家具から様々なブランド家具まで、<br>
過去にお買取りさせていただいたお品物の一部をご紹介いたします。<br>
	<br>
※アドア東京でお取り扱いしているアイテムの一つの目安としてご参考ください。<br>
当店では、気持ち良くお使いいただくために適切なメンテナンスを行っています。<br>
すでに新しい持ち主の元に渡っていったものも多くありますが、<br>
お探しの物がありましたら、お気軽に在庫やお値段のお問合せもお待ちしております。</p>

<?php endif; //トップのみ
if ( have_posts() ) : ?>
<div id="blog-archive" style="margin-bottom: 50px;">
  <h3 class="product-heading-3"<?php if (is_paged()) echo ' style="margin-top:0;"'; ?>><span class="ttl-bg">買取実績</span></h3>
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
</div>
	
	<h3 class="heading-3"><span>取扱商品</span></h3>
	<div class="top-products">
<ul>
<li><a href="/products/design-furniture"><img src="/images/idx/product_img02.jpg" alt="ブランド家具"></a><div class="txt">北欧家具・カッシーナ・B&amp;B・IDC大塚家具などブランド家具からヴィンテージ家具まで名作家具を高価買取致します。</div>
<div class="link"><a href="/products/design-furniture">詳しくはこちら</a></div>
</li>
<li><a href="/products/bed"><img src="/images/idx/product_img05.jpg" alt="ベッド"></a><div class="txt">テンピュール・シモンズ・シーリー・キングスダウンなど高級ベッドを高価買取致します。</div>
<div class="link"><a href="/products/bed">詳しくはこちら</a></div>
</li>
<li><a href="/products/antique"><img src="/images/idx/product_img06.jpg" alt="ビンテージ家具"></a><div class="txt">ウェグナー・フィンユール・G-PLAN・アーコールなど北欧家具をはじめヴィンテージ家具を高価買取致します。</div>
<div class="link"><a href="/products/antique">詳しくはこちら</a></div>
</li>
<li><a href="/products/instrument"><img src="/images/idx/product_img03.jpg" alt="楽器・オーディオ"></a><div class="txt">弦楽器、管楽器、鍵盤楽器などの他、オーディオ、DJ機器、スタジオ機材など音楽機材全般を高価買取しています。</div>
<div class="link"><a href="/products/instrument">詳しくはこちら</a></div>
</li>
<li><a href="/products/bicycle"><img src="/images/idx/product_img04.jpg" alt="自転車"></a><div class="txt">モールトン・ブロンプトン・キャノンデール・スペシャライズドなどロードバイクから電動自転車まで高価買取いたします。</div>
<div class="link"><a href="/products/bicycle">詳しくはこちら</a></div>
</li>
<li><a href="/products/home-electronics"><img src="/images/idx/product_img01.jpg" alt="家電"></a><div class="txt">ヤマギワ・ダイソン・バルミューダなどブランド照明・デザイン家電・輸入家電を高価買取いたします。</div>
<div class="link"><a href="/products/home-electronics">詳しくはこちら</a></div>
</li>
</ul>
</div>


<?php endif; wp_reset_postdata(); ?>
<div class="top-shop">
<h3><img src="/images/idx/shop_fukidashi.png" alt="What’s ｢a door｣? " width="170">アドア東京｜A door東京って、どんなお店？</h3>
<div class="cont clearfix">
<div class="img"><img src="/images/idx/shop_img.jpg" alt="アドア東京"></div>
<div class="txt">
<p class="large">「アドア東京は家具、家電、楽器買取の専門ショップです。」</p>
<p>店舗名： 【adoor東京】世田谷店「買い取りセンター」<br>住所： 〒158-0098<br>東京都世田谷区上用賀6-26-7永井ビル1F<br>電話・FAX： TEL/0120-531-017 / FAX/03-3706-3380<br>古物商許可番号： 東京都公安委員会許可 第303270407882号<br>営業時間： 10：00～19：00<br>取扱内容： 店頭買取、郵送買取、出張買取受付販売など</p>
</div>
</div>
</div>
</div>
<?php
$args = array(
  //'paged' => $paged,
  'post_status' => 'publish',
  'post_type' => 'column',
  'posts_per_page' => 6,
);
$query = new WP_Query( $args );
if ( $query->have_posts() ): ?>
<div id="column-archive" class="top-column-archive">
<h3 class="heading-3"><span>新着のコラム</span></h3>
<ul class="column-archive-list">
  <?php while ( $query->have_posts() ) : $query->the_post(); ?>
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
  <a href="/column">もっと見る</a>
</div>
</div><!-- #column-archive -->
<?php endif; wp_reset_postdata(); ?>
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
