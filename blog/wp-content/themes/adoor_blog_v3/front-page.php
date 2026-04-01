<?php
/*
Template Name: トップページ専用テンプレート
*/
?>
<?php get_header(); ?>
<div class="information-archive">
  <h3>
    <span>Information</span>
  </h3>
<?php
$args = array(
  'paged' => $paged,
  'post_status' => 'publish',
  'post_type' => 'information',
  'posts_per_page' => 5,
);
query_posts($args);
if ( have_posts() ) : ?>
  <ul class="information-list">
  <?php while ( have_posts() ) : the_post(); ?>
    <li>
      <time class="post-date"><?php the_time( 'Y.m.d' ); ?></time>
      <?php
        $taxonomy = 'info_cat';
        $terms = get_the_terms( $post->ID, $taxonomy );
        if ($terms && ! is_wp_error($terms)):
        echo '<span class="post-category">';
        foreach($terms as $term):
        $term_url = get_term_link($term->slug, $taxonomy);
      ?>
      <a href="<?php echo $term_url; ?>" class="category--<?php echo $term->slug; ?>"><?php echo $term->name; ?></a>
      <?php break; endforeach;
      echo '</span>';
      endif; ?>
      <span class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
    </li>
  <?php endwhile; // 繰り返し処理終了 ?>
  </ul>
  <?php else: ?>
  <p>新しいお知らせはありません。</p>
  <?php endif; ?>
</div>


<?php wp_reset_query(); ?>

<!--
<div class="top-banners clearfix">
  <a href="/jisseki/28113" class="left">
    <img src="./images/idx/bnr_apaman.jpg" width="100%" alt="adoor×apaman">
  </a>
  <a href="/brand" class="right">
    <img src="./images/idx/bnr_brand.jpg" width="100%" alt="ブランド家具買取強化中！">
  </a>
</div>
-->
<?php


$args = array(
  'paged' => $paged,
  'post_status' => 'publish',
  'post_type' => 'products',
  'posts_per_page' =>  27,
);
query_posts($args);
if ( have_posts() ) : ?>
<div id="blog-archive" class="top-blog-archive">
<h3 class="heading-3"><span>新着の買取実績</span></h3>
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
<div class="btn-area">
  <a href="/products">もっと見る</a>
</div>
</div><!-- #blog-archive -->
<?php endif; wp_reset_query(); ?>
<div class="top-shop">
  <h3>
    <img src="./images/idx/shop_fukidashi.png" alt="What’s ｢a door｣? " width="170">
    アドア東京｜A door東京って、どんなお店？
  </h3>
  <div class="cont clearfix">
    <div class="img">
      <img src="./images/idx/shop_img.jpg" alt="アドア東京">
    </div>
    <div class="txt">
      <p class="large">Old is not old.<br>
あなたと共に大切な時間を過ごしてきた家具を私たちが繋いでいきます。<br>
長年大切に使われてきた家具は、手放す先によってその価値が理解されず古い家具として扱われてしまう事があります。<br>
私たちは作り手の想いが込められた家具だからこそ、長い間さまざまな人の手に渡り<br>
現在まで残されてきたのではないかと思っております。<br>
私たちは「様々な理由で手放さざるをえなくなった家具を、同じ感性をもった、その価値の分かる方々へ橋渡しをしたい」<br>
という思いのもと ”アドア東京” を立ち上げました。<br>
価値のある家具を未来へ残し、素敵な家具に囲まれた豊かな生活を想像し活動しております。</p>
      <p>世田谷店（店頭買取窓口）〒158-0098　東京都世田谷区上用賀6-26-7 </p>
    </div>
  </div>
</div>
<?php
$args = array(
  'paged' => $paged,
  'post_status' => 'publish',
  'post_type' => 'column',
  'posts_per_page' => 6,
);
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
  <a href="/column">もっと見る</a>
