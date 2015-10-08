<?php
/**
 * My Wedding custom extra functions.
 *
 * @package My_Wedding
 */
/**
 * Clean up wp_head()
 *
 * Remove unnecessary <link>'s
 * Remove inline CSS and JS from WP emoji support
 * Remove inline CSS used by Recent Comments widget
 * Remove inline CSS used by posts with galleries
 * Remove self-closing tag and change ''s to "'s on rel_canonical()
 */
function wedding_head_cleanup() {
  // Originally from http://wpengineer.com/1438/wordpress-header/
  remove_action('wp_head', 'feed_links_extra', 3);
  add_action('wp_head', 'ob_start', 1, 0);
  add_action('wp_head', function () {
    $pattern = '/.*' . preg_quote(esc_url(get_feed_link('comments_' . get_default_feed())), '/') . '.*[\r\n]+/';
    echo preg_replace($pattern, '', ob_get_clean());
  }, 3, 0);
  remove_action('wp_head', 'rsd_link');
  remove_action('wp_head', 'wlwmanifest_link');
  remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
  remove_action('wp_head', 'wp_generator');
  remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('admin_print_scripts', 'print_emoji_detection_script');
  remove_action('wp_print_styles', 'print_emoji_styles');
  remove_action('admin_print_styles', 'print_emoji_styles');
  remove_filter('the_content_feed', 'wp_staticize_emoji');
  remove_filter('comment_text_rss', 'wp_staticize_emoji');
  remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
  add_filter('use_default_gallery_style', '__return_false');
  //move wpautop filter to AFTER shortcode is processed
  remove_filter( 'the_content', 'wpautop' );
  add_filter( 'the_content', 'wpautop' , 98 );
  add_filter( 'the_content', 'shortcode_unautop', 99 );

  global $wp_widget_factory;

  if (isset($wp_widget_factory->widgets['WP_Widget_Recent_Comments'])) {
    remove_action('wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style') );
  }

  if (class_exists('WPSEO_Frontend')) {
    remove_action('wp_head', 'rel_canonical');
    add_action('wp_head', 'rel_canonical');
  }
}
add_action('init', 'wedding_head_cleanup');

/**
 * Remove the WordPress version from RSS feeds
 */
add_filter('the_generator', '__return_false');

/**
 * Clean up language_attributes() used in <html> tag
 *
 * Remove dir="ltr"
 */
function wedding_language_attributes() {
  $attributes = array();

  if (is_rtl()) {
    $attributes[] = 'dir="rtl"';
  }
  $lang = get_bloginfo('language');

  if ($lang) {
    $attributes[] = "lang=\"$lang\"";
  }
  $output = implode(' ', $attributes);

  return $output;
}
add_filter('language_attributes', 'wedding_language_attributes');

/**
 * Clean up output of stylesheet <link> tags
 */
function wedding_clean_style_tag($input) {
  preg_match_all("!<link rel='stylesheet'\s?(id='[^']+')?\s+href='(.*)' type='text/css' media='(.*)' />!", $input, $matches);
  // Only display media if it is meaningful
  $media = $matches[3][0] !== '' && $matches[3][0] !== 'all' ? ' media="' . $matches[3][0] . '"' : '';
  return '<link rel="stylesheet" href="' . $matches[2][0] . '"' . $media . '>' . "\n";
}
add_filter('style_loader_tag', 'wedding_clean_style_tag');

/**
 * Clean up output of <script> tags
 */
function wedding_clean_script_tag($input) {
  $input = str_replace("type='text/javascript' ", '', $input);
  return str_replace("'", '"', $input);
}
add_filter('script_loader_tag', 'wedding_clean_script_tag');

/**
 * Wrap embedded media as suggested by Readability
 *
 * @link https://gist.github.com/965956
 * @link http://www.readability.com/publishers/guidelines#publisher
 */
function wedding_embed_wrap($cache) {
  return '<div class="entry-content-asset">' . $cache . '</div>';
}
add_filter('embed_oembed_html', 'wedding_embed_wrap');

