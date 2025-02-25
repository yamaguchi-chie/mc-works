<?php

/**
 * func-base
 * WordPress標準機能
 *
 * @codex https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support
 */
function my_setup() {
	add_theme_support( 'post-thumbnails' ); /* アイキャッチ */
	add_theme_support( 'automatic-feed-links' ); /* RSSフィード */
	add_theme_support( 'title-tag' ); /* タイトルタグ自動生成 */
	add_theme_support(
		'html5',
		array( /* HTML5のタグで出力 */
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);
}
add_action( 'after_setup_theme', 'my_setup' );

function my_script_init() {
    wp_enqueue_style('noto-sans', 'https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100..900&display=swap" rel="stylesheet"');
    wp_enqueue_style("my", get_template_directory_uri() . "/dist/assets/css/style.css", array(), filemtime(get_theme_file_path('dist/assets/css/style.css')), "all");
    wp_enqueue_script("my", get_template_directory_uri() . "/dist/assets/js/script.js", array("jquery"), filemtime(get_theme_file_path('dist/assets/js/script.js')), true);
  }
  add_action("wp_enqueue_scripts", "my_script_init");

  //ページネーション
  // function add_prev_post_link_class($output) {
  //   return str_replace('<a href=', '<a class="pagination__link txt" href=', $output); 
  //   }
  //   add_filter( 'previous_post_link', 'add_prev_post_link_class' );
  //   function add_next_post_link_class($output) {
  //   return str_replace('<a href=', '<a class="pagination__link txt" href=', $output); 
  //   }
  //   add_filter( 'next_post_link', 'add_next_post_link_class' );

//   // pタグとbrタグの自動挿入を解除
//   remove_filter('the_content', 'wpautop');
// }

  // function my_preget_posts($query) {
  //   if (is_admin() || ! $query->is_main_query()){
  //     return;
  //   }
  //   if ($query->is_post_type_archive('works')) {
  //      $query->set('posts_per_page', 3);
  //      // $query->set('posts_per_page', 設定したい最大表示件数)
  //      return;
  //   }
  //   if ($query->is_front_page()) {
  //      $query->set('posts_per_page', 3);
  //      // $query->set('posts_per_page', 設定したい最大表示件数)
  //      return;
  //   }
  // }
  // add_action('pre_get_posts', 'my_preget_posts');

  // //メタ
  // function my_title_separator($separator) {
  //   $separator = '|';
  //   return $separator;
  // }
  // add_filter('document_title_separator', 'my_title_separator');
?>