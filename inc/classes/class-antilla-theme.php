<?php

/** 
* Bootstraps the theme.
*
* @package Antilla
*
*/

namespace ANTILLA_THEME\Inc;

use ANTILLA_THEME\Inc\Traits\Singleton;

class ANTILLA_THEME{
    use Singleton;
    
    protected function __construct(){
        
        //load class.
        $this->set_hooks();
    }
    
    protected function set_hooks(){
        //actions and filters
    }
}
