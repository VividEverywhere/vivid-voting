<?php
    /**
     * The plugin bootstrap file
     *
     * @link              https://vivideverywhere.co.uk/
     * @since             1.0.000
     * @package           Vivid Voting
     *
     * @wordpress-plugin
     * Plugin Name:       Vivid Voting
     * Plugin URI:        https://plugins.vivideverywhere.co.uk/voting/
     * Description:       Custom voting system for WordPress
     * Version:           1.0.002
     * Author:            Vivid Everywhere
     * Author URI:        https://vivideverywhere.co.uk/
     * License:           MIT
     * License URI:       https://opensource.org/licenses/MIT
     * Text Domain:       vivid-voting
     * Domain Path:       /languages
     */

// If this file is called directly, abort.
    if (!defined('WPINC')) {
        die;
    }

    require plugin_dir_path(__FILE__) . 'vendor/autoload.php';
    new VividVoting\Updater();
