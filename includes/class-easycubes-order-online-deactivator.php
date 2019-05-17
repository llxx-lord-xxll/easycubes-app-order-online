<?php

/**
 * Fired during plugin deactivation
 *
 * @link       https://www.facebook.com/llxx.lord.xxll
 * @since      1.0.0
 *
 * @package    Easycubes_Order_Online
 * @subpackage Easycubes_Order_Online/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    Easycubes_Order_Online
 * @subpackage Easycubes_Order_Online/includes
 * @author     Arifuzzaman Pranto <zamanpranto@gmail.com>
 */
class Easycubes_Order_Online_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {
		self::delete_public_page();
	}

	public static function delete_public_page()
	{
		$page_id = get_option("easycubes_order_page");
		wp_delete_post($page_id,true);
	}

}
