<?php
/*
Plugin Name: Caption Fixer
Plugin URI: http://danrodgers.co.uk/captionfixer/
Description: Customise (or remove) the margin WordPress automatically applies to captions.
Author: Dan Rodgers
Version: 0.1
Author URI: http://danrodgers.co.uk
*/

add_action('admin_menu', 'captionfixer_menu');

function captionfixer_menu() {
	add_options_page('Caption Fixer Settings', 'Caption Fixer', 'manage_options', 'captionfixer', 'captionfixer_settings');
}

function captionfixer_settings() {
	if (!current_user_can('manage_options'))  {
		wp_die( __('You do not have sufficient permissions to access this page.') );
	}
	
	$capMargin = get_option('captionfixer_margin');
	
	echo '<div class="wrap">';
	echo '<h2>Caption Fixer Settings</h2>';
	echo '<p>Caption Fixer is a simple plugin to enable you to customise the margin on caption, and allow you to override the default wordpress behavior of simply adding 10px</p>';
	
	echo '</div>';
}

class captionfixer{
    
	public $capMargin = 0;

    public function __construct()
	{
        add_filter('img_caption_shortcode', array(&$this, 'capfix'), 10, 3);
    }
    
	public function capfix($x=null, $attr, $content)
	{
        extract(shortcode_atts(array(
			'id'      => '',
			'align'   => 'alignnone',
			'width'   => '',
            'caption' => ''), $attr));

        if(1 > (int) $width || empty($caption))
		{
            return $content;
        }

        if($id)
		{
			$id = 'id="'.$id.'"';
		}

    	return '<div '.$id.' class="wp-caption '.$align.'" style="width: '.((int) $width + $this->capMargin).'px">'.$content.'<p class="wp-caption-text">'.$caption.'</p></div>';
    }
}
$captionfixer = new captionfixer();

?>