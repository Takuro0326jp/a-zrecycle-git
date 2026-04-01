<?php get_header();
$get_column_cat = array();
$column_cat_names = array();
if (isset($_GET['column_cat']) && count($_GET['column_cat']) > 0) {
	foreach ($_GET['column_cat'] as $key => $value) {
		$get_column_cat[] = $value;
    $term = get_term_by( 'term_id', $value, 'column-cat');
    if ($term) {
      $column_cat_names[] = $term->name;
    }
	}
}
?>
<div id="faq-main">
  <?php if(!empty($column_cat_names)): ?>
  <h3 class="heading-3"><span><?php if(!empty($column_cat_names[0])): echo $column_cat_names[0]; else: echo '買取'; endif; ?>に関する<br class="hidden-lg hidden-md hidden-sm">よくあるご質問</span></h3>
  <?php else: ?>
  <h3 class="heading-3"><span>買取に関する<br class="hidden-lg hidden-md hidden-sm">よくあるご質問</span></h3>
  <?php endif; ?>
  <p>アドア東京は専門スタッフによる「真心のある査定」がポイントです。ご不要なアイテムがございましたら、一点からでご相談を承っておりますので、ご連絡ください。<br>お客様からいただくご質問をまとめましたので参考にしていただければと思います。</p>
  <?php
  $meta_query = array();
  if (!empty($get_column_cat)) {
    $column_cat_ids = array();
    foreach ($get_column_cat as $value) {
      $column_cat_ids[] = $value;
    }
    $args = array(
      'paged' => $paged,
      'post_status' => 'publish',
      'post_type' => 'faq',
      'posts_per_page' => 10,
      'meta_query' => array(
        array(
          'key' => 'relation_column_category',
          'value' => '"'.$column_cat_ids[0].'"',
          'compare' => 'LIKE'
        )
      )
    );
    query_posts( $args );
  }
  if ( have_posts() ): ?>
  <ul class="faq-list">
    <?php while (have_posts()) : the_post(); ?>
    <li class="clearfix">
      <dl>
        <dt><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dt>
        <dd>
          <?php the_content(); ?>
        </dd>
      </dl>
    </li>
    <?php endwhile; ?>
  </ul>
  <div class="pager">
    <?php if(function_exists('wp_pagenavi')):
     wp_pagenavi();    //wp_pagenavi()の呼び出し
   endif; ?>
  </div><!-- .pager -->
  <?php else: ?>
  <p>よくあるご質問はありません。</p>
  <?php endif; ?>
</div><!-- #faq-main -->

<div id="purchase-contents" style="margin-top: 50px">
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

<!-- callFooter -->
<?php get_footer(); ?>
<!-- /callFooter -->
