<div id="topicPath">
	<ol>
		<li><a href="/index.html">ホーム</a></li>

	<?php if ( is_home() ) : ?>

		<li class="current"><strong><?php bloginfo('name'); ?> オフィシャルブログ</strong></li>

	<?php else : ?>

		<li><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?> オフィシャルブログ</a></li>
		<li class="current"><strong><?php echo mb_strimwidth( wp_title( '', false, 'right' ), 0, 80, '...'); ?></strong></li>

	<?php endif; ?>

	</ol>
<!-- / id topicPath -->
</div>
