<?php get_header(); ?>

<div id="brand-top">
  <h3>高価買取ブランド</h3>
  <p>muji(無印良品)、Actus、KEYUCA、arflex(アルフレックス)、Cassina、unico(ウニコ)など様々なブランドを買い取り強化しております。世田谷店での店頭買取、全国対応の宅配買取、出張買取(一部地域)にてスピード買取、即日現金化いたします。<br>専門のスタッフがその場で査定し、お買い取りいたします。各種ブランド家具高価買取はアドアまでご相談ください！</p>
  <ul class="brand-logo-list">
    <li>
      <a href="/blog/brand/muji">
        <img src="/images/brand/brand_logo01.jpg" alt="muji(無印良品)">
      </a>
    </li>
    <li>
      <a href="https://www.a-zrecycle.com/blog/brand/cassina-ixc">
        <img src="/images/brand/brand_logo02.jpg" alt="カッシーナ">
      </a>
    </li>
    <li>
      <a href="https://www.a-zrecycle.com/blog/brand/arflex">
        <img src="/images/brand/brand_logo03.jpg" alt="アルフレックス">
      </a>
    </li>
    <li>
      <a href="https://www.a-zrecycle.com/blog/brand/keyuca">
        <img src="/images/brand/brand_logo04.jpg" alt="keyuka">
      </a>
    </li>
    <li>
      <a href="https://www.a-zrecycle.com/blog/brand/actus">
        <img src="/images/brand/brand_logo05.jpg" alt="アクタス">
      </a>
    </li>
    <li>
      <a href="https://www.a-zrecycle.com/blog/brand/illums">
        <img src="/images/brand/brand_logo06.jpg" alt="イルムス">
      </a>
    </li>
    <li>
      <a href="https://www.a-zrecycle.com/blog/brand/karimoku60">
        <img src="/images/brand/brand_logo07.jpg" alt="カリモク60">
      </a>
    </li>
    <li>
      <a href="https://www.a-zrecycle.com/blog/brand/journal-standard-furniture">
        <img src="/images/brand/brand_logo08.jpg" alt="ジャーナルスタンダードファニチャー">
      </a>
    </li>
  </ul>
  <p>その他、多数家具ブランドを高価買取しています。<br>ノーブランドでも良い物には高い価格にて買い取らせていただいております。<br>まずはご相談ください。</p>
</div><!-- #brand-top -->

<?php if ( have_posts() ): ?>
<?php while (have_posts()) : the_post(); ?>

<?php endwhile; ?>

<?php else : ?>
<?php endif; ?>
<?php wp_reset_query(); ?>

<!-- callFooter -->
<?php get_footer(); ?>
<!-- /callFooter -->
