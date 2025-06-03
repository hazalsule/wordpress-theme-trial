<?php

// Temaya destek tanımları
function hazal_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);
}
add_action('after_setup_theme', 'hazal_theme_setup');

// Menü kaydı
function hazal_theme_menus() {
    register_nav_menu('main-menu', 'Ana Menü');
}
add_action('init', 'hazal_theme_menus');

// CSS ve JS dosyaları
function hazal_theme_scripts() {
    wp_enqueue_style('hazal-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'hazal_theme_scripts');