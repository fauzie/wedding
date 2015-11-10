<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings      = array(
  'menu_title' => 'MyWedding',
  'menu_type'  => 'add_menu_page',
  'menu_slug'  => 'wedding',
  'ajax_save'  => true,
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();

// ------------------------------
// a seperator                  -
// ------------------------------
$options[] = array(
  'name'   => 'sep-theme',
  'title'  => __( 'Theme Options', 'wedding' ),
  'icon'   => 'fa fa-bookmark'
);

// ----------------------------------------
// General theme settings				  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'general',
  'title'       => __( 'General', 'wedding' ),
  'icon'        => 'fa fa-dashboard',

  'fields'      => array(
	  array(
		  'id'      => 'title',
		  'type'    => 'text',
		  'title'   => __( 'Site Title' ),
	  ),
	  array(
		  'id'      => 'desc',
		  'type'    => 'text',
		  'title'   => __( 'Site Description' ),
    ),
  )
);

// ----------------------------------------
// Homepage parameters					  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'homepage',
  'title'       => __( 'Homepage', 'wedding' ),
  'icon'        => 'fa fa-home',

  'fields'      => array(
	  array(
		  'id'      => 'leadin',
		  'type'    => 'text',
		  'title'   => __( 'Lead-In Text', 'wedding' ),
	  ),
	  array(
		  'id'      => 'sublead',
		  'type'    => 'text',
		  'title'   => __( 'Sub-Lead Text', 'wedding' ),
	  ),
	  array(
		  'type'    => 'heading',
		  'content' => __( 'Form Domain Check', 'wedding' ),
	  ),
	  array(
		  'id'      => 'check-label',
		  'type'    => 'text',
		  'title'   => __( 'Form Label', 'wedding' ),
	  ),
	  array(
		  'id'      => 'check-btn',
		  'type'    => 'text',
		  'title'   => __( 'Button Text', 'wedding' ),
	  ),
	  array(
		  'id'      => 'check-help',
		  'type'    => 'text',
		  'title'   => __( 'Help Text', 'wedding' ),
	  ),

  )
);

// ----------------------------------------
// a option section for options overview  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'overwiew',
  'title'       => 'Overview',
  'icon'        => 'fa fa-star',

  // begin: fields
  'fields'      => array(

    // begin: a field
    array(
      'id'      => 'text_1',
      'type'    => 'text',
      'title'   => 'Text',
    ),
    // end: a field

    array(
      'id'      => 'textarea_1',
      'type'    => 'textarea',
      'title'   => 'Textarea',
      'help'    => 'This option field is useful. You will love it!',
    ),

    array(
      'id'      => 'upload_1',
      'type'    => 'upload',
      'title'   => 'Upload',
      'help'    => 'Upload a site logo for your branding.',
    ),

    array(
      'id'      => 'switcher_1',
      'type'    => 'switcher',
      'title'   => 'Switcher',
      'label'   => 'You want to update for this framework ?',
    ),

    array(
      'id'      => 'color_picker_1',
      'type'    => 'color_picker',
      'title'   => 'Color Picker',
      'default' => '#3498db',
    ),

    array(
      'id'      => 'checkbox_1',
      'type'    => 'checkbox',
      'title'   => 'Checkbox',
      'label'   => 'Did you like this framework ?',
    ),

    array(
      'id'      => 'radio_1',
      'type'    => 'radio',
      'title'   => 'Radio',
      'options' => array(
        'yes'   => 'Yes, Please.',
        'no'    => 'No, Thank you.',
      ),
      'help'    => 'Are you sure for this choice?',
    ),

    array(
      'id'             => 'select_1',
      'type'           => 'select',
      'title'          => 'Select',
      'options'        => array(
        'bmw'          => 'BMW',
        'mercedes'     => 'Mercedes',
        'volkswagen'   => 'Volkswagen',
        'other'        => 'Other',
      ),
      'default_option' => 'Select your favorite car',
    ),

    array(
      'id'      => 'number_1',
      'type'    => 'number',
      'title'   => 'Number',
      'default' => '10',
      'after'   => ' <i class="cs-text-muted">$ (dollars)</i>',
    ),

    array(
      'id'        => 'image_select_1',
      'type'      => 'image_select',
      'title'     => 'Image Select',
      'options'   => array(
        'value-1' => 'http://codestarframework.com/assets/images/placeholder/100x80-2ecc71.gif',
        'value-2' => 'http://codestarframework.com/assets/images/placeholder/100x80-e74c3c.gif',
        'value-3' => 'http://codestarframework.com/assets/images/placeholder/100x80-ffbc00.gif',
        'value-4' => 'http://codestarframework.com/assets/images/placeholder/100x80-3498db.gif',
        'value-5' => 'http://codestarframework.com/assets/images/placeholder/100x80-555555.gif',
      ),
    ),

    array(
      'type'    => 'notice',
      'class'   => 'info',
      'content' => 'This is info notice field for your highlight sentence.',
    ),

    array(
      'id'      => 'background_1',
      'type'    => 'background',
      'title'   => 'Background',
    ),

    array(
      'type'    => 'notice',
      'class'   => 'warning',
      'content' => 'This is info warning field for your highlight sentence.',
    ),

    array(
      'id'      => 'icon_1',
      'type'    => 'icon',
      'title'   => 'Icon',
      'desc'    => 'Some description here for this option field.',
    ),

    array(
      'id'      => 'text_2',
      'type'    => 'text',
      'title'   => 'Text',
      'desc'    => 'Some description here for this option field.',
    ),

    array(
      'id'        => 'textarea_2',
      'type'      => 'textarea',
      'title'     => 'Textarea',
      'info'      => 'Some information here for this option field.',
      'shortcode' => true,
    ),

  ), // end: fields
);

