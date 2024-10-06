<?php
define('THEME_DIR_URI', get_template_directory_uri());
define('THEME_DIR', get_template_directory());

class Tutorial_Theme{
    private static $instance = null;

    //this function starts everything
    private function __construct(){
        include THEME_DIR . '/includes/categories.php';
        // action hook
        add_action('wp_enqueue_scripts',[$this, 'enqueue_styles']);
    }
    public function enqueue_styles(){
        wp_enqueue_style('tutorial-theme', get_stylesheet_uri());
    }
    public static function get_instance(){
        if(null == self::$instance){
            self::$instance = new self;
        }
        return self::$instance;
    }
}
Tutorial_Theme::get_instance();
