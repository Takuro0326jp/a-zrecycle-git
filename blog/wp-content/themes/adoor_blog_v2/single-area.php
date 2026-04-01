<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div id="area-detail" class="cf">
<h3>買取出張エリア　<?php the_title(); ?>について</h3>
<div class="entry">
<?php if (get_the_content()) {
  the_content();
} else {
  echo '<p>このページは準備中です。</p>';
}
?>
</div>
<?php endwhile; else: ?>
<p>ページが見当たりません。</p>
<?php endif; ?>
</div>
<!-- callFooter -->
<?php get_footer(); ?>
<!-- /callFooter -->
