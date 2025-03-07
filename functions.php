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
    wp_enqueue_style('noto-sans', '//fonts.googleapis.com/css2?family=Noto+Sans:wght@100..900&display=swap');
    wp_enqueue_style('noto-sans-jp', '//fonts.googleapis.com/css2?family=Lusitana&family=Noto+Sans+JP:wght@100..900&display=swap');
    wp_enqueue_style("my", get_template_directory_uri() . "/dist/assets/css/style.css", array(), filemtime(get_theme_file_path('dist/assets/css/style.css')), "all");
    wp_enqueue_script("my", get_template_directory_uri() . "/dist/assets/js/script.js", array("jquery"), filemtime(get_theme_file_path('dist/assets/js/script.js')), true);
  }
  add_action("wp_enqueue_scripts", "my_script_init");

  /* ------------------------------------------------------------------------------ 
ブログ記事をカスタム投稿で出力
------------------------------------------------------------------------------ */
function add_custom_post() {
  register_post_type(
    'works',
    array(
      'label' => '施工実績',
      'public' => true,
      'has_archive' => true,
      // ブロックエディターを有効化するするかどうか
      'show_in_rest' => true,
      'menu_position' => 5,
      // 親子関係を持たせるか
      'hierarchical' => false,
      'supports' => array(
        'title',
        'editor',
        'thumbnail',
        'revisions',
        'excerpt',
        'custom-fields',
        'page-attributes',
        'author',
      )
    )
  );
}
add_action('init', 'add_custom_post');
/* ------------------------------------------------------------------------------
カスタム投稿のタクソノミー出力
------------------------------------------------------------------------------ */
function add_taxonomy() {
  //施工実績カテゴリ
  register_taxonomy(
    // カスタムタクソノミー名
    'works-cat',
    // 適応投稿タイプ
    'works',
    array(
      // 管理画面上の名前
      'label' => '施工実績カテゴリ',
      'singular_label' => '施工実績カテゴリ',
      'labels' => array(
        'add_works_item' => '施工実績カテゴリを追加'
      ),
      'public' => true,
      // 管理画面上に編集画面を表示するか
      'show_ui' => true,
      'show_in_nav_menus' => true,
      // ブロックエディターの管理画面に出力するかどうか
      'show_in_rest' => true,
      // カスタムタクソノミーに階層を持たせるか
      'hierarchical' => true
    )
  );
}
add_action('init', 'add_taxonomy');


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