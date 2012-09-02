<?php

/* ----------------------------------------------------------------------------
 * This file was automatically generated by SWIG (http://www.swig.org).
 * Version 2.0.4
 * 
 * This file is not intended to be easily readable and contains a number of 
 * coding conventions designed to improve portability and efficiency. Do not make
 * changes to this file unless you know what you are doing--modify the SWIG 
 * interface file instead. 
 * ----------------------------------------------------------------------------- */

// Try to load our extension if it's not already loaded.
/*if (!extension_loaded('hrit')) {
  if (strtolower(substr(PHP_OS, 0, 3)) === 'win') {
    if (!dl('php_hrit.dll')) return;
  } else {
    // PHP_SHLIB_SUFFIX gives 'dylib' on MacOS X but modules are 'so'.
    if (PHP_SHLIB_SUFFIX === 'dylib') {
      if (!dl('hrit.so')) return;
    } else {
      if (!dl('hrit.'.PHP_SHLIB_SUFFIX)) return;
    }
  }
}*/



/* PHP Proxy Classes */
class hrit_formatter {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_hrit_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __get($var) {
		if ($var === 'thisown') return swig_hrit_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	static function error_string() {
		if (func_num_args()) {
			hrit_formatter_error_string_set(func_get_arg(0));
			return;
		}

		return hrit_formatter_error_string_get();
	}

	static function formats() {
		if (func_num_args()) {
			hrit_formatter_formats_set(func_get_arg(0));
			return;
		}

		return hrit_formatter_formats_get();
	}

	static function num_formats() {
		if (func_num_args()) {
			hrit_formatter_num_formats_set(func_get_arg(0));
			return;
		}

		return hrit_formatter_num_formats_get();
	}

	function __construct($text,$len) {
		if (is_resource($text) && get_resource_type($text) === '_p_hrit_formatter') {
			$this->_cPtr=$text;
			return;
		}
		$this->_cPtr=new_hrit_formatter($text,$len);
	}

	function load_markup($markup,$len,$fmt) {
		return hrit_formatter_load_markup($this->_cPtr,$markup,$len,$fmt);
	}

	function get_html_len() {
		return hrit_formatter_get_html_len($this->_cPtr);
	}

	function load_css($css,$len) {
		return hrit_formatter_load_css($this->_cPtr,$css,$len);
	}

	function convert() {
		return hrit_formatter_convert($this->_cPtr);
	}

	static function hrit_list() {
		return hrit_formatter_hrit_list();
	}
}


?>
