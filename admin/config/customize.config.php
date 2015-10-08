<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// CUSTOMIZE SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options              = array();

// -----------------------------------------
// Customize Core Fields                   -
// -----------------------------------------
$options[]            = array(
  'name'              => 'wp_core_fields',
  'title'             => 'WP Core Fields',
  'settings'          => array(

    // color
    array(
      'name'          => 'color_option_with_default',
      'default'       => '#d80039',
      'control'       => array(
        'label'       => 'Color',
        'type'        => 'color',
      ),
    ),

    // text
    array(
      'name'          => 'text_option',
      'control'       => array(
        'label'       => 'Text',
        'type'        => 'text',
      ),
    ),

    // text with default
    array(
      'name'          => 'text_option_with_default',
      'default'       => 'bla bla bla',
      'control'       => array(
        'label'       => 'Text with Default',
        'type'        => 'text',
      ),
    ),

    // textarea
    array(
      'name'          => 'textarea_option',
      'control'       => array(
        'label'       => 'Textarea',
        'type'        => 'textarea',
      ),
    ),

    // checkbox
    array(
      'name'          => 'checkbox_option',
      'control'       => array(
        'label'       => 'Checkbox',
        'type'        => 'checkbox',
      ),
    ),

    // radio
    array(
      'name'          => 'radio_option',
      'control'       => array(
        'label'       => 'Radio',
        'type'        => 'radio',
        'choices'     => array(
          'key1'      => 'value 1',
          'key2'      => 'value 2',
          'key3'      => 'value 3',
        )
      ),
    ),

    // select
    array(
      'name'          => 'select_option',
      'control'       => array(
        'label'       => 'Select',
        'type'        => 'select',
        'choices'     => array(
          ''          => '- Select a value -',
          'key1'      => 'value 1',
          'key2'      => 'value 2',
          'key3'      => 'value 3',
        )
      ),
    ),

    // dropdown-pages
    array(
      'name'          => 'dropdown_pages_option',
      'control'       => array(
        'label'       => 'Dropdown-Pages',
        'type'        => 'dropdown-pages',
      ),
    ),

    // upload
    array(
      'name'          => 'upload_option',
      'control'       => array(
        'label'       => 'Upload',
        'type'        => 'upload',
      ),
    ),

    // image
    array(
      'name'          => 'image_option',
      'control'       => array(
        'label'       => 'Image',
        'type'        => 'image',
      ),
    ),

    // media
    array(
      'name'          => 'media_option',
      'control'       => array(
        'label'       => 'Media',
        'type'        => 'media',
      ),
    ),

  )
);

CSFramework_Customize::instance( $options );
