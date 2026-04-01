<?php get_header(); ?>

<div id="faq-main">
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


<!-- callFooter -->
<?php get_footer(); ?>
<!-- /callFooter -->
