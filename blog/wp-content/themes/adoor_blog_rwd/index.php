<?php get_header(); ?>

<!-- wp tag -->
<div id="contentxxx">
<div class="post-wrapxxxx">





<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>

<!-- loop start -->
<div class="post" id="post-<?php the_ID(); ?>">

<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>


<?php the_date('', '<div class="date">', '</div>') ?>
<div class="entry mb60">
<?php the_content('Read the rest of this entry &raquo;'); ?>
</div>
</div>

<?php endwhile; ?>

<div class="navigation">
<div class="alignleft"><?php next_posts_link('&laquo; 過去のコンテンツはこちら') ?></div>
<div class="alignright"><?php previous_posts_link('戻る &raquo;') ?></div>
</div>
<div class="clear"></div>

<?php else : ?>

<h2>ページが見当たりません。</h2>
<p>Sorry, but you are looking for something that isn't here.</p>
<?php include (TEMPLATEPATH . "/searchform.php"); ?>

<?php endif; ?>




</div><!-- .post-wrap -->
</div><!-- #content -->


<!-- side -->
<?php get_sidebar(); ?>
<!-- /side -->



<!-- callFooter -->
<?php get_footer(); ?>
<!-- /callFooter -->

