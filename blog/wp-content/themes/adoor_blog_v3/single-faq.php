<?php get_header(); ?>

<div id="faq-main" style="margin-bottom: 50px">
  <h3 class="heading-3"><span>買取に関する<br class="hidden-lg hidden-md hidden-sm">よくあるご質問</span></h3>
  <p>アドア東京は専門スタッフによる「真心のある査定」がポイントです。ご不要なアイテムがございましたら、一点からでご相談を承っておりますので、ご連絡ください。<br>お客様からいただくご質問をまとめましたので参考にしていただければと思います。</p>
  <?php if ( have_posts() ): ?>
  <ul class="faq-list">
    <?php while (have_posts()) : the_post(); ?>
    <li class="clearfix">
      <dl>
        <dt><?php the_title(); ?></dt>
        <dd>
          <?php the_content(); ?>
        </dd>
      </dl>
    </li>
    <?php endwhile; ?>
  </ul>
  <div class="btn-area">
    <a href="<?php echo home_url('/'); ?>faq/">一覧に戻る</a>
  </div>
  <?php else: ?>
  <p>よくあるご質問は準備中です。</p>
  <?php endif; ?>
</div><!-- #faq-main -->

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

<!-- callFooter -->
<?php get_footer(); ?>
<!-- /callFooter -->
