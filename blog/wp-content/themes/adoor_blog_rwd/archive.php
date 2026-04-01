<?php get_header(); ?>

<!-- wp tag -->
<div id="contentxxx">
<div class="post-wrapxxxx">

<?php
/*
$cat = get_the_category(); $cat = $cat[0];
$cat = $cat->cat_ID;
*/
$page = get_query_var('page');
$posts = query_posts($query_string . "&posts_per_page=10&cat=$cat&order=DESC&page=$page");

if (have_posts()) :
 ?>


 	  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  <?php /* If this is a category archive */ if (is_category()) { ?>
		<h2>「<?php single_cat_title(); ?>」記事一覧</h2>
 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h2>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2><?php the_time('Y'); ?>年 <?php the_time('F'); ?> <?php the_time('j'); ?>日 記事一覧</h2>
 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2><?php the_time('Y'); ?>年 <?php the_time('F'); ?> 記事一覧</h2>
 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2><?php the_time('Y'); ?>年 記事一覧</h2>
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2>Author Archive</h2>
 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2>Blog Archives</h2>
 	  <?php } ?>



<p>※タイトルのみ表示しています。クリックして全文をご覧ください。</P>

<ul class="mb60 ul-cmn">
<?php while (have_posts()) : the_post(); ?>
<li id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
<?php endwhile; ?>
</ul>

<?php if (function_exists('wp_pagenavi')) { wp_pagenavi(); } else { ?>
<div class="navigation">
<div class="alignleft"><?php next_posts_link('&laquo; もっと見る') ?></div>
<div class="alignright"><?php previous_posts_link('戻る &raquo;') ?></div>
</div>
<?php } ?> 


<?php else : ?>
<h2>ページが見当たりません。</h2>
<?php include (TEMPLATEPATH . '/searchform.php'); ?>
<?php endif; ?>
<?php wp_reset_query(); ?>


		</div><!-- post-wrap -->
		</div><!-- #content -->


<!-- side -->
<?php get_sidebar(); ?>
<!-- /side -->


<!-- callFooter -->
<?php get_footer(); ?>
<!-- /callFooter -->

