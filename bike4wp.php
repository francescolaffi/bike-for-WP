<?php
/*
Plugin Name: Bike for WP
Plugin URI: https://github.com/francescolaffi/bike-for-WP
Description: Bike (https://github.com/jagermesh/bike), a lightweight MySQL admin panel in wordpress backend, only for admins
Version: 0.1
Author: Francesco Laffi
Author URI: http://flweb.it
License: GPL2
*/

/*
 * File changed in bike:
 *  bike/index.php changed
 *  bike/config.php changed
 */

new Bike4WP;

class Bike4WP
{
    const slug = 'bike4wp'; 
    
    private $settings = array();
    
    public function __construct()
    {
        add_action('admin_menu', array($this, 'admin_menu'));
        
        if (defined('LoadingBike') && LoadingBike) {
            add_action('init', array($this, 'loadBike'));
        }
    }
    
    public function admin_menu()
    {
        add_management_page('Bike', 'Bike MySQL', 'install_plugins', self::slug, array($this, 'admin_page'));
    }
    
    public function admin_page()
    {
        if (!current_user_can('install_plugins')) {
            wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
        }
        echo '<iframe src="'.plugins_url('/bike/', __FILE__).'" width="100%" height="100%"></iframe>';
    }
    
    public function loadBike()
    {
        if (!current_user_can('install_plugins')) {
            wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
        }
        
        bike4wp_load_bike();
    }
    
    public static function activate()
    {
        
    }
    
    public static function deactivate()
    {
        
    }
}