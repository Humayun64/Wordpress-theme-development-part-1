<?php 
 add_action('cmb2_admin_init','metabox_for_posts');
 function metabox_for_posts(){ 
    $metabox=new_cmb2_box(array(
        'id'           => 'additional-box',
        'object_types' => array('post'),
        'title'        => __('Additional Field','dp1F'),
    ));
    $metabox->add_field(array(
        'id'   => '_for-video',
        'type' => 'text',
        'name' => 'Video Url'
    ));
    $metabox->add_field(array(
        'id'   => '_for-gallery',
        'type' => 'file_list',
        'name' => 'Gallery Image'
    ));
    $metabox->add_field(array(
        'id'   => '_for-audio',
        'type' => 'text',
        'name' => 'Audio Url'
    ));
    

    //slider  
  $sliders = new_cmb2_box(array(
    'id'           => 'additionalslider-box',
    'object_types' => array('dp1F-slider'),
    'title'        => 'Additional Slider'
  ));
  
  $sliders->add_field(array(
    'name' => 'Subtitle',
    'id'   => '_for-slider',
    'type' => 'text'
   
));

//add button
$sliders->add_field(array(
    'name'   => 'First button text',
    'id'     => '_first_button_text',
    'type'   => 'text'

));
$sliders->add_field(array(
    'name'   => 'First button url',
    'id'     => '_first_button_url',
    'type'   => 'text'

));
$sliders->add_field(array(
    'name'          => 'First button type',
    'id'            => '_first-button-type',
    'type'          => 'select',
    'options'        => array(
    'red'           => 'Red Button',
    'transparent'   => 'Transparent Button'
    )

));



 }
?> 