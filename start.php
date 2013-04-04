<?php

	function custom_js_init(){
		elgg_register_simplecache_view('js/custom_js/site');
	}
	
	function custom_js_pagesetup(){
		if(!elgg_in_context("admin")){
			$custom_js = elgg_get_simplecache_url("js", "custom_js/site");
			elgg_register_js("custom_js", $custom_js);
				
			elgg_load_js("custom_js");
		}
	}
	
	function custom_js_invalidate_cache($hook, $type, $return, $params){
		if(isset($params["plugin"]) && ($params["plugin"]->getID() == "custom_js")){
			elgg_invalidate_simplecache();
		}
	}
	
	// register default elgg events
	elgg_register_event_handler("init", "system", "custom_js_init");
	elgg_register_event_handler("pagesetup", "system", "custom_js_pagesetup");
	
	elgg_register_plugin_hook_handler("setting", "plugin", "custom_js_invalidate_cache");