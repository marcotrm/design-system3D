<?php
//----------------function for create page options in wordpress BE

add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init()
{

    // Check function exists.
    if (function_exists('acf_add_options_page')) {

        // duplicate this function for create another page options
        $option_page = acf_add_options_page(array(
            'page_title' => __('Demo option'),
            'menu_title' => __('Demo option'),
            'menu_slug' => 'demo-option-page',
            'capability' => 'edit_posts',
            'redirect' => false
        ));
    }
}

//----------------functions for create customs block with ACF 

// Block registration for gutemberg
add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types()
{

    // Demo ACF Block Creation
    if (function_exists('acf_register_block_type')) {
        acf_register_block(array(
            'name' => 'Demo Name',
            'title' => __('Demo Name'),
            'description' => __('Insert section1'),
            'render_template' => 'template-parts/blocks/demo/demo.php',
            'category' => 'formatting',
            'icon' => 'admin-comments',
            'keywords' => array('Demo', 'header'),
        ));
    }
}
