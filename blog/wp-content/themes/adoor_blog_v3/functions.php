<?php
add_action('init', 'my_flush_rewrite_rules');
function my_flush_rewrite_rules () {
    flush_rewrite_rules( true );
}

// Sidebar widget
wp_register_sidebar_widget(
   'my_widget',         // ウィジェットID
   'My Widget',         // ウィジェット名
   'my_widget_display', // ウィジェットの表示を作る為の関数名
   array(               // オプション
      'description' => 'ウィジェット'
   )
);
// Custom menu
add_action( 'init', 'register_my_menu' );

function register_my_menu() {
	register_nav_menu( 'primary-menu', __( 'Primary Menu' ) );
}


// thumbnails active
add_theme_support('post-thumbnails');



function cptui_register_my_cpts() {

  /**
	 * Post Type: Information.
	 */

	$labels = array(
		"name" => __( "Information", "custom-post-type-ui" ),
		"singular_name" => __( "Information", "custom-post-type-ui" ),
	);

	$args = array(
		"label" => __( "Information", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "information", "with_front" => false ),
		"query_var" => true,
		"supports" => array( "title", "editor" ),
	);

  register_post_type( "information", $args );

	/**
	 * Post Type: 出張エリア.
	 */

	$labels = array(
		"name" => __( "出張エリア", "custom-post-type-ui" ),
		"singular_name" => __( "出張エリア", "custom-post-type-ui" ),
	);

	$args = array(
		"label" => __( "出張エリア", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "area", "with_front" => false ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "area", $args );

	/**
	 * Post Type: 高価買取家具ブランド.
	 */

	$labels = array(
		"name" => __( "高価買取家具ブランド", "custom-post-type-ui" ),
		"singular_name" => __( "高価買取家具ブランド", "custom-post-type-ui" ),
	);

	$args = array(
		"label" => __( "高価買取家具ブランド", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => array( "slug" => "brand", "with_front" => false ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail", "page-attributes" ),
	);

	register_post_type( "brand", $args );

  /**
	 * Post Type: よくあるご質問.
	 */

	$labels = array(
		"name" => __( "よくあるご質問", "custom-post-type-ui" ),
		"singular_name" => __( "よくあるご質問", "custom-post-type-ui" ),
	);

	$args = array(
		"label" => __( "よくあるご質問", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => array( "slug" => "faq", "with_front" => false ),
		"query_var" => true,
		"supports" => array( "title", "editor" ),
	);

	register_post_type( "faq", $args );

  /**
	 * Post Type: 買取一押し商品.
	 */

	$labels = array(
		"name" => __( "買取一押し商品", "custom-post-type-ui" ),
		"singular_name" => __( "買取一押し商品", "custom-post-type-ui" ),
	);

	$args = array(
		"label" => __( "買取一押し商品", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => array( "slug" => "recommend", "with_front" => false ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "recommend", $args );

  /**
	 * Post Type: 取り扱い商品.
	 */

	$labels = array(
		"name" => __( "取り扱い商品", "custom-post-type-ui" ),
		"singular_name" => __( "取り扱い商品", "custom-post-type-ui" ),
	);

	$args = array(
		"label" => __( "取り扱い商品", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => array( "slug" => "products", "with_front" => false ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" )
	);

	register_post_type( "products", $args );

  /**
	 * Post Type: コラム.
	 */

	$labels = array(
		"name" => __( "コラム", "custom-post-type-ui" ),
		"singular_name" => __( "コラム", "custom-post-type-ui" ),
	);

	$args = array(
		"label" => __( "コラム", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => array( "slug" => "column", "with_front" => false ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" )
	);

	register_post_type( "column", $args );

  /**
	 * Post Type: お客様の声.
	 */

	$labels = array(
		"name" => __( "お客様の声（アドアの口コミ）", "custom-post-type-ui" ),
		"singular_name" => __( "お客様の声（アドアの口コミ）", "custom-post-type-ui" ),
	);

	$args = array(
		"label" => __( "お客様の声（アドアの口コミ）", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => array( "slug" => "voice", "with_front" => false ),
		"query_var" => true,
		"supports" => array( "title" )
	);

	register_post_type( "voice", $args );

}

add_action( 'init', 'cptui_register_my_cpts' );


function cptui_register_my_taxes() {

  /**
	 * Taxonomy: 取扱品目.
	 */

	$labels = array(
		"name" => __( "取扱品目", "custom-post-type-ui" ),
		"singular_name" => __( "取扱品目", "custom-post-type-ui" ),
	);

	$args = array(
		"label" => __( "取扱品目", "custom-post-type-ui" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'jisseki/item', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "item",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		);
	register_taxonomy( "item", array( "post" ), $args );

  /**
	 * Taxonomy: インフォカテゴリー.
	 */

	$labels = array(
		"name" => __( "インフォカテゴリー", "custom-post-type-ui" ),
		"singular_name" => __( "カテゴリー", "custom-post-type-ui" ),
	);

	$args = array(
		"label" => __( "カテゴリー", "custom-post-type-ui" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'info_cat', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "info_cat",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		);
	register_taxonomy( "info_cat", array( "information" ), $args );


  /**
	 * Taxonomy: 取り扱い商品品目.
	 */

	$labels = array(
		"name" => __( "取扱品目", "custom-post-type-ui" ),
		"singular_name" => __( "取扱品目", "custom-post-type-ui" ),
	);

	$args = array(
		"label" => __( "取扱品目", "custom-post-type-ui" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'products-item', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "products-item",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		);
	register_taxonomy( "products-item", array( "products" ), $args );

  /**
	 * Taxonomy: 取り扱い商品ブランド.
	 */

	$labels = array(
		"name" => __( "ブランド", "custom-post-type-ui" ),
		"singular_name" => __( "ブランド", "custom-post-type-ui" ),
	);

	$args = array(
		"label" => __( "ブランド", "custom-post-type-ui" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'products-brand', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "products-brand",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		);
	register_taxonomy( "products-brand", array( "products" ), $args );

  /**
	 * Taxonomy: 取り扱い商品品目.
	 */

	$labels = array(
		"name" => __( "コラムカテゴリー", "custom-post-type-ui" ),
		"singular_name" => __( "コラムカテゴリー", "custom-post-type-ui" ),
	);

	$args = array(
		"label" => __( "コラムカテゴリー", "custom-post-type-ui" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'column-cat', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "column-cat",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		);
	register_taxonomy( "column-cat", array( "column" ), $args );

}
add_action( 'init', 'cptui_register_my_taxes' );

/*
 * get http host
 */
function getHttpHost() {
  $url = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST'];
  return $url;
}


// カスタム投稿一覧の表示数
function change_posts_per_page($query) {
    if ( is_admin() || ! $query->is_main_query() )
        return;
    if ( $query->is_post_type_archive(array('faq')) ) {
      $query->set( 'posts_per_page', '10' );
    }
    if( $query->is_post_type_archive(array('recommend')) ) {
      $query->set( 'posts_per_page', '12' );
    }
    if( $query->is_post_type_archive(array('products')) ) {
      $query->set( 'posts_per_page', '24' );
    }
    if( $query->is_tax(array('products-item', 'products-brand')) ) {
      $query->set( 'posts_per_page', '24' );
    }
    if( $query->is_tax(array('column-cat')) ) {
      $query->set( 'posts_per_page', '12' );
    }
}
add_action( 'pre_get_posts', 'change_posts_per_page' );


function catch_that_image() {
    global $post, $posts;
    $matches = array();
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    if (!empty($matches[1])) {
      $first_img = $matches[1][0];
    }

    if(empty($first_img)){
        // 記事内で画像がなかったときのためのデフォルト画像を指定
        $first_img = get_template_directory_uri().'/images/no_image.jpg';
    }
    return $first_img;
}


/*
 * custom breadcrumbs
 */
 if ( ! function_exists( 'custom_breadcrumb' ) ) {
   function custom_breadcrumb() {


     //そのページのWPオブジェクトを取得
     $wp_obj = get_queried_object();

     $blog_name = 'お客様の声（買取実績）';

     echo  '<span property="itemListElement" typeof="ListItem">'.
           '<a href="'. esc_url( getHttpHost() ) .'" property="item" typeof="WebPage" title="Go to 家具買取の専門ショップ 「アドア東京」."><span property="name">家具買取、家電買取、楽器買取のアドア(adoor) </span></a><meta property="position" content="1">'.
         '</span>';

     if ( is_attachment() ) {

       /**
        * 添付ファイルページ ( $wp_obj : WP_Post )
        * ※ 添付ファイルページでは is_single() も true になるので先に分岐
        */
       $post_title = apply_filters( 'the_title', $wp_obj->post_title );
       echo '<span><span>'. esc_html( $post_title ) .'</span></span>';

     } elseif ( is_front_page() || is_home() ) {
       // 現在のページ数
       $get_current_page = get_query_var( 'paged' );
       $current_page = $get_current_page == 0 ? '1' : $get_current_page;
       if ($get_current_page > 0) {
         echo '<span><span>'. esc_html( strip_tags( $blog_name ) ) .$current_page .'ページ目</span></span>';
       } else {
         echo '<span><span>'. esc_html( strip_tags( $blog_name ) ) .'</span></span>';
       }


     } elseif ( is_single() ) {

       /**
        * 投稿ページ ( $wp_obj : WP_Post )
        */
       $post_id    = $wp_obj->ID;
       $post_type  = $wp_obj->post_type;
       $post_title = apply_filters( 'the_title', $wp_obj->post_title );

       // カスタム投稿タイプかどうか
       if ( $post_type !== 'post' ) {

         $the_tax = "";  //そのサイトに合わせて投稿タイプごとに分岐させて明示的に指定してもよい

         // 投稿タイプに紐づいたタクソノミーを取得 (投稿フォーマットは除く)
         $tax_array = get_object_taxonomies( $post_type, 'names');
         foreach ($tax_array as $tax_name) {
             if ( $tax_name !== 'post_format' ) {
                 $the_tax = $tax_name;
                 break;
             }
         }

         $post_type_link = esc_url( get_post_type_archive_link( $post_type ) );
         $post_type_label = esc_html( get_post_type_object( $post_type )->label );

         //カスタム投稿タイプ名の表示
         echo '<span property="itemListElement" typeof="ListItem">'.
               '<a href="'. $post_type_link .'" property="item" typeof="WebPage">'.
                 '<span property="name">'. $post_type_label .'</span><meta property="position" content="2">'.
               '</a>'.
             '</span>';


         } else {

           echo '<span property="itemListElement" typeof="ListItem">'.
                 '<a href="'. home_url() .'" property="item" typeof="WebPage">'.
                   '<span property="name">'. $blog_name .'</span><meta property="position" content="2">'.
                 '</a>'.
               '</span>';

           $the_tax = 'category';  //通常の投稿の場合、カテゴリーを表示

         }

         // 投稿に紐づくタームを全て取得
         $terms = get_the_terms( $post_id, $the_tax );

         // タクソノミーが紐づいていれば表示
         if ( $terms !== false ) {

           $child_terms  = array();  // 子を持たないタームだけを集める配列
           $parents_list = array();  // 子を持つタームだけを集める配列

           //全タームの親IDを取得
           foreach ( $terms as $term ) {
             if ( $term->parent !== 0 ) {
               $parents_list[] = $term->parent;
             }
           }

           //親リストに含まれないタームのみ取得
           foreach ( $terms as $term ) {
             if ( ! in_array( $term->term_id, $parents_list ) ) {
               $child_terms[] = $term;
             }
           }

           // 最下層のターム配列から一つだけ取得
           $term = $child_terms[0];

           if ( $term->parent !== 0 ) {

             // 親タームのIDリストを取得
             $parent_array = array_reverse( get_ancestors( $term->term_id, $the_tax ) );

             foreach ( $parent_array as $parent_id ) {
               $parent_term = get_term( $parent_id, $the_tax );
               $parent_link = esc_url( get_term_link( $parent_id, $the_tax ) );
               $parent_name = esc_html( $parent_term->name );
               echo '<span property="itemListElement" typeof="ListItem">'.
                     '<a href="'. $parent_link .'" property="item" typeof="WebPage">'.
                       '<span property="name">'. $parent_name .'</span><meta property="position" content="3">'.
                     '</a>'.
                   '</span>';
             }
           }

           $term_link = esc_url( get_term_link( $term->term_id, $the_tax ) );
           $term_name = esc_html( $term->name );
           // 最下層のタームを表示
           if (is_singular('products')) {
             echo '<span property="itemListElement" typeof="ListItem">'.
                '<a href="'. $term_link .'" property="item" typeof="WebPage">'.
                  '<span property="name">'. $term_name .'の買取</span><meta property="position" content="3">'.
                '</a>'.
              '</span>';
           } else {
              echo '<span property="itemListElement" typeof="ListItem">'.
                 '<a href="'. $term_link .'" property="item" typeof="WebPage">'.
                   '<span property="name">'. $term_name .'</span><meta property="position" content="3">'.
                 '</a>'.
               '</span>';
            }
         }

         // 投稿自身の表示
         if ( $wp_obj->post_parent !== 0 ) {
           $parent_array = array_reverse( get_post_ancestors( $page_id ) );
           foreach( $parent_array as $parent_id ) {
             $parent_link = esc_url( get_permalink( $parent_id ) );
             $parent_name = esc_html( get_the_title( $parent_id ) );
             echo '<span property="itemListElement" typeof="ListItem">'.
                   '<a href="'. $parent_link .'" property="item" typeof="WebPage">'.
                     '<span property="name">'. $parent_name .'</span><meta property="position" content="2">'.
                   '</a>'.
                 '</span>';
           }
         }
         echo '<span><span>'. esc_html( strip_tags( $post_title ) ) .'</span></span>';

     } elseif ( is_page() || is_home() ) {

       /**
        * 固定ページ ( $wp_obj : WP_Post )
        */
       $page_id    = $wp_obj->ID;
       $page_title = apply_filters( 'the_title', $wp_obj->post_title );

       // 親ページがあれば順番に表示
       if ( $wp_obj->post_parent !== 0 ) {
         $parent_array = array_reverse( get_post_ancestors( $page_id ) );
         foreach( $parent_array as $parent_id ) {
           $parent_link = esc_url( get_permalink( $parent_id ) );
           $parent_name = esc_html( get_the_title( $parent_id ) );
           echo '<span property="itemListElement" typeof="ListItem">'.
                 '<a href="'. $parent_link .'" property="item" typeof="WebPage">'.
                   '<span property="name">'. $parent_name .'</span><meta property="position" content="2">'.
                 '</a>'.
               '</span>';
         }
       }
       // 投稿自身の表示
       echo '<span><span>'. esc_html( strip_tags( $page_title ) ) .'</span></span>';

     } elseif ( is_post_type_archive() ) {
       if( is_tax() ) {
         /**
          * タームアーカイブ ( $wp_obj : WP_Term )
          */
         $term_id   = $wp_obj->term_id;
         $term_name = $wp_obj->name;
         $tax_name  = $wp_obj->taxonomy;
         $taxonomy = get_query_var( 'taxonomy' );
         $post_type = get_taxonomy( $taxonomy )->object_type[0];

         // 現在のページ数
         $current_page = get_query_var( 'paged' );
         $current_page = $current_page == 0 ? '1' : $current_page;
         echo '<span property="itemListElement" typeof="ListItem">'.
               '<a href="'. home_url('/'). $post_type .'" property="item" typeof="WebPage">'.
                 '<span property="name">'. esc_html( get_post_type_object(get_post_type())->label ) .'</span><meta property="position" content="2">'.
               '</a>'.
             '</span>';

         /* ここでタクソノミーに紐づくカスタム投稿タイプを出力しても良いでしょう。 */

         // 親ページがあれば順番に表示
         if ( $wp_obj->parent !== 0 ) {

           $parent_array = array_reverse( get_ancestors( $term_id, $tax_name ) );
           foreach( $parent_array as $parent_id ) {
             $parent_term = get_term( $parent_id, $tax_name );
             $parent_link = esc_url( get_term_link( $parent_id, $tax_name ) );
             $parent_name = esc_html( $parent_term->name );
             echo '<span property="itemListElement" typeof="ListItem">'.
                   '<a href="'. $parent_link .'" property="item" typeof="WebPage">'.
                     '<span property="name">'. $parent_name .'</span>'.
                   '</a><meta property="position" content="3">'.
                 '</span>';
           }
         }

         // ターム自身の表示
         $get_current_page = get_query_var( 'paged' );
         $current_page = $get_current_page == 0 ? '1' : $get_current_page;
         if ($get_current_page > 0) {
           echo '<span><span>'. esc_html( $term_name ) .$current_page .'ページ目</span></span>';
         } else {
           echo '<span><span>'. esc_html( $term_name ) .'</span></span>';
         }
       } else {

         /**
          * 投稿タイプアーカイブページ ( $wp_obj : WP_Post_Type )
          */

        if( is_post_type_archive('products') && is_paged() ) {
          $get_current_page = get_query_var( 'paged' );
          $current_page = $get_current_page == 0 ? '1' : $get_current_page;
          echo '<span property="itemListElement" typeof="ListItem">'.
                '<a href="'. esc_html( home_url('/products/')) .'" property="item" typeof="WebPage">'.
                  '<span property="name">'. esc_html( $wp_obj->label ) .'</span><meta property="position" content="2">'.
                '</a>'.
              '</span>';
          if ($get_current_page > 0) {
            echo '<span><span>買取実績'.$current_page.'ページ目</span></span>';
          }
        } else {
          echo '<span><span>'. esc_html( $wp_obj->label ) .'</span></span>';
        }
       }

     } elseif ( is_date() ) {

       /**
        * 日付アーカイブ ( $wp_obj : null )
        */
       $year  = get_query_var('year');
       $month = get_query_var('monthnum');
       $day   = get_query_var('day');

       echo '<span property="itemListElement" typeof="ListItem">'.
             '<a href="'. home_url() .'" property="item" typeof="WebPage">'.
               '<span property="name">'. $blog_name .'</span><meta property="position" content="2">'.
             '</a>'.
           '</span>';

       if ( $day !== 0 ) {
         //日別アーカイブ
         echo '<span>'.
               '<a href="'. esc_url( get_year_link( $year ) ) .'" property="item" typeof="WebPage"><span property="name">'. esc_html( $year ) .'年</span></a><meta property="position" content="3">'.
             '</span>'.
             '<span>'.
               '<a href="'. esc_url( get_month_link( $year, $month ) ) . '" property="item" typeof="WebPage"><span property="name">'. esc_html( $month ) .'月</span></a><meta property="position" content="3">'.
             '</span>'.
             '<span>'.
               '<span>'. esc_html( $day ) .'日</span>'.
             '</span>';

       } elseif ( $month !== 0 ) {
         //月別アーカイブ
         echo '<span property="item" typeof="WebPage">'.
               '<a href="'. esc_url( get_year_link( $year ) ) .'" property="item" typeof="WebPage"><span property="name">'. esc_html( $year ) .'年</span></a><meta property="position" content="3">'.
             '</span>'.
             '<span>'.
               '<span>'. esc_html( $month ) .'月</span>'.
             '</span>';

       } else {
         //年別アーカイブ
         echo '<span><span>'. esc_html( $year ) .'年</span></span>';

       }

     } elseif ( is_author() ) {

       /**
        * 投稿者アーカイブ ( $wp_obj : WP_User )
        */
       echo '<span><span>'. esc_html( $wp_obj->display_name ) .' の執筆記事</span></span>';

     } elseif ( is_archive() ) {

       /**
        * タームアーカイブ ( $wp_obj : WP_Term )
        */
       $term_id   = $wp_obj->term_id;
       $term_name = $wp_obj->name;
       $term_slug = $wp_obj->slug;
       $tax_name  = $wp_obj->taxonomy;

       // 現在のページ数
       $current_page = get_query_var( 'paged' );
       $current_page = $current_page == 0 ? '1' : $current_page;
       if (is_tax(array('products-item','products-brand'))) {
         $taxonomy = get_query_var( 'taxonomy' );
         $post_type = get_taxonomy( $taxonomy )->object_type[0];
         echo '<span property="itemListElement" typeof="ListItem">'.
               '<a href="'. home_url('/'). $post_type .'" property="item" typeof="WebPage">'.
                 '<span property="name">取り扱い商品</span><meta property="position" content="2">'.
               '</a>'.
             '</span>';
       } elseif (is_tax('column-cat')) {
         $taxonomy = get_query_var( 'taxonomy' );
         $post_type = get_taxonomy( $taxonomy )->object_type[0];
         echo '<span property="itemListElement" typeof="ListItem">'.
               '<a href="'. home_url('/'). $post_type .'" property="item" typeof="WebPage">'.
                 '<span property="name">コラム</span><meta property="position" content="2">'.
               '</a>'.
             '</span>';
       } else {
         echo '<span property="itemListElement" typeof="ListItem">'.
               '<a href="'. home_url('/jisseki/') .'" property="item" typeof="WebPage">'.
                 '<span property="name">'. $blog_name .'</span><meta property="position" content="2">'.
               '</a>'.
             '</span>';
       }


       /* ここでタクソノミーに紐づくカスタム投稿タイプを出力しても良いでしょう。 */

       // 親ページがあれば順番に表示
       if ( $wp_obj->parent !== 0 ) {

         $parent_array = array_reverse( get_ancestors( $term_id, $tax_name ) );
         foreach( $parent_array as $parent_id ) {
           $parent_term = get_term( $parent_id, $tax_name );
           $parent_link = esc_url( get_term_link( $parent_id, $tax_name ) );
           $parent_name = esc_html( $parent_term->name );
           echo '<span property="itemListElement" typeof="ListItem">'.
                 '<a href="'. $parent_link .'" property="item" typeof="WebPage">'.
                   '<span property="name">'. $parent_name .'</span>'.
                 '</a><meta property="position" content="3">'.
               '</span>';
         }
       }

       // ターム自身の表示
       $get_current_page = get_query_var( 'paged' );
       $current_page = $get_current_page == 0 ? '1' : $get_current_page;
       if ($get_current_page > 0) {
         if (is_tax('products-item')) {
           echo '<span property="itemListElement" typeof="ListItem"><a href="'.home_url('/products/').esc_html( $term_slug ).'" property="item" typeof="WebPage"><span property="name">'.esc_html( $term_name ).'の買取実績</span></a></span>';
           echo '<span><span>'. esc_html( $term_name ).'の買取実績'.$current_page.'ページ目</span></span>';
         } elseif (is_tax('products-brand')) {
           echo '<span property="itemListElement" typeof="ListItem"><a href="'.home_url('/products/brand/').esc_html( $term_slug ).'" property="item" typeof="WebPage"><span property="name">'.esc_html( $term_name ).'の買取実績</span></a></span>';
           echo '<span><span>'. esc_html( $term_name ).'の買取実績'.$current_page.'ページ目</span></span>';
         } elseif (is_category()) {
           $cat = get_the_category(); //現在のページのカテゴリ―を取得
           $cat_id = $cat[0]->cat_ID; //取得したカテゴリーのIDを取り出す
           $cat_link = get_category_link($cat_id);
           echo '<span property="itemListElement" typeof="ListItem"><a href="'.$cat_link.'" property="item" typeof="WebPage"><span property="name">'.esc_html( $term_name ).'</span></a></span>';
           echo '<span><span>'. esc_html( $term_name ).$current_page.'ページ目</span></span>';
         } else {
           echo '<span><span>'. esc_html( $term_name ).$current_page.'ページ目</span></span>';
         }
       } else {
         if (is_tax(array('products-item', 'products-brand'))) {
           echo '<span><span>'. esc_html( $term_name ).'の買取実績</span></span>';
         } else {
           echo '<span><span>'. esc_html( $term_name ) .'</span></span>';
         }
       }



     } elseif ( is_search() ) {

       /**
        * 検索結果ページ
        */
       echo '<span><span>「'. esc_html( get_search_query() ) .'」で検索した結果</span></span>';


     } elseif ( is_404() ) {

       /**
        * 404ページ
        */
       echo '<span><span>お探しの記事は見つかりませんでした。</span></span>';

     } else {

       /**
        * その他のページ（無いと思うけど一応）
        */
       echo '<span><span>'. esc_html( get_the_title() ) .'</span></span>';

     }

   }
 }

/**
 * エリアトップページURL末尾に/付与
 */
function ex_trailingslashit($string, $url_type) {
  if (is_post_type_archive(array('area', 'faq'))){
    $string = trailingslashit($string);
  }
  return $string;
}
add_filter('user_trailingslashit', 'ex_trailingslashit', 10, 2);


/* カスタム投稿のパーマリンク設定
-----------------------------------------------------*/
// 取扱品目
function rudr_term_permalink($url, $term, $taxonomy){
  $taxonomy_name = 'products-item';
	$taxonomy_slug = 'products-item';
  if ( strpos($url, $taxonomy_slug) === FALSE || $taxonomy != $taxonomy_name ) return $url;
  return str_replace('/'.$taxonomy_slug.'/', '/', $url);
}
add_filter('term_link', 'rudr_term_permalink',11,3);

add_filter('query_vars','wp_insertMyRewriteQueryVars');
//add_filter('init','flushRules');

// ルールを追加するときはflush_rules()を忘れないように
function flushRules(){
    global $wp_rewrite;
    $wp_rewrite->flush_rules();
}

// 新しいルールを追加
function wp_insertMyRewriteRules($rules)
{
    $newrules = array(
      'products/([^/]+)/?$' => 'index.php?products-item=$matches[1]',
      'products/([^/]+)/page/([0-9]+)/?$' => 'index.php?products-item=$matches[1]&paged=$matches[2]',
      'products/brand/([^/]+)/?$' => 'index.php?products-brand=$matches[1]',
      'products/brand/([^/]+)/page/([0-9]+)/?$' => 'index.php?products-brand=$matches[1]&paged=$matches[2]',
      'products/page/([0-9]+)/?$' => 'index.php?post_type=products&paged=$matches[1]',
    );
    return $newrules + $rules;
}
add_filter('rewrite_rules_array','wp_insertMyRewriteRules');

// 変数idを追加して、WordPressが認識できるようにする
function wp_insertMyRewriteQueryVars($vars)
{
    array_push($vars, 'id');
    return $vars;
}

function custom_products_redirect() {
  global $wp_query;
  global $post;
  if ( !is_singular( "products" ) ) return;
  $term = get_the_terms( $post->ID, "products-item" )[0];
  $term_slug = $term->slug;
  $post_id = $post->ID;
  $request_url  = is_ssl() ? 'https://' : 'http://';
  $request_url .= $_SERVER['HTTP_HOST'];
  $request_url .= $_SERVER['REQUEST_URI'];
  $redirect_url  = is_ssl() ? 'https://' : 'http://';
  $redirect_url .= $_SERVER['HTTP_HOST'];
  $redirect_url .= "/products/{$term_slug}/{$post_id}";
  if ( strcmp( $request_url, $redirect_url ) !== 0) {
    $post_url  = is_ssl() ? 'https://' : 'http://';
    $post_url .= $_SERVER['HTTP_HOST'];
    $post_url .= "/products/{$term_slug}/{$post_id}";
    //$post_url .= "/?post_type=products&p={$post_id}";
    wp_redirect($post_url, 301);
    exit();
  }
}
add_action( 'template_redirect', 'custom_products_redirect' );

// コラムカテゴリー
function rudr_term_permalink_column($url, $term, $taxonomy){
  $taxonomy_name = 'column-cat';
	$taxonomy_slug = 'column-cat';
  if ( strpos($url, $taxonomy_slug) === FALSE || $taxonomy != $taxonomy_name ) return $url;
  return str_replace('/'.$taxonomy_slug.'/', '/', $url);
}
add_filter('term_link', 'rudr_term_permalink_column',11,3);

function column_custom_permalinks_rule(){
 add_rewrite_rule('column/([^/]+)/([^/]+)/page/([0-9]+)/?$', 'index.php?column-cat=$matches[1]/$matches[2]&paged=$matches[3]', 'top');
 add_rewrite_rule('column/([^/]+)/page/([0-9]+)/?$', 'index.php?column-cat=$matches[1]&paged=$matches[2]', 'top');
 add_rewrite_rule('column/([^/]+)/([^/]+)/([0-9]+)/?$', 'index.php?post_type=column&p=$matches[3]', 'top');
 add_rewrite_rule('column/([^/]+)/([0-9]+)/?$', 'index.php?post_type=column&p=$matches[2]', 'top');
 add_rewrite_rule('column/([^/]+)/([^/]+)/?$', 'index.php?column-cat=$matches[1]/$matches[2]', 'top');
 add_rewrite_rule('column/([^/]+)/?$', 'index.php?column-cat=$matches[1]', 'top');
}
add_action('init', 'column_custom_permalinks_rule');

/*
function custom_column_redirect() {
  global $wp_query;
  global $post;
  if ( ! is_singular( "column" ) ) return;
  $term = get_the_terms( $post->ID, "column-cat" )[0];
  $term_slug = $term->slug;
  $post_id = $post->ID;
  $request_url  = is_ssl() ? 'https://' : 'http://';
  $request_url .= $_SERVER['HTTP_HOST'];
  $request_url .= $_SERVER['REQUEST_URI'];
  $redirect_url  = is_ssl() ? 'https://' : 'http://';
  $redirect_url .= $_SERVER['HTTP_HOST'];
  $redirect_url .= "/column/{$term_slug}/{$post_id}";
  if ( strcmp( $request_url, $redirect_url ) !== 0) {
    $post_url  = is_ssl() ? 'https://' : 'http://';
    $post_url .= $_SERVER['HTTP_HOST'];
    $post_url .= "/?post_type=column&p={$post_id}";
    wp_redirect($post_url);
    exit();
  }
}
add_action( 'template_redirect', 'custom_column_redirect' );
*/

/* タクソノミー未選択時に特定のタームを選択させる
----------------------------------------------------- */
function add_defaultcategory_automatically($post_ID) {
  global $wpdb;
  $products_item_terms = wp_get_object_terms($post_ID, 'products-item');
  if (0 == count($products_item_terms)) {
    $terms = get_terms('products-item');
    if ( !empty( $terms ) ) {
	     if ( !is_wp_error( $terms ) ) {
         $default_term = array($terms[0]->term_id);
       }
     }
    wp_set_object_terms($post_ID, $default_term, 'products-item');
  }
}
add_action('publish_products', 'add_defaultcategory_automatically');

/* タクソノミー未選択時に特定のタームを選択させる
----------------------------------------------------- */
function add_defaultcategory_automatically_column($post_ID) {
  global $wpdb;
  $column_cat_terms = wp_get_object_terms($post_ID, 'column-cat');
  if (0 == count($products_item_terms)) {
    $terms = get_terms('column-cat');
    if ( !empty( $terms ) ) {
	     if ( !is_wp_error( $terms ) ) {
         $default_term = array($terms[0]->term_id);
       }
     }
    wp_set_object_terms($post_ID, $default_term, 'column-cat');
  }
}
add_action('publish_column', 'add_defaultcategory_automatically_column');

/* feed noindex
----------------------------------------------------- */
add_action('template_redirect',function(){
  if ( is_feed() && headers_sent() === false ) {
    header( 'X-Robots-Tag: noindex, follow', true );
  }
});

/* コメント用feed noindex
----------------------------------------------------- */
function comment_feed_disable() {
  if ( is_comment_feed() ) {
    header( 'X-Robots-Tag: noindex, follow', true );
  }
}
add_action('parse_query', 'comment_feed_disable');


/* 自動生成canonical削除
----------------------------------------------------- */
remove_action('wp_head', 'rel_canonical');

/* 詳細ページを非表示
----------------------------------------------------- */
add_filter( 'voice_rewrite_rules', '__return_empty_array' );


/* taxonomy-products-item.php でブランド名取得のショートコード
----------------------------------------------------- */
function get_products_item_brand() {
  if (is_tax('products-item')) {
    global $post;
    $html = '';
    $brand_id_array = array();
    $term_id = get_queried_object_id();

    global $wpdb;
    /*
    $query = "SELECT id FROM $wpdb->posts
    LEFT JOIN $wpdb->term_relationships ON($wpdb->posts.ID = $wpdb->term_relationships.object_id)
    LEFT JOIN $wpdb->term_taxonomy ON($wpdb->term_relationships.term_taxonomy_id = $wpdb->term_taxonomy.term_taxonomy_id)
    WHERE post_status = 'publish'
    AND $wpdb->term_taxonomy.term_taxonomy_id = %s
    AND $wpdb->term_taxonomy.taxonomy = 'products-item'
    AND $wpdb->posts.post_type = 'products'";
    */

    $query = "SELECT DISTINCT terms2.term_id as term_id, terms2.name as name, terms2.slug as slug
    FROM $wpdb->posts as p1
        LEFT JOIN $wpdb->term_relationships as r1 ON p1.ID = r1.object_ID
        LEFT JOIN $wpdb->term_taxonomy as t1 ON r1.term_taxonomy_id = t1.term_taxonomy_id
        LEFT JOIN $wpdb->terms as terms1 ON t1.term_id = terms1.term_id,
      $wpdb->posts as p2
        LEFT JOIN $wpdb->term_relationships as r2 ON p2.ID = r2.object_ID
        LEFT JOIN $wpdb->term_taxonomy as t2 ON r2.term_taxonomy_id = t2.term_taxonomy_id
        LEFT JOIN $wpdb->terms as terms2 ON t2.term_id = terms2.term_id
    WHERE
    t1.taxonomy = 'products-item' AND p1.post_type = 'products' AND p1.post_status = 'publish' AND terms1.term_id = %s AND
    t2.taxonomy = 'products-brand' AND p2.post_type = 'products' AND p2.post_status = 'publish'
    AND p1.ID = p2.ID
    ";

    $prepared = $wpdb->prepare($query, $term_id);
    $results = $wpdb->get_results($prepared, ARRAY_A);
    //var_dump($results);
    /*
    $args = array(
      'post_type'  => 'products',
      'posts_per_page' => -1,
      'post_status' => 'publish',
      'tax_query'  => array(
        array(
          'taxonomy' => 'products-item',
          'field' => 'term_id',
          'terms' => array($term_id),
        ),
      ),
    );
    $myposts = get_posts( $args );
    if ( !empty($myposts) ) {
      foreach ( $myposts as $post ) : setup_postdata( $post );
        $brand_terms = get_the_terms($post->ID, 'products-brand');
        if ($brand_terms != null && is_array($brand_terms)) {
          foreach ($brand_terms as $key => $value) {
            if (in_array($value->term_id, $brand_id_array) === false) {
              $brand_id_array[] = $value->term_id;
            }
          }
        }
      endforeach;
    }
    wp_reset_postdata();
    foreach ($results as $key => $value) :
      $brand_terms = get_the_terms(intval($value[0]), 'products-brand');
      if ($brand_terms != null && is_array($brand_terms)) {
        foreach ($brand_terms as $key => $value) {
          if (in_array($value->term_id, $brand_id_array) === false) {
            $brand_id_array[] = $value->term_id;
          }
        }
      }
    endforeach;
    */

    foreach ($results as $key => $value) {
      if (in_array($value['term_id'], $brand_id_array) === false) {
        $brand_id_array[] = $value['term_id'];
      }
    }
    if (!empty($brand_id_array)) {
      $cnt = count($brand_id_array);
      $multiple = 5;
      $html .= '<table><tbody>';
      for ($i=0; $i < $cnt; $i++) {
        if ($i % $multiple === 0) {
          $html .= '<tr>';
        }
        $brand_name = get_term($brand_id_array[$i], 'products-brand')->name;
        $products_brand_url = home_url( '/products/brand/' ).get_term($brand_id_array[$i], 'products-brand')->slug;
        if ($i + 1 === $cnt) {
          $html .= '<td><a href="'.esc_url($products_brand_url).'">'.$brand_name.'</a></td>';
          $over = $i % $multiple;
          $over = 4 - $over;
          for ($n=0; $n < $over; $n++) {
            $html .= '<td>&nbsp;</td>';
          }
        } else {
          $html .= '<td><a href="'.esc_url($products_brand_url).'">'.$brand_name.'</a></td>';
        }
        if ($i % $multiple === 4 || $i + 1 === $cnt) {
          $html .= '</tr>';
        }
      }
      $html .= '</tbody></table>';
    }
    return $html;
  }
}
add_shortcode('products_item_brand', 'get_products_item_brand');

/* 画像ページを404にリダイレクト
----------------------------------------------------- */
add_action('template_redirect', function() {
    if (is_attachment()) {
        global $wp_query;
        $wp_query->set_404();
        status_header(404);
        nocache_headers();
        include( get_query_template('404') );
        exit;
    }
});


/* single ページ でコンテンツが空の場合にnoindex
----------------------------------------------------- */
add_action('wp_head', function() {
    if (is_singular()) { // 投稿 or カスタム投稿の single ページ
        global $post;
        if ($post && trim(strip_tags($post->post_content)) === '') {
            echo '<meta name="robots" content="noindex,nofollow">' . "\n";
        }
    }
});
