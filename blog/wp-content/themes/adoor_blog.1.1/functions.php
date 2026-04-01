<?php


add_theme_support( 'post-thumbnails', array( 'post' ) );
set_post_thumbnail_size( 188, 143, true );
add_image_size( 'img_list', 188, 143, false );


function adoorblog_modify_main_queries ( $query ) {
	if ( is_admin() || ! $query -> is_main_query() )
		return;

	if ( $query -> is_home() || $query -> is_archive() || $query -> is_category() ) {
		$query -> set( 'posts_per_page', 10 );
		return;
	}
}
add_action( 'pre_get_posts', 'adoorblog_modify_main_queries' );


?>
