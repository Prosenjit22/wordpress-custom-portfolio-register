<?php
function create_portfolio_cpt() {
    $labels = array(
        'name' => __('Portfolios', 'textdomain'),
        'singular_name' => __('Portfolio', 'textdomain'),
        'menu_name' => __('Portfolios', 'textdomain'),
        'name_admin_bar' => __('Portfolio', 'textdomain'),
        'add_new' => __('Add New', 'textdomain'),
        'add_new_item' => __('Add New Portfolio', 'textdomain'),
        'new_item' => __('New Portfolio', 'textdomain'),
        'edit_item' => __('Edit Portfolio', 'textdomain'),
        'view_item' => __('View Portfolio', 'textdomain'),
        'all_items' => __('All Portfolios', 'textdomain'),
        'search_items' => __('Search Portfolios', 'textdomain'),
        'not_found' => __('No portfolios found.', 'textdomain'),
        'not_found_in_trash' => __('No portfolios found in Trash.', 'textdomain'),
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'portfolio'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
    );

    register_post_type('portfolio', $args);
}

add_action('init', 'create_portfolio_cpt');
?>
