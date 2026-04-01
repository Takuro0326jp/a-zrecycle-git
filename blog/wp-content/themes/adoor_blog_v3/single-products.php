<?php get_header(); ?>

<div id="blog-detail">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <div class="post" id="post-<?php the_ID(); ?>">
    <h2 class="post-title"><?php the_title(); ?></h2>
    <?php
      global $post;
      $post_data = $post;
      $taxonomy = 'products-item';
      $terms = get_the_terms( $post->ID, $taxonomy );
      $term_slug = '';
      if ($terms && ! is_wp_error($terms)):
      echo '<p class="post-category">';
      foreach($terms as $term):
      $term_slug = $term->slug;
      $term_name = $term->name;
      $term_url = home_url('/products/').$term_slug;

      $terms_brand = get_the_terms( $post->ID, 'products-brand' );
      $brand_slug = '';
      $brand_name = '';
      if ($terms_brand && ! is_wp_error($terms_brand)) {
        foreach($terms_brand as $brand) {
          $brand_slug = $brand->slug;
          $brand_name = $brand->name;
        }
      }
    ?>
    <a href="<?php echo $term_url; ?>" class="category--<?php echo $term_slug; ?>"><?php echo $term->name; ?></a>
    <?php break; endforeach;
    echo '</p>';
    endif; ?>
    <?php the_date('', '<p class="post-date tr">', '</p>') ?>

    <div class="entry clearfix">
    <?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
    </div>

    <div class="product-arrival">
      <h3><span class="tit-icon">入荷したらお知らせする</span></h3>
      <div class="product-arrival-form">
        <?php echo apply_shortcodes( '[contact-form-7 id="57181" title="入荷お知らせ希望フォーム"]' ); ?>
      </div>
    </div>

  </div>
  <nav role="navigation" class="page-navigation">
    <div class="prev">
      <?php if( get_previous_post() ): ?>
        <?php previous_post_link('%link', '%title'); ?>
      <?php endif; ?>
    </div>
    <div class="back">
      <a href="<?php echo home_url('/products/'); if (!empty($term_slug)) echo $term_slug; ?>"><?php if(!empty($term_name)) echo $term_name.'の買取'; ?>一覧に戻る</a>
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

  <?php
  //関連キーワード
  $keyword_flg = false;
  for ($i=1; $i <= 10; $i++) {
    if (!empty(get_field('related_keyword_'.$i))) {
      if (get_field('related_keyword_'.$i)['keyword']) {
        if ($keyword_flg === false) {
          $keyword_flg = true;
        } else {
          break;
        }
      }
    }
  }
  if ($keyword_flg) {
    echo '<div class="products-related-keyword">';
    echo '<h3><span>関連キーワード</span></h3><ul>';
    for ($i=1; $i <= 10; $i++) {
      if (get_field('related_keyword_'.$i)['keyword']) {
        $keyword = get_field('related_keyword_'.$i)['link'];
        if (get_field('related_keyword_'.$i)['link']) {
          echo '<li><a href="'.get_field('related_keyword_'.$i)['link'].'">'.get_field('related_keyword_'.$i)['keyword'].'</a></li>';
        } else {
          echo '<li>'.get_field('related_keyword_'.$i)['keyword'].'</li>';
        }
      }
    }
    echo '</ul></div>';
  } ?>

<div class="products-relation" id="blog-archive">

  <?php
   $args = array(
    'numberposts' => 15,
    'post_type' => 'products',
    'tax_query' => array(
      array(
        'taxonomy' => 'products-brand',
        'field' => 'slug',
        'terms' => $brand_slug,
      )
    ),
    'post__not_in' => array($post_data->ID)
  );?>
  <?php $relationBrandPosts = get_posts($args); if($relationBrandPosts) : ?>
  <h3><span><?php echo $brand_name; ?>の買取実績はこちら</span></h3>
  <ul class="blog-archive-list">
  <?php foreach($relationBrandPosts as $post) : setup_postdata($post); ?>
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
  <?php endforeach; ?>
  </ul>
  <div class="btn-area">
    <a href="<?php echo home_url('/products/brand/'); if (!empty($brand_slug)) echo $brand_slug; ?>" class="btn"><?php echo $brand_name; ?>の買取実績をもっと見る</a>
  </div>
<?php endif; wp_reset_postdata(); ?>
<?php
 $args = array(
  'numberposts' => 6,
  'post_type' => 'products',
  'tax_query' => array(
    array(
      'taxonomy' => 'products-item',
      'field' => 'slug',
      'terms' => $term_slug,
    )
  ),
  'post__not_in' => array($post_data->ID)
 );
?>
  <h3 style="margin-top:50px;"><span><?php if ($term_name == 'その他') echo 'ブランド家具・一般家具'; else echo 'その他'.$term_name; ?>の買取実績はこちら</span></h3>
  <?php $relationPosts = get_posts($args); if($relationPosts) : ?>
  <ul class="blog-archive-list">
  <?php foreach($relationPosts as $post) : setup_postdata($post); ?>
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
  <?php endforeach; ?>
  </ul>
  <div class="btn-area">
    <a href="<?php echo home_url('/products/'); if (!empty($term_slug)) echo $term_slug; ?>" class="btn"><?php echo $term_name; ?>の買取をもっと見る</a>
  </div>
  <?php else : ?>
   <p>関連アイテムはまだありません。</p>
  <?php endif; wp_reset_postdata(); ?>
</div>
</div>
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