// ------------------------------
// a seperator                  -
// ------------------------------
$options[] = array(
  'name'   => 'seperator_1',
  'title'  => 'A Seperator',
  'icon'   => 'fa fa-bookmark'
);

// ------------------------------
// backup                       -
// ------------------------------
$options[]   = array(
  'name'     => 'backup_section',
  'title'    => 'Backup',
  'icon'     => 'fa fa-shield',
  'fields'   => array(

    array(
      'type'    => 'notice',
      'class'   => 'warning',
      'content' => 'You can save your current options. Download a Backup and Import.',
    ),

    array(
      'type'    => 'backup',
    ),

  )
);

// ------------------------------
// validate                     -
// ------------------------------
$options[]   = array(
  'name'     => 'validate_section',
  'title'    => 'Validate',
  'icon'     => 'fa fa-check-circle',
  'fields'   => array(

    array(
      'id'       => 'validate_text_1',
      'type'     => 'text',
      'title'    => 'Email Text',
      'desc'     => 'This text field only accepted email address.',
      'default'  => 'info@domain.com',
      'validate' => 'email',
    ),

    array(
      'id'       => 'numeric_text_1',
      'type'     => 'text',
      'title'    => 'Numeric Text',
      'desc'     => 'This text field only accepted numbers',
      'default'  => '123456',
      'validate' => 'numeric',
    ),

    array(
      'id'       => 'required_text_1',
      'type'     => 'text',
      'title'    => 'Requried Text',
      'after'    => ' <small class="cs-text-warning">( * required )</small>',
      'default'  => 'lorem ipsum',
      'validate' => 'required',
    ),

    array(
      'type'    => 'notice',
      'class'   => 'info',
      'content' => 'Also you can add your own validate from <strong>themename/cs-framework/functions/validate.php</strong>',
    ),

  )
);

