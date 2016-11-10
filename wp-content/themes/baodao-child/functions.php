<?php
/*
* Function for Baodao Child Theme
* Author: Fred Zhou
* Version: 1.0
*/
 
/*
	Footer Widget (footer layout)
*/
class Footer_Layout extends WP_Widget {
	public function __construct() {
		$widget_ops = array( 
			'classname' => 'footer_layout',
			'description' => 'This Widget is for footer layout',
		);
		parent::__construct( 'footer_layout', 'Footer Layout', $widget_ops );
	}

	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
		include_once("templates/footer.php");
	}
}

add_action( 'widgets_init', function(){
	register_widget( 'Footer_Layout' );
});