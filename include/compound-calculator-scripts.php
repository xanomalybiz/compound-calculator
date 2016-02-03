<?php
//addscripts
	function cc_load_scripts()
	{
		wp_enqueue_style('cc-main-style', plugins_url() . '/compound-calculator/css/style.css');
		wp_enqueue_script('cc-main-script', plugins_url() . '/compound-calculator/js/main.js', array('jquery'));
	}
	add_action('wp_enqueue_scripts', 'cc_load_scripts');