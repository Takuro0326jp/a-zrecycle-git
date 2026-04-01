<?php get_header(); ?>

  <div id="blog-archive" class="column-archive">
    <h2><span>コラム一覧</span></h2>
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
    <div class="pager">
      <?php if(function_exists('wp_pagenavi')):
       wp_pagenavi();    //wp_pagenavi()の呼び出し
     endif; ?>
    </div><!-- .pager -->
    <?php else: ?>
    <p>コラムは準備中です。</p>
    <?php endif; ?>
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
