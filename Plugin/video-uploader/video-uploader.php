<?php

/**
 * Plugin Name:       Video Uploader
 * Description:       This is king of video uploading plugin
 * Version:           1.0
 * Author:            Dinusha Lakmal
 * Text Domain:       video uploader
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

register_activation_hook( __FILE__, 'my_plugin_create_db' );
register_deactivation_hook( __FILE__, 'my_plugin_remove_database' );

// install plugin
function my_plugin_create_db() {

	global $wpdb;
	$charset_collate = $wpdb->get_charset_collate();
	$table_name = $wpdb->prefix . 'video_uploader';

	$sql = "CREATE TABLE $table_name (
		id mediumint(9) NOT NULL AUTO_INCREMENT,
		topic varchar(255) NOT NULL,
		video_url varchar(255) NOT NULL,
		PRIMARY KEY id (id)
	) $charset_collate;";

	require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
	dbDelta( $sql );
}

// deactivate plugin
function my_plugin_remove_database() {

    global $wpdb;
    $table_name = $wpdb->prefix . 'video_uploader';
    $sql = "DROP TABLE IF EXISTS $table_name";
    $wpdb->query($sql);
    delete_option("my_plugin_db_version");
} 


class VideoUploader
{

    public function __construct()
    {

        // add assets
        add_action('wp_enqueue_scripts', array($this, 'load_assets'));

        // add shortcode
        add_shortcode('video-loader', array($this, 'load_shortcode'));

        // add backend admin menu
        add_action('admin_menu', array($this, 'video_uploader_admin_menu'));
    }

    public function load_assets()
    {

        wp_enqueue_style(
            'style',
            plugin_dir_url(__FILE__) . 'assets/css/style.css',
            array(),
            1,
            'all'
        );
    }

    function video_uploader_admin_menu()
    {
        add_menu_page(
            'Video Uploader',
            'Video Uploader',
            'manage_options',
            'video-uploader',
            array($this, 'video_uploader_admin_customiser'),
            'dashicons-video-alt3',
            200
        );
    }

    function video_uploader_admin_customiser()
    {
        global $wpdb;
        $table_name = $wpdb->prefix . 'video_uploader';

        if (!empty($_POST)) {
            $data = array(
                'topic' => $_POST['topic'],
                'video_url'    => $_POST['url']
            );
            //echo "<pre>"; print_r($data);
    
            $success=$wpdb->insert( $table_name, $data );
            if($success){
                echo 'data has been save' ; 
            }
        } else {
                echo "data not save";
            }

        $topic = get_option( 'video_uploader_topic', 'none' );
        $url = get_option( 'video_uploader_url', 'none' );
    ?>
    <div class="wrap">
        <h1>Video Uploader</h1>
        <p>As a shortcode you can use [video-loader] for video</p>

        <form method="POST">
            <div class="form-group">
                <label for="topic">Topic</label>
                <input type="text" class="form-control large-text" name="topic" id="topic"  placeholder="Enter topic here">
            </div>
            <br>
            <div class="form-group">
                <label for="url">Video URL</label>
                <input type="text" class="form-control large-text" name="url" id="url"  placeholder="Enter your video URL here">
            </div>
            <br>
            <button type="submit" name="submit" class="button button-primary">Submit</button>
        </form>
</div>
    <?php
    }

    public function load_shortcode()
    {

        global $wpdb;
        $table_name = $wpdb->prefix . 'video_uploader';
        $result = $wpdb->get_results ( "SELECT * FROM $table_name order by id desc limit 1" );
        foreach ( $result as $print ) {

    ?>
        <section class="video-content">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-sx-12">
                        <p><?php echo $print->topic; ?></p>
                        <iframe width="70%" height="400" src="<?php echo $print->video_url; ?>">
                        </iframe>
                    </div>
                </div>
            </div>
        </section>


<?php
        }
    }
}
new VideoUploader;
