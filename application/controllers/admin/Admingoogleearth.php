<?php 

/**
 * MapIgniter
 *
 * An open source GeoCMS application
 *
 * @package		MapIgniter
 * @author		Marco Afonso
 * @copyright	Copyright (c) 2012, Marco Afonso
 * @license		dual license, one of two: Apache v2 or GPL
 * @link		http://mapigniter.com/
 * @since		Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admingoogleearth extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }
    
    public function index()
    {
        
        // Load main content
        $content = $this->load->view('admin/googleearth', null, TRUE);
        
        // Load layout
        $this->loadLayout('admin', $content);

    }
    
}