<?php
define('THEME_DIR_URI', get_template_directory_uri());
define('THEME_DIR', get_template_directory());

class Tutorial_Theme{
    private static $instance = null;

    //this function 
    private function __construct(){
        
    }
    public static function get_instance(){
        if(null == self::$instance){
            self::$instance = new self;
        }
        return self::$instance;
    }
}
Tutorial_Theme::get_instance();