// ------------------------------
// sanitize                     -
// ------------------------------
$options[]   = array(
  'name'     => 'sanitize_section',
  'title'    => 'Sanitize',
  'icon'     => 'fa fa-repeat',
  'fields'   => array(

    array(
      'id'       => 'sanitie_text_1',
      'type'     => 'text',
      'title'    => 'Sanitized Text',
      'after'    => '<p class="cs-text-muted">This text field sanitized already, without any settings. we are using wordpress core.<br /> for eg. try too add <strong>&lt;p></strong> html tag</p>',
    ),

    array(
      'id'       => 'sanitie_text_2',
      'type'     => 'text',
      'title'    => 'Disable Sanitized Text',
      'after'    => '<p class="cs-text-muted">Disabled sanitize for this field (sanitize=false). try too add <strong>&lt;p></strong> html tag so, you can write anything</p>',
      'sanitize' => false,
    ),

    array(
      'id'       => 'sanitie_textarea_1',
      'type'     => 'textarea',
      'title'    => 'Sanitized Textarea',
      'after'    => '<p class="cs-text-muted">This textarea field sanitized already, without any settings. we are using wordpress core.<br /> just allowing this tags wp core $allowedposttags</p>',
    ),

    array(
      'id'       => 'sanitie_textarea_2',
      'type'     => 'textarea',
      'title'    => 'Disabled Sanitized Textarea',
      'after'    => '<p class="cs-text-muted">Disabled sanitize for this field (sanitize=false). you can write anything</p>',
      'sanitize' => false,
    ),

    array(
      'type'    => 'notice',
      'class'   => 'info',
      'content' => 'Custom Sanitize, Also you can add your own validate from <strong>themename/cs-framework/functions/sanitize.php</strong>',
    ),

    array(
      'id'       => 'sanitie_text_1',
      'type'     => 'text',
      'title'    => 'Custom Sanitize Text',
      'after'    => '<p class="cs-text-muted">This text field sanitized as slug title (sanitize="title")</p>',
      'sanitize' => 'title',
    ),

  )
);

