<?php

// 登録済みのjQueryを解除して、登録し直す
function remove_default_jquery()
{
    // 管理画面でないなら
    if (!is_admin()) {
        wp_deregister_script('jquery');

        wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.2.1.min.js', array(), 3.2, true);
        wp_enqueue_script('popper_js', get_template_directory_uri() . '/styles/bootstrap4/popper.js', array(), 4.0, true);
        wp_enqueue_script('bootstrap4_js', get_template_directory_uri() . '/styles/bootstrap4/bootstrap.min.js', array(), 4.0, true);
    }
}
function my_theme_add_editor_styles() {
    add_theme_support('editor-styles');
    add_editor_style('style-editor.css');
}
{add_action('after_setup_theme', 'my_theme_add_editor_styles');

add_action('wp_enqueue_scripts', 'remove_default_jquery');

add_action('wp_enqueue_scripts', 'remove_default_jquery');

add_theme_support('post-thumbnails');
}