/**
 * Remove unnecessary dashboard widgets
 *
 * @link http://www.deluxeblogtips.com/2011/01/remove-dashboard-widgets-in-wordpress.html
 */
function wedding_remove_dashboard_widgets() {
  remove_meta_box('dashboard_incoming_links', 'dashboard', 'normal');
  remove_meta_box('dashboard_plugins', 'dashboard', 'normal');
  remove_meta_box('dashboard_primary', 'dashboard', 'normal');
  remove_meta_box('dashboard_secondary', 'dashboard', 'normal');
}
add_action('admin_init', 'wedding_remove_dashboard_widgets');

/**
 * Remove unnecessary self-closing tags
 */
function wedding_remove_self_closing_tags($input) {
  return str_replace(' />', '>', $input);
}
add_filter('get_avatar', 'wedding_remove_self_closing_tags'); // <img />
add_filter('comment_id_fields', 'wedding_remove_self_closing_tags'); // <input />
add_filter('post_thumbnail_html', 'wedding_remove_self_closing_tags'); // <img />

/**
 * Intelligently remove extra P and BR tags around shortcodes that WordPress likes to add
 */
add_action( 'the_content', 'wedding_fix_shortcodes', 99 );

function wedding_fix_shortcodes($content){
	$array = array (
		'<p>[' => '[',
		']</p>' => ']',
		']<br />' => ']',
		']<br>' => ']',
		'<p><a class="btn' => '<a class="btn',
		'</a><br />' => '</a>',
	);

	$content = strtr($content, $array);
	return $content;
}

/**
 * Don't return the default description in the RSS feed if it hasn't been changed
 */
function wedding_remove_default_description($bloginfo) {
  $default_tagline = 'Just another WordPress site';
  return ($bloginfo === $default_tagline) ? '' : $bloginfo;
}
add_filter('get_bloginfo_rss', 'wedding_remove_default_description');

/**
 * Create retina-ready images
 */
function wedding_retina_support_create_images( $file, $width, $height, $crop = false ) {
    if ( $width || $height ) {
        $resized_file = wp_get_image_editor( $file );
        if ( ! is_wp_error( $resized_file ) ) {
            $filename = $resized_file->generate_filename( $width . 'x' . $height . '@2x' );

            $resized_file->resize( $width * 2, $height * 2, $crop );
            $resized_file->save( $filename );

            $info = $resized_file->get_size();

            return array(
                'file' => wp_basename( $filename ),
                'width' => $info['width'],
                'height' => $info['height'],
            );
        }
    }
    return false;
}

/**
 * Filter Uploaded File for Retina Images
 */
add_filter( 'wp_generate_attachment_metadata', 'wedding_retina_support_attachment_meta', 10, 2 );

function wedding_retina_support_attachment_meta( $metadata, $attachment_id ) {
  foreach ( $metadata as $key => $value ) {
      if ( is_array( $value ) ) {
          foreach ( $value as $image => $attr ) {
              if ( is_array( $attr ) )
                  mediplus_retina_support_create_images( get_attached_file( $attachment_id ), $attr['width'], $attr['height'], true );
          }
      }
  }

  return $metadata;
}

/**
 * Delete retina-ready images if Attachment Deleted
 */
add_filter( 'delete_attachment', 'wedding_delete_retina_support_images' );

function wedding_delete_retina_support_images( $attachment_id ) {
    $meta = wp_get_attachment_metadata( $attachment_id );
    $upload_dir = wp_upload_dir();
    $path = pathinfo( $meta['file'] );
    if( is_array($meta) ){
        foreach ( $meta as $key => $value ) {
            if ( 'sizes' === $key ) {
                foreach ( $value as $sizes => $size ) {
                    $original_filename = $upload_dir['basedir'] . '/' . $path['dirname'] . '/' . $size['file'];
                    $retina_filename = substr_replace( $original_filename, '@2x.', strrpos( $original_filename, '.' ), strlen( '.' ) );
                    if ( file_exists( $retina_filename ) )
                        unlink( $retina_filename );
                }
            }
        }
    }
}