// ----------------------------------------
// dependencies                           -
// ----------------------------------------
$options[]           = array(
  'name'             => 'dependencies',
  'title'            => 'Dependencies',
  'icon'             => 'fa fa-code-fork',
  'fields'           => array(

    // ------------------------------------
    // Basic Dependencies
    // ------------------------------------
    array(
      'type'         => 'subheading',
      'content'      => 'Basic Dependencies',
    ),

    // ------------------------------------
    array(
      'id'           => 'dep_1',
      'type'         => 'text',
      'title'        => 'If text <u>not be empty</u>',
    ),

    array(
      'id'           => 'dummy_1',
      'type'         => 'notice',
      'class'        => 'info',
      'content'      => 'Done, this text option have something.',
      'dependency'   => array( 'dep_1', '!=', '' ),
    ),
    // ------------------------------------

    // ------------------------------------
    array(
      'id'           => 'dep_2',
      'type'         => 'switcher',
      'title'        => 'If switcher mode <u>ON</u>',
    ),

    array(
      'id'           => 'dummy_2',
      'type'         => 'notice',
      'class'        => 'success',
      'content'      => 'Woow! Switcher is ON',
      'dependency'   => array( 'dep_2', '==', 'true' ),
    ),
    // ------------------------------------

    // ------------------------------------
    array(
      'id'           => 'dep_3',
      'type'         => 'select',
      'title'        => 'Select color <u>black or white</u>',
      'options'      => array(
        'blue'       => 'Blue',
        'yellow'     => 'Yellow',
        'green'      => 'Green',
        'black'      => 'Black',
        'white'      => 'White',
      ),
    ),

    array(
      'id'           => 'dummy_3',
      'type'         => 'notice',
      'class'        => 'danger',
      'content'      => 'Well done!',
      'dependency'   => array( 'dep_3', 'any', 'black,white' ),
    ),
    // ------------------------------------

    // ------------------------------------
    array(
      'id'           => 'dep_4',
      'type'         => 'radio',
      'title'        => 'If set <u>No, Thanks</u>',
      'options'      => array(
        'yes'        => 'Yes, Please',
        'no'         => 'No, Thanks',
        'not-sure'   => 'I am not sure!',
      ),
      'default'      => 'yes'
    ),

    array(
      'id'           => 'dummy_4',
      'type'         => 'notice',
      'class'        => 'info',
      'content'      => 'Uh why?!!!',
      'dependency'   => array( 'dep_4_no', '==', 'true' ),
      //'dependency' => array( '{ID}_{VALUE}', '==', 'true' ),
    ),
    // ------------------------------------

    // ------------------------------------
    array(
      'id'           => 'dep_5',
      'type'         => 'checkbox',
      'title'        => 'If checked <u>danger</u>',
      'options'      => array(
        'success'    => 'Success',
        'danger'     => 'Danger',
        'info'       => 'Info',
        'warning'    => 'Warning',
      ),
    ),

    array(
      'id'           => 'dummy_5',
      'type'         => 'notice',
      'class'        => 'danger',
      'content'      => 'Danger!',
      'dependency'   => array( 'dep_5_danger', '==', 'true' ),
      //'dependency' => array( '{ID}_{VALUE}', '==', 'true' ),
    ),
    // ------------------------------------

    // ------------------------------------
    array(
      'id'           => 'dep_6',
      'type'         => 'image_select',
      'title'        => 'If check <u>Blue box</u>',
      'options'      => array(
        'green'      => 'http://codestarframework.com/assets/images/placeholder/100x80-2ecc71.gif',
        'red'        => 'http://codestarframework.com/assets/images/placeholder/100x80-e74c3c.gif',
        'yellow'     => 'http://codestarframework.com/assets/images/placeholder/100x80-ffbc00.gif',
        'blue'       => 'http://codestarframework.com/assets/images/placeholder/100x80-3498db.gif',
        'gray'       => 'http://codestarframework.com/assets/images/placeholder/100x80-555555.gif',
      ),
      'info'         => 'Image select field input="checkbox" model. in checkbox model unselected available.',
    ),

    array(
      'id'           => 'dummy_6',
      'type'         => 'notice',
      'class'        => 'info',
      'content'      => 'Blue box selected!',
      'dependency'   => array( 'dep_6_blue', '==', 'true' ),
      //'dependency' => array( '{ID}_{VALUE}', '==', 'true' ),
    ),
    // ------------------------------------

    // ------------------------------------
    array(
      'id'           => 'dep_7',
      'type'         => 'image_select',
      'title'        => 'If check <u>Green box</u>',
      'options'      => array(
        'green'      => 'http://codestarframework.com/assets/images/placeholder/100x80-2ecc71.gif',
        'red'        => 'http://codestarframework.com/assets/images/placeholder/100x80-e74c3c.gif',
        'yellow'     => 'http://codestarframework.com/assets/images/placeholder/100x80-ffbc00.gif',
        'blue'       => 'http://codestarframework.com/assets/images/placeholder/100x80-3498db.gif',
        'gray'       => 'http://codestarframework.com/assets/images/placeholder/100x80-555555.gif',
      ),
      'info'         => 'Image select field input="radio" model. in radio model unselected unavailable.',
      'radio'        => true,
      'default'      => 'gray',
    ),

    array(
      'id'           => 'dummy_7',
      'type'         => 'notice',
      'class'        => 'success',
      'content'      => 'Green box selected!',
      'dependency'   => array( 'dep_7_green', '==', 'true' ),
      //'dependency' => array( '{ID}_{VALUE}', '==', 'true' ),
    ),
    // ------------------------------------

    // ------------------------------------
    array(
      'id'           => 'dep_7_alt',
      'type'         => 'image_select',
      'title'        => 'If check <u>Green box or Blue box</u>',
      'options'      => array(
        'green'      => 'http://codestarframework.com/assets/images/placeholder/100x80-2ecc71.gif',
        'red'        => 'http://codestarframework.com/assets/images/placeholder/100x80-e74c3c.gif',
        'yellow'     => 'http://codestarframework.com/assets/images/placeholder/100x80-ffbc00.gif',
        'blue'       => 'http://codestarframework.com/assets/images/placeholder/100x80-3498db.gif',
        'gray'       => 'http://codestarframework.com/assets/images/placeholder/100x80-555555.gif',
      ),
      'info'         => 'Multipel Image select field input="radio" model. in radio model unselected unavailable.',
      'radio'        => true,
      'default'      => 'gray',
      'attributes'   => array(
        'data-depend-id' => 'dep_7_alt',
      ),
    ),

    array(
      'id'           => 'dummy_7_alt',
      'type'         => 'notice',
      'class'        => 'success',
      'content'      => 'Green or Blue box selected!',
      'dependency'   => array( 'dep_7_alt', 'any', 'green,blue' ),
      //'dependency' => array( 'data-depend-id', 'any', 'value,value' ),
    ),
    // ------------------------------------

    // ------------------------------------
    array(
      'id'           => 'dep_8',
      'type'         => 'image',
      'title'        => 'Add a image',
    ),

    array(
      'id'           => 'dummy_8',
      'type'         => 'notice',
      'class'        => 'success',
      'content'      => 'Added a image!',
      'dependency'   => array( 'dep_8', '!=', '' ),
    ),
    // ------------------------------------

    // ------------------------------------
    array(
      'id'           => 'dep_9',
      'type'         => 'icon',
      'title'        => 'Add a icon',
    ),

    array(
      'id'           => 'dummy_9',
      'type'         => 'notice',
      'class'        => 'success',
      'content'      => 'Added a icon!',
      'dependency'   => array( 'dep_9', '!=', '' ),
    ),
    // ------------------------------------

    // ------------------------------------
    // Advanced Dependencies
    // ------------------------------------
    array(
      'type'         => 'subheading',
      'content'      => 'Advanced Dependencies',
    ),

    // ------------------------------------
    array(
      'id'           => 'dep_10',
      'type'         => 'text',
      'title'        => 'If text string <u>hello</u>',
    ),

    array(
      'id'           => 'dep_11',
      'type'         => 'text',
      'title'        => 'and this text string <u>world</u>',
    ),

    array(
      'id'           => 'dep_12',
      'type'         => 'checkbox',
      'title'        => 'and checkbox mode <u>checked</u>',
      'label'        => 'Check me!'
    ),

    array(
      'id'           => 'dummy_10',
      'type'         => 'notice',
      'class'        => 'info',
      'content'      => 'Done, Multiple Dependencies worked.',
      'dependency'   => array( 'dep_10|dep_11|dep_12', '==|==|==', 'hello|world|true' ),
    ),
    // ------------------------------------

    // ------------------------------------
    // Another Dependencies
    // ------------------------------------
    array(
      'type'         => 'subheading',
      'content'      => 'Another Dependencies',
    ),

    // ------------------------------------
    array(
      'id'           => 'dep_13',
      'type'         => 'select',
      'title'        => 'If color <u>black or white</u>',
      'options'      => array(
        'blue'       => 'Blue',
        'black'      => 'Black',
        'white'      => 'White',
      ),
    ),

    array(
      'id'           => 'dep_14',
      'type'         => 'select',
      'title'        => 'If size <u>middle</u>',
      'options'      => array(
        'small'      => 'Small',
        'middle'     => 'Middle',
        'large'      => 'Large',
        'xlage'      => 'XLarge',
      ),
    ),

    array(
      'id'           => 'dep_15',
      'type'         => 'select',
      'title'        => 'If text is <u>world</u>',
      'options'      => array(
        'hello'      => 'Hello',
        'world'      => 'World',
      ),
      'dependency'   => array( 'dep_13|dep_14', 'any|==', 'black,white|middle' ),
    ),

    array(
      'id'           => 'dummy_11',
      'type'         => 'notice',
      'class'        => 'info',
      'content'      => 'Well done, Correctly!',
      'dependency'   => array( 'dep_15', '==', 'world' ),
    ),
    // ------------------------------------

  ),
);

CSFramework::instance( $settings, $options );
