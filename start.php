<?php

	function custom_js_pagesetup(){
		if(!elgg_in_context("admin")){
			$custom_js = elgg_get_simplecache_url("js", "custom_js/site");
			elgg_register_js("custom_js", $custom_js);
			elgg_load_js("custom_js");
		}
	}
	
	// register default elgg events
	elgg_register_event_handler("pagesetup", "system", "custom_js_pagesetup");