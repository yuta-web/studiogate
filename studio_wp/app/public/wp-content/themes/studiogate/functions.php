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
?>
