<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://www.facebook.com/llxx.lord.xxll
 * @since      1.0.0
 *
 * @package    Easycubes_Order_Online
 * @subpackage Easycubes_Order_Online/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Easycubes_Order_Online
 * @subpackage Easycubes_Order_Online/public
 * @author     Arifuzzaman Pranto <zamanpranto@gmail.com>
 */
class Easycubes_Order_Online_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Easycubes_Order_Online_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Easycubes_Order_Online_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/easycubes-order-online-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Easycubes_Order_Online_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Easycubes_Order_Online_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/easycubes-order-online-public.js', array( 'jquery' ), $this->version, false );

	}

	public function define_page_template($page_template)
	{
		$post = get_post();
		$app_page_id = get_option("easycubes_order_page");
		if (!empty($app_page_id))
		{
			if ($app_page_id == $post->ID)
			{
				$new_page_template = EASYCUBES_ORDER_ONLINE_PLUGIN_DIR . "/public/partials/easycubes-order-online-public-display.php";
				if(!empty($new_page_template))
					return $new_page_template;
			}
		}

		return $page_template;
	}

}
