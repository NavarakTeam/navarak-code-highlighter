<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Navarak_Code_Highlighter
 * @subpackage Navarak_Code_Highlighter/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Navarak_Code_Highlighter
 * @subpackage Navarak_Code_Highlighter/admin
 * @author     Your Name <email@example.com>
 */
class Navarak_Code_Highlighter_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $navarak_code_highlighter    The ID of this plugin.
	 */
	private $navarak_code_highlighter;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $navarak_code_highlighter       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $navarak_code_highlighter, $version ) {

		$this->navarak_code_highlighter = $navarak_code_highlighter;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Navarak_Code_Highlighter_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Navarak_Code_Highlighter_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->navarak_code_highlighter, plugin_dir_url( __FILE__ ) . 'css/navarak-code-highlighter-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Navarak_Code_Highlighter_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Navarak_Code_Highlighter_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->navarak_code_highlighter, plugin_dir_url( __FILE__ ) . 'js/navarak-code-highlighter-admin.js', array( 'jquery' ), $this->version, false );

	}

}
