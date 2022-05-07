<?php
function create_post_type(){
  $supports = array(
    'title',
    'editor'
  );

  register_post_type('kv_left',
    array(
      'label' => 'KV（左スライダー画像）',
      'public' => true,
      'supports' => $supports
    )
  );

  register_post_type('kv_right',
    array(
      'label' => 'KV（右スライダー画像）',
      'public' => true,
      'supports' => $supports
    )
  );

  register_post_type('livers',
    array(
      'label' => 'Livers',
      'public' => true,
      'supports' => $supports
    )
  );

  register_post_type('about',
    array(
      'label' => 'About',
      'public' => true,
      'supports' => $supports
    )
  );

  register_post_type('voice',
    array(
      'label' => 'Voice',
      'public' => true,
      'supports' => $supports
    )
  );

  register_post_type('company',
    array(
      'label' => 'Company',
      'public' => true,
      'supports' => $supports
    )
  );
}
add_action('init','create_post_type');

// メニューの並び替え
function my_custom_menu_order($menu_order) {
  if (!$menu_order) return true;
  return array(
      'index.php',
      'edit.php?post_type=kv_left',
      'edit.php?post_type=kv_right',
      'edit.php?post_type=livers',
      'edit.php?post_type=about',
      'edit.php?post_type=voice',
      'edit.php?post_type=company',
      'edit.php',
      'edit.php?post_type=page',
      'edit-comments.php',
      'separator-last',
      'themes.php',
      'plugins.php',
      'users.php',
      'tools.php',
      'options-general.php',
  );
}
add_filter('custom_menu_order', 'my_custom_menu_order');
add_filter('menu_order', 'my_custom_menu_order');

function add_my_scripts() {
  wp_deregister_script( 'jquery');
}
add_action('wp_enqueue_scripts', 'add_my_scripts');

function add_theme_scripts(){
	wp_enqueue_style("style",get_template_directory_uri()."/asset/css/style.css",array(),"1.0.0");
  wp_enqueue_script( 'jquery','//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js',array('jquery'),'3.6.0',true);
	wp_enqueue_script( 'js1', get_template_directory_uri()."/asset/js/smoothscroll.js",array(), '1.0.0',true);
  wp_enqueue_script( 'js2', get_template_directory_uri()."/asset/js/functions.js",array(), '1.0.0',true);
  wp_enqueue_script( 'js3', get_template_directory_uri()."/asset/js/script.js",array(), '1.0.0',true);
}
add_action("wp_enqueue_scripts","add_theme_scripts");
?>


