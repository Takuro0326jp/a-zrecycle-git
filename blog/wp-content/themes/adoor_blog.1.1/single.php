<?php get_header(); ?>

		<div id="content">

<?php the_post(); ?>

<p class="pageHead"><img src="<?php echo get_site_url(); ?>/images/img_title_blog.gif" alt="a door OFFICIAL BLOG" /></p>

<div class="article">
	<h1 class="articleHead"><?php wp_title( '', true, 'right' ); ?></h1>
	<p class="articleDate"><?php echo date( 'Y年n月j日', strtotime( $post -> post_date ) ); ?></p>

	<div class="articleBody">

		<?php the_content(); ?>

	<!-- / class articleBody -->
	</div>
<!-- / class article -->
</div>

<div id="nav-below" class="navigation">
	<p><span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">&lt;&lt;</span> 前の記事へ' ); ?></span> | <span class="nav-top"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></span> | <span class="nav-next"><?php next_post_link( '%link', '次の記事へ <span class="meta-nav">&gt;&gt;</span>' ); ?></span></p>
<!-- / id nav-below -->
</div>

<?php get_footer(); ?>
