<?php
/**
* Plugin Name: America Is Easy Compound Calculator Widget 
* Description: A Widget That Calculates Compounding Interest
* Version: 1.0
* Author: Xanomaly
**/

//Exit if accessed Directly
if(!defined('ABSPATH'))
{
	exit;	
}

//Load Class
require_once(plugin_dir_path(__FILE__) . '/include/compound-calculator-class.php');
//Load Scripts
require_once(plugin_dir_path(__FILE__) . '/include/compound-calculator-scripts.php');
//Load Calculators
require_once(plugin_dir_path(__FILE__) . '/include/compound-calculator-calculator.php');

function register_cc()
{
	register_widget('Compound_Calculator');
}
add_action('widgets_init', 'register_cc');