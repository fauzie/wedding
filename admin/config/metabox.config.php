<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.

function cs_get_sidebars() {

	global $wp_registered_sidebars;

    if ( empty( $wp_registered_sidebars ) )
        return;

	$side = array();
	foreach ( $wp_registered_sidebars as $sidebar ) {
		$side[ $sidebar['id'] ] = ucwords( $sidebar['name'] );
	}
	return $side;
}

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options      = array();

// -----------------------------------------
// Page Metabox Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => '_custom_page_options',
  'title'     => 'Page Options',
  'post_type' => 'page',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    // begin: a section
    array(
      'name'  => 'sidebar-section',
      'title' => __( 'Sidebar Settings', 'wedding' ),
      'icon'  => 'fa fa-bars',

      // begin: fields
      'fields' => array(

        // begin: a field
		array(
          'id'    => 'sidebar',
          'type'  => 'switcher',
          'title' => __( 'Enable Sidebar', 'wedding' ),
          'label' => __( 'Yes, display it.', 'wedding' ),
		  'default' => true
        ),
		array(
		  'id'        => 'sidebar-pos',
		  'type'      => 'image_select',
		  'title'     => __( 'Sidebar Positions' ),
		  'options'   => array(
			'left'    => get_template_directory_uri() .'/img/2cl.png',
			'right'   => get_template_directory_uri() .'/img/2cr.png',
			'default' => get_template_directory_uri() .'/img/1c.png',
		  ),
		  'default'   => 'right',
		  'dependency' => array( 'sidebar', '==', 'true' ),
		),
		array(
		  'id'         => 'the-sidebar',
		  'type'       => 'select',
		  'title'      => 'Select Sidebar',
		  'options'    => cs_get_sidebars(),
		  'class'      => 'chosen',
		  'dependency' => array( 'sidebar|sidebar-pos_default', '==|==', 'true|false' ),
		),

      ), // end: fields
    ), // end: a section

  ),
);

// -----------------------------------------
// Page Side Metabox Options               -
// -----------------------------------------
/*$options[]    = array(
  'id'        => '_custom_page_side_options',
  'title'     => 'Custom Page Side Options',
  'post_type' => 'page',
  'context'   => 'side',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => 'section_3',
      'fields' => array(

        array(
          'id'        => 'section_3_image_select',
          'type'      => 'image_select',
          'options'   => array(
            'value-1' => 'http://codestarframework.com/assets/images/placeholder/65x65-2ecc71.gif',
            'value-2' => 'http://codestarframework.com/assets/images/placeholder/65x65-e74c3c.gif',
            'value-3' => 'http://codestarframework.com/assets/images/placeholder/65x65-3498db.gif',
          ),
          'default'   => 'value-2',
        ),

        array(
          'id'            => 'section_3_text',
          'type'          => 'text',
          'attributes'    => array(
            'placeholder' => 'do stuff'
          )
        ),

        array(
          'id'      => 'section_3_switcher',
          'type'    => 'switcher',
          'label'   => 'Are you sure ?',
          'default' => true
        ),

      ),
    ),

  ),
);

// -----------------------------------------
// Post Metabox Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => '_custom_post_options',
  'title'     => 'Custom Post Options',
  'post_type' => 'post',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => 'section_4',
      'fields' => array(

        array(
          'id'    => 'section_4_text',
          'type'  => 'text',
          'title' => 'Text Field',
        ),

        array(
          'id'    => 'section_4_textarea',
          'type'  => 'textarea',
          'title' => 'Textarea Field',
        ),

        array(
          'id'    => 'section_4_upload',
          'type'  => 'upload',
          'title' => 'Upload Field',
        ),

        array(
          'id'    => 'section_4_switcher',
          'type'  => 'switcher',
          'title' => 'Switcher Field',
          'label' => 'Yes, Please do it.',
        ),

      ),
    ),

  ),
);*/

CSFramework_Metabox::instance( $options );
