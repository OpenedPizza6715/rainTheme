<?php
// 防止直接访问
if (!defined('ABSPATH')) {
    exit;
}

// 主题设置
function my_theme_setup() {
    // 支持特色图像
    add_theme_support('post-thumbnails');
    
    // 支持自定义菜单
    add_theme_support('menus');
    
    // 注册导航菜单
    register_nav_menus(array(
        'primary' => '主导航菜单'
    ));
    
    // 支持HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    
    // 设置文章摘要长度
    function custom_excerpt_length($length) {
        return 50;
    }
    add_filter('excerpt_length', 'custom_excerpt_length');
}
add_action('after_setup_theme', 'my_theme_setup');

// 加载样式和脚本
function my_theme_scripts() {
    // 加载主题样式
    wp_enqueue_style('my-theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'my_theme_scripts');

// 添加小工具支持
function my_theme_widgets_init() {
    register_sidebar(array(
        'name' => '侧边栏',
        'id' => 'sidebar-1',
        'description' => '主侧边栏',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'my_theme_widgets_init');
