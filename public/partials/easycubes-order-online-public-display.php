<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://www.facebook.com/llxx.lord.xxll
 * @since      1.0.0
 *
 * @package    Easycubes_Order_Online
 * @subpackage Easycubes_Order_Online/public/partials
 */
?>


<?php
// Variables
$bodyClasses = " order-page";
$GLOBALS['pluginuri'] = EASYCUBES_ORDER_ONLINE_PLUGIN_URL . "/public/";

// Partials
include('header.php');
include('order-page.public.php');
include('footer.php');

?>
