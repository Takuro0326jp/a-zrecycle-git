<?php get_header(); ?>

<?php if (is_home()): ?>
    <h1 class="pageHead"><img src="<?php echo get_site_url(); ?>/images/img_title_blog.gif" alt="a door OFFICIAL BLOG" /></h1>
<?php else: ?>
    <p class="pageHead"><img src="<?php echo get_site_url(); ?>/images/img_title_blog.gif" alt="a door OFFICIAL BLOG" /></p>
<?php endif; ?>

<?php if (!have_posts()) : ?>
<p>現在公開中の記事はありません。</p>
<?php else : ?>
    <?php while (have_posts()) : the_post(); ?>
        <div class="article">
        <h2 class="articleHead"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

        <p class="articleDate"><?php echo date('Y年n月j日', strtotime($post->post_date)); ?></p>

        <div class="articleBody">
        <?php the_content(); ?>
        <!-- / class articleBody --></div>
        <!-- / class article --></div>
    <?php endwhile; ?>
<?php endif; ?>

<?php if (function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>

<?php get_footer(); ?>
