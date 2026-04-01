<?php get_header(); ?>

<div id="contentxxx">
<div class="post-wrapxxx">


<?php if (have_posts()) : ?>

<h2>検索結果</h2>
<p>※タイトルのみ表示しています。クリックして全文をご覧ください。</P>

<ul class="mb60 ul-cmn">

<?php while (have_posts()) : the_post(); ?>
<li id="post-<?php the_ID(); ?>">
<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
</li>
<?php endwhile; ?>

</ul>

	<div class="navigation">
	  <div class="alignleft"><?php next_posts_link('&laquo; もっと見る') ?></div>
	  <div class="alignright"><?php previous_posts_link('戻る &raquo;') ?></div>
	</div>

<?php else : ?>
	
	  <h2>ページが見当たりません。</h2>
	    <?php include (TEMPLATEPATH . '/searchform.php'); ?>

<?php endif; ?>



</div><!-- .post-wrap -->
</div><!-- #content -->


<!-- side -->
<?php get_sidebar(); ?>
<!-- /side -->


<!-- callFooter -->
<?php get_footer(); ?>
<!-- /callFooter -->

