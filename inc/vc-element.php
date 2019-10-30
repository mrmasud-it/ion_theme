<?php
//For banner section
vc_map(array(
    'name' => __('Banner Section', 'ion_theme'),
    'description' => __('This is banner section', 'ion_theme'),
    'base' => 'banner',
    'category' => 'ION',
    'icon' => 'fa fa-map',
    'params' => array(
        array(
            'param_name' => __('banner_image', 'ion_theme'),
            'type' => 'attach_image',
            'heading' => __('Upload your image', 'ion_theme'),
        ),
        array(
            'param_name' => __('heading', 'ion_theme'),
            'type' => 'textfield',
            'heading' => __('Input your heading', 'ion_theme'),
        ),
        array(
            'param_name' => __('text', 'ion_theme'),
            'type' => 'textarea',
            'heading' => __('Input your description', 'ion_theme'),
        ),
        array(
            'param_name' => __('btn_one_t', 'ion_theme'),
            'type' => 'textfield',
            'heading' => __('Input your botton one text', 'ion_theme'),
        ),
        array(
            'param_name' => __('btn_one_l', 'ion_theme'),
            'type' => 'textfield',
            'heading' => __('Input your botton one link', 'ion_theme'),
        ),
        array(
            'param_name' => __('btn_two_t', 'ion_theme'),
            'type' => 'textfield',
            'heading' => __('Input your botton two text', 'ion_theme'),
        ),
        array(
            'param_name' => __('btn_two_l', 'ion_theme'),
            'type' => 'textfield',
            'heading' => __('Input your botton two link', 'ion_theme'),
        ),
    ),
));

//For sec_one heading
vc_map(array(
    'name' => __('Section One', 'ion_theme'),
    'description' => __('This is for section one', 'ion_theme'),
    'base' => 'sec_one',
    'category' => 'ION',
    'icon' => 'fa fa-map',
    'params' => array(
        array(
            'param_name' => __('sec_one_h', 'ion_theme'),
            'type' => 'textfield',
            'heading' => __('Input your section one heading', 'ion_theme'),
        ),
        array(
            'param_name' => __('sec_one_d', 'ion_theme'),
            'type' => 'textarea',
            'heading' => __('Input your section one description', 'ion_theme'),
        ),
    ),
));

//For iconbox with text
vc_map(array(
    'name' => __('Iconbox With Text', 'ion_theme'),
    'description' => __('This for our iconbox', 'ion_theme'),
    'base' => 'iconbox',
    'category' => 'ION',
    'icon' => 'fa fa-map',
    'params' => array(
        array(
            'param_name' => __('icon', 'ion_theme'),
            'type' => 'iconpicker',
            'heading' => __('Select your icon', 'ion_theme'),
        ),
        array(
            'param_name' => __('icon_heiding', 'ion_theme'),
            'type' => 'textfield',
            'heading' => __('Input your heading', 'ion_theme'),
        ),
        array(
            'param_name' => __('icon_desc', 'ion_theme'),
            'type' => 'textarea',
            'heading' => __('Input your description', 'ion_theme'),
        ),
    ),
));

//For sec_one heading
vc_map(array(
    'name' => __('Section Two', 'ion_theme'),
    'description' => __('This is for section one', 'ion_theme'),
    'base' => 'sec_two',
    'category' => 'ION',
    'icon' => 'fa fa-map',
    'params' => array(
        array(
            'param_name' => __('sec_two_h', 'ion_theme'),
            'type' => 'textfield',
            'heading' => __('Input your section two heading', 'ion_theme'),
        ),
        array(
            'param_name' => __('sec_two_d', 'ion_theme'),
            'type' => 'textarea',
            'heading' => __('Input your section two description', 'ion_theme'),
        ),
    ),
));

// For post section
vc_map(array(
    'name'          =>      __('Post','astrum'),
    'description'   =>      'This is post section',
    'base'          =>      'post_sec',
    'category'      =>      'ION',
    'icon'          =>      'fa fa-map',
    'params'        =>      array(
        array(
            'param_name'    =>  'post_sec',
            'type'          =>  'textfield',
            'heading'       =>  'Post per page'

        ),
    )
));

// for our testomonial
vc_map(array(
    'name' => __('Our Testomnial','ion_theme'),
    'description' => 'This is for Testomonial section',
    'base' => 'testomonial',
    'category' => 'ION',
    'icon' => 'fa fa-map',
    'params' => array(
        array(
        
        ),
    )
));
