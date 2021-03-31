<?php
/**
 * VW Transport Cargo: Block Patterns
 *
 * @package VW Transport Cargo
 * @since   1.0.0
 */

/**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {

	register_block_pattern_category(
		'vw-transport-cargo',
		array( 'label' => __( 'VW Transport Cargo', 'vw-transport-cargo' ) )
	);
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {
	register_block_pattern(
		'vw-transport-cargo/banner-section',
		array(
			'title'      => __( 'Slider Section', 'vw-transport-cargo' ),
			'categories' => array( 'vw-transport-cargo' ),
			'content'    => "<!-- wp:cover {\"url\":\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/slider.png\",\"id\":1280,\"dimRatio\":0,\"align\":\"full\",\"className\":\"sliderbox\"} -->\n<div class=\"wp-block-cover alignfull sliderbox\" style=\"background-image:url(" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/slider.png)\"><div class=\"wp-block-cover__inner-container\"><!-- wp:columns {\"align\":\"full\"} -->\n<div class=\"wp-block-columns alignfull\"><!-- wp:column {\"width\":\"25%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:25%\"></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"verticalAlignment\":\"center\",\"width\":\"50%\"} -->\n<div class=\"wp-block-column is-vertically-aligned-center\" style=\"flex-basis:50%\"><!-- wp:group {\"className\":\"sliderbox-content\"} -->\n<div class=\"wp-block-group sliderbox-content\"><div class=\"wp-block-group__inner-container\"><!-- wp:heading {\"textAlign\":\"center\",\"level\":1,\"style\":{\"typography\":{\"fontSize\":40}}} -->\n<h1 class=\"has-text-align-center\" style=\"font-size:40px\">LOREM IPSUM IS SIMPLY DUMMY</h1>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"align\":\"center\",\"className\":\"text-center\",\"style\":{\"typography\":{\"fontSize\":14}}} -->\n<p class=\"has-text-align-center text-center\" style=\"font-size:14px\">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons {\"align\":\"center\"} -->\n<div class=\"wp-block-buttons aligncenter\"><!-- wp:button {\"borderRadius\":30} -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link\" style=\"border-radius:30px\">READ MORE</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div></div>\n<!-- /wp:group --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"width\":\"25%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:25%\"></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div></div>\n<!-- /wp:cover -->",
		)
	);

	register_block_pattern(
		'vw-transport-cargo/services-section',
		array(
			'title'      => __( 'Services Section', 'vw-transport-cargo' ),
			'categories' => array( 'vw-transport-cargo' ),
			'content'    => "<!-- wp:group {\"align\":\"wide\",\"className\":\"transport-section mx-2\"} -->\n<div class=\"wp-block-group alignwide transport-section mx-2\"><div class=\"wp-block-group__inner-container\"><!-- wp:heading {\"textAlign\":\"left\",\"align\":\"full\",\"className\":\"mx-3 mt-5 mb-3\",\"style\":{\"typography\":{\"fontSize\":25},\"color\":{\"text\":\"#2c2c2d\"}}} -->\n<h2 class=\"alignfull has-text-align-left mx-3 mt-5 mb-3 has-text-color\" style=\"color:#2c2c2d;font-size:25px\">WELCOME TO TRANSPORT</h2>\n<!-- /wp:heading -->\n\n<!-- wp:columns {\"align\":\"full\",\"className\":\"mx-md-2\"} -->\n<div class=\"wp-block-columns alignfull mx-md-2\"><!-- wp:column {\"className\":\"about-img\"} -->\n<div class=\"wp-block-column about-img\"><!-- wp:image {\"align\":\"left\",\"id\":1367,\"sizeSlug\":\"large\",\"linkDestination\":\"none\"} -->\n<div class=\"wp-block-image\"><figure class=\"alignleft size-large\"><img src=\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/about-img.png\" alt=\"\" class=\"wp-image-1367\"/></figure></div>\n<!-- /wp:image --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"className\":\"transport-content mx-md-0 mx-4 my-md-0 my-4\"} -->\n<div class=\"wp-block-column transport-content mx-md-0 mx-4 my-md-0 my-4\"><!-- wp:columns {\"className\":\"mb-md-2 mb-lg-3\"} -->\n<div class=\"wp-block-columns mb-md-2 mb-lg-3\"><!-- wp:column {\"width\":\"33.33%\",\"className\":\"transport-content-img\"} -->\n<div class=\"wp-block-column transport-content-img\" style=\"flex-basis:33.33%\"><!-- wp:image {\"id\":1397,\"sizeSlug\":\"large\",\"linkDestination\":\"none\"} -->\n<figure class=\"wp-block-image size-large\"><img src=\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/about1.png\" alt=\"\" class=\"wp-image-1397\"/></figure>\n<!-- /wp:image --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"width\":\"66.66%\",\"className\":\"transport-text\"} -->\n<div class=\"wp-block-column transport-text\" style=\"flex-basis:66.66%\"><!-- wp:heading {\"textAlign\":\"left\",\"level\":3,\"className\":\"mb-lg-2 mb-md-1 mb-0\",\"fontSize\":\"medium\",\"style\":{\"color\":{\"text\":\"#2c2c2d\"}}} -->\n<h3 class=\"has-text-align-left mb-lg-2 mb-md-1 mb-0 has-text-color has-medium-font-size\" style=\"color:#2c2c2d\">LOREM IPSUM&nbsp;1</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"align\":\"left\",\"className\":\"mb-lg-2 mb-md-1 text-left\",\"style\":{\"typography\":{\"fontSize\":14},\"color\":{\"text\":\"#adabab\"}}} -->\n<p class=\"has-text-align-left mb-lg-2 mb-md-1 text-left has-text-color\" style=\"color:#adabab;font-size:14px\">Lorem Ipsum&nbsp;is simply dummy text of the printing</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->\n\n<!-- wp:columns {\"className\":\"mb-md-2 mb-lg-3\"} -->\n<div class=\"wp-block-columns mb-md-2 mb-lg-3\"><!-- wp:column {\"width\":\"33.33%\",\"className\":\"transport-content-img\"} -->\n<div class=\"wp-block-column transport-content-img\" style=\"flex-basis:33.33%\"><!-- wp:image {\"id\":1398,\"sizeSlug\":\"large\",\"linkDestination\":\"none\"} -->\n<figure class=\"wp-block-image size-large\"><img src=\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/about2.png\" alt=\"\" class=\"wp-image-1398\"/></figure>\n<!-- /wp:image --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"width\":\"66.66%\",\"className\":\"transport-text\"} -->\n<div class=\"wp-block-column transport-text\" style=\"flex-basis:66.66%\"><!-- wp:heading {\"textAlign\":\"left\",\"level\":3,\"className\":\"mb-lg-2 mb-md-1 mb-0\",\"fontSize\":\"medium\",\"style\":{\"color\":{\"text\":\"#2c2c2d\"}}} -->\n<h3 class=\"has-text-align-left mb-lg-2 mb-md-1 mb-0 has-text-color has-medium-font-size\" style=\"color:#2c2c2d\">LOREM IPSUM&nbsp;2</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"align\":\"left\",\"className\":\"mb-lg-2 mb-md-1 text-left\",\"style\":{\"typography\":{\"fontSize\":14},\"color\":{\"text\":\"#adabab\"}}} -->\n<p class=\"has-text-align-left mb-lg-2 mb-md-1 text-left has-text-color\" style=\"color:#adabab;font-size:14px\">Lorem Ipsum&nbsp;is simply dummy text of the printing</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->\n\n<!-- wp:columns {\"className\":\"mb-md-2 mb-lg-3\"} -->\n<div class=\"wp-block-columns mb-md-2 mb-lg-3\"><!-- wp:column {\"width\":\"33.33%\",\"className\":\"transport-content-img\"} -->\n<div class=\"wp-block-column transport-content-img\" style=\"flex-basis:33.33%\"><!-- wp:image {\"id\":1399,\"sizeSlug\":\"large\",\"linkDestination\":\"none\"} -->\n<figure class=\"wp-block-image size-large\"><img src=\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/about3.png\" alt=\"\" class=\"wp-image-1399\"/></figure>\n<!-- /wp:image --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"width\":\"66.66%\",\"className\":\"transport-text\"} -->\n<div class=\"wp-block-column transport-text\" style=\"flex-basis:66.66%\"><!-- wp:heading {\"textAlign\":\"left\",\"level\":3,\"className\":\"mb-lg-2 mb-md-1 mb-0\",\"fontSize\":\"medium\",\"style\":{\"color\":{\"text\":\"#2c2c2d\"}}} -->\n<h3 class=\"has-text-align-left mb-lg-2 mb-md-1 mb-0 has-text-color has-medium-font-size\" style=\"color:#2c2c2d\">LOREM IPSUM&nbsp;3</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"align\":\"left\",\"className\":\"mb-lg-2 mb-md-1 text-left\",\"style\":{\"typography\":{\"fontSize\":14},\"color\":{\"text\":\"#adabab\"}}} -->\n<p class=\"has-text-align-left mb-lg-2 mb-md-1 text-left has-text-color\" style=\"color:#adabab;font-size:14px\">Lorem Ipsum&nbsp;is simply dummy text of the printing</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div></div>\n<!-- /wp:group -->",
		)
	);
}