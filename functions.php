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
      'labels' => array(
        'add_new_item' => '新規施工実績を追加',
      ),
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
      ),
      'menu_icon' => 'dashicons-admin-appearance',
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
      'hierarchical' => true,
    )
  );
}
add_action('init', 'add_taxonomy');

/* ------------------------------------------------------------------------------
「投稿」の表記変更
------------------------------------------------------------------------------ */
function Change_menulabel() {
  global $menu;
  global $submenu;
  $name = 'お知らせ';
  $menu[5][0] = $name;
  $submenu['edit.php'][5][0] = $name.'一覧';
  $submenu['edit.php'][10][0] = '新規'.$name.'投稿';
}
function Change_objectlabel() {
  global $wp_post_types;
  $name = 'お知らせ';
  $labels = &$wp_post_types['post']->labels;
  $labels->name = $name;
  $labels->singular_name = $name;
  $labels->add_new = _x('追加', $name);
  $labels->add_new_item = $name.'の新規追加';
  $labels->edit_item = $name.'の編集';
  $labels->new_item = '新規'.$name;
  $labels->view_item = $name.'を表示';
  $labels->search_items = $name.'を検索';
  $labels->not_found = $name.'が見つかりませんでした';
  $labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
}
add_action( 'init', 'Change_objectlabel' );
add_action( 'admin_menu', 'Change_menulabel' );

/* ------------------------------------------------------------------------------
管理画面のデザイン変更
------------------------------------------------------------------------------ */
// add_action( 'init', 'custom_post_type' );
// function custom_post_type() {
//   register_post_type( 'works',
//     array(
//       // 'labels' => array(
//       //   'name' => __( 'コラム' ),
//       //   'singular_name' => __( 'コラム' ),
//       //   'add_new' => _x('新規追加', 'コラム'),
//       //   'add_new_item' => __('新規追加')
//       // ),
//       // 'public' => true,
//       // 'has_archive' => true,
//       // 'hierarchical' => false,
//       // 'menu_position' =>5,
//       'menu_icon' => 'dashicons-admin-appearance',
//       // 'supports' => array('title','editor','thumbnail','revisions')
//     )
//   );
// }
?>