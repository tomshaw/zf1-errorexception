<?php
/**
 * Zend Framework and MongoDB Testing
 *
 * LICENSE: http://www.tomshaw.info/license
 *
 * @category   Tom Shaw
 * @package    Zend Framework Error Handler
 * @copyright  Copyright (c) 2011 Tom Shaw. (http://www.tomshaw.info)
 * @license    http://www.tomshaw.info/license   BSD License
 * @version    $Id:$
 * @since      File available since Release 1.0
 */
/**
 * Application initialization plugin
 * 
 * @uses Zend_Controller_Plugin_Abstract
 */
class App_Plugin_ErrorHandler extends Zend_Controller_Plugin_Abstract
{
    
	/**
	 * Enter description here...
	 *
	 */
    public function __construct()
    {
		set_error_handler(array($this,'handler'));
    }
    
    /**
     * Enter description here...
     *
     * @param unknown_type $errno
     * @param unknown_type $errstr
     */
	public function handler($errno, $errstr) 
	{
	    if (error_reporting()) {
			throw new Zend_Exception($errstr,$errno);
	    }
	}
}