<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>


<!-- wp tag -->
<div id="contentxxx">
<div class="post-wrapxxxx">


<div class="post">
					<?php include (TEMPLATEPATH . '/searchform.php'); ?>
					
					<h2>Archives by Month:</h2>
						<ul class="ul-cmn">
							<?php wp_get_archives('type=monthly'); ?>
						</ul>
					
					<h2>Archives by Subject:</h2>
						<ul class="ul-cmn">
							 <?php wp_list_categories(); ?>
						</ul>
	
				</div><!-- post -->

	
</div><!-- post-wrap -->
</div><!-- #content -->



<!-- side -->
<?php get_sidebar(); ?>
<!-- /side -->


<!-- callFooter -->
<?php get_footer(); ?>
<!-- /callFooter -->

