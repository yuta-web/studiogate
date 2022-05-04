<?php
function create_post_type(){
  $supports = array(
    'title',
    'editor'
  );

  register_post_type('kv',
    array(
      'label' => 'KV（左スライダー画像）',
      'public' => true,
      'has_archive' => true,
      'menu_position' => 3,
      'supports' => $supports
    )
  );
}
add_action('init','create_post_type');
?>
