<?php get_header(); ?>

	<?php if ( is_archive() ) : ?>

			<div id="content" class="maker">

	<?php else: ?>

			<div id="content" class="blog">

	<?php endif; ?>

		<?php if ( is_home() ) : ?>

				<h2 class="pageHead"><img src="<?php echo get_site_url(); ?>/images/img_title_blog.gif" alt="a door OFFICIAL BLOG" /></h2>

		<?php elseif ( is_archive() ) : ?>

				<h2 class="pageHead"><?php wp_title('', true, ''); ?></h2>

		<?php else: ?>

				<p class="pageHead"><img src="<?php echo get_site_url(); ?>/images/img_title_blog.gif" alt="a door OFFICIAL BLOG" /></p>

		<?php endif; ?>

				<div class="article">

			<?php if ( !have_posts() ) : ?>

					<p>現在公開中の記事はありません。</p>

				</div>

			<?php else : ?>

				<?php if ( is_archive() ) : ?>

					<h3 class="list_title"><?php wp_title('', true, ''); ?>の記事一覧</h3>

				<?php endif; ?>

					<ul class="big_blogbox clearfix">

				<?php while ( have_posts() ) : the_post(); ?>

						<li class="singlebox">
							<p><?php the_post_thumbnail(); ?></p>
							<dl>
								<dt><?php the_time( 'Y.m.d' ); ?></dt>

							<?php
								$cats = get_the_category();
								$cat_name = "";
								foreach ( $cats as $cat) {
									if ( $cat_name != "" ) {
										$cat_name .= ", ";
									};
									$cat_name .= $cat -> cat_name;
								};
							?>

								<dd><?php echo $cat_name; ?></dd>
							</dl>
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						</li>

				<?php endwhile; ?>

					</ul>

				</div>

				<?php
					if ( function_exists( 'wp_pagenavi' ) ) {
						wp_pagenavi();
					}
				?>

			<?php endif; ?>

		<?php if ( is_home() || in_category( 'maker' ) ) : ?>

				<div class="article">
					<h3 class="list_title">メーカー / デザイナー名　一覧</h3>
					<ul class="maker_list clearfix">

			<?php wp_list_categories( 'child_of=44&hierarchical=0&show_count=0&title_li=' ); ?>

					</ul>
				</div>

		<?php endif; ?>

<?php get_footer( 'index' ); ?>
