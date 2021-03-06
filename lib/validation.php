<?php 

class PL_Validate {
	
	public static function attributes ($args, $defaults) {
		$merged_args = wp_parse_args($args, $defaults);
		foreach ($merged_args as $key => $value) {
			if( is_array($value) && isset($defaults[$key]) ) {
				$merged_args[$key] = wp_parse_args($value, $defaults[$key]);
			}
		}
		return $merged_args;
	}

	// build request, respect incoming args, populate defaults as passed via configs
	public static function request ($args, $config) {
 		// error_log(var_export($args, true));
 		foreach ($config as $arg => $value) {
 			if( !isset($args[$arg]) && is_array($value) && isset($value['default']) && !empty($value['default'])) {
 				$args[$arg] = $value['default'];
 			}
 		}
 		// Needs to be refactored. Strips out empty values from long, nested, params
 		foreach ($args as $arg => $value) {
 			if ($value == '' || $value == 'false') {
 				unset($args[$arg]);
 			} elseif (is_array($value)) {
 				foreach ($value as $k => $v) {
 					if ($v == '' || $v == 'false') {
 						unset($args[$arg][$k]);
 					}
 				}
 			}
 		}
		return $args;
	}
	
//ends class
}