</div>
</div><!-- #column-archive -->
<?php endif; wp_reset_query(); ?>
<div class="top-products">
  <h3><span>取り扱い商品</span></h3>
  <ul>
    <li>
      <a href="/products/design-furniture"><img src="./images/idx/product_img02.jpg" alt="ブランド家具"></a>
      <div class="txt">北欧家具・カッシーナ・B&B・IDC大塚家具などブランド家具からヴィンテージ家具まで名作家具を高価買取致します。</div>
      <div class="link">
        <a href="/products/design-furniture">詳しくはこちら</a>
      </div>
    </li>
    <li>
      <a href="/products/bed"><img src="./images/idx/product_img05.jpg" alt="ベッド"></a>
      <div class="txt">テンピュール・シモンズ・シーリー・キングスダウンなど高級ベッドを高価買取致します。</div>
      <div class="link">
        <a href="/products/bed">詳しくはこちら</a>
      </div>
    </li>
    <li>
      <a href="/products/antique"><img src="./images/idx/product_img06.jpg" alt="ビンテージ家具"></a>
      <div class="txt">ウェグナー・フィンユール・G-PLAN・アーコールなど北欧家具をはじめヴィンテージ家具を高価買取致します。</div>
      <div class="link">
        <a href="/products/antique">詳しくはこちら</a>
      </div>
    </li>
    <li>
      <a href="/products/instrument"><img src="./images/idx/product_img03.jpg" alt="楽器・オーディオ"></a>
      <div class="txt">弦楽器、管楽器、鍵盤楽器などの他、オーディオ、DJ機器、スタジオ機材など音楽機材全般を高価買取しています。</div>
      <div class="link">
        <a href="/products/instrument">詳しくはこちら</a>
      </div>
    </li>

    <li>
      <a href="/products/bicycle"><img src="./images/idx/product_img04.jpg" alt="自転車"></a>
      <div class="txt">モールトン・ブロンプトン・キャノンデール・スペシャライズドなどロードバイクから電動自転車まで高価買取いたします。</div>
      <div class="link">
        <a href="/products/bicycle">詳しくはこちら</a>
      </div>
    </li>

    <li>
      <a href="/products/home-electronics"><img src="./images/idx/product_img01.jpg" alt="家電"></a>
      <div class="txt">ヤマギワ・ダイソン・バルミューダなどブランド照明・デザイン家電・輸入家電を高価買取いたします。</div>
      <div class="link">
        <a href="/products/home-electronics">詳しくはこちら</a>
      </div>
    </li>
  </ul>
</div>
<div id="brand-top" class="top-brand">
  <h3><span>高価買取ブランド</span></h3>
  <ul class="brand-logo-list">
    <li><a href="/brand/idc"><img src="/images/brand/brand_logo01.jpg" alt="idc大塚家具"></a></li>
    <li><a href="/brand/cassina-ixc"><img src="/images/brand/brand_logo02.jpg" alt="カッシーナ"></a></li>
    <li><a href="/brand/arflex"><img src="/images/brand/brand_logo03.jpg" alt="アルフレックス"></a></li>
    <li><a href="/brand/simmons"><img src="/images/brand/brand_logo04.jpg" alt="simmons"></a></li>
    <li><a href="/brand/actus"><img src="/images/brand/brand_logo05.jpg" alt="アクタス"></a></li>
    <li><a href="/brand/herman-miller"><img src="/images/brand/brand_logo06.jpg" alt="ハーマンミラー"></a></li>
    <li><a href="/brand/karimoku60"><img src="/images/brand/brand_logo07.jpg" alt="カリモク60"></a></li>
    <li><a href="/brand/masterwal"><img src="/images/brand/brand_logo08.jpg" alt="マスターウォール"></a></li>
	</ul>
  <div class="btn-area">
    <a href="/brand">高価買取ブランドTOPはこちら</a>
  </div>
</div><!-- #brand-top -->
<div class="top-bed">
  <h3>
    <img src="./images/idx/bed_fukidashi.png" alt="ベッドの買取もOK!!" width="170">
    アドア東京｜A door東京の特徴
  </h3>
  <div class="cont">
    <p class="large">アドア東京では他社では取り扱いの少ないベッド買取を行なっております。</p>
    <div class="clearfix">
      <div class="img">
        <img src="./images/idx/bed_img.jpg" alt="">
      </div>
      <div class="txt">
        <p>10年以上経過したベッドは対象外になりますが、ブランドやメーカー次第ではフレームのみのお引取りも可能です。お問い合わせの際に「使用年数・メーカー・サイズ」をお知らせいただけますとスムーズに査定ができます。<br>また、家具買取以外にも家具の輸入も行なっております。</p><p>当社バイヤーがアメリカ・イギリスへ直接買い付けに行き、確かな目で厳選したものを仕入れております。</p><p>国内外のUSED品を買取致しております。家具買取はもちろん、再利用可能なアイテムを買取致します。</p><p>当社は大規模から小規模まで、一点から大口まで柔軟に対応致します。また、急なお引越しの際などにも迅速に対応致しておりますので、どうぞお気軽にお問い合わせください。</p>
      </div>
    </div>
  </div>
</div>

<!-- Footer Start -->
<?php get_footer(); ?>
<!-- Footer End -->
