<?php
/*
 *  Plugin Name:	WP Facebook Embedded Posts
 *  Plugin URI:		http://htaccess24.de/plugins/31/wp-facebook-embedded-posts-plugin/
 *  Description:	This Plugin gives you the opportunity to embed Facebook Posts with one easy shortcode on your WordPress Blog.
 *  Author:			htaccess24
 *  Author URI:		http://www.htaccess24.de/
 *  Version:		1.0.2
 *	License:		GPLv2 or later
 *	License URI:	http://www.gnu.org/licenses/gpl-2.0.html
 */
if(function_exists('fb_embedded_post') == false){
	function fb_embedded_post($atts){
		extract(shortcode_atts(array(
			'href' => NULL
		), $atts));

		if($href == NULL || empty($href)){
			return '<div style="color:red;">FB Post: Shortcode parameter "href" is required</div>';
		} elseif(strpos($href, 'facebook.com') == false){
			return '<div style="color:red;">FB Post: Shortcode parameter "href" must contain a valid Facebook URL</div>';
		} else {
			if (!is_feed()) {
				return '
					<div id="fb-root"></div>
					<script>
						(function(d, s, id){
							var js, fjs = d.getElementsByTagName(s)[0];
							if (d.getElementById(id)) return;
							js = d.createElement(s); js.id = id;
							js.src = "//connect.facebook.net/'. str_replace('-', '_', get_bloginfo('language')) .'/sdk.js#xfbml=1&version=v2.2";
							fjs.parentNode.insertBefore(js, fjs);
						}(document, "script", "facebook-jssdk"));
					</script>
					<div class="fb-post" data-href="'. $href .'"></div>
				';
			}
		}
	}
}

if(function_exists('add_shortcode') == true && function_exists('shortcode_exists') == true){
	if(shortcode_exists('fb-post') == true){
		if(function_exists('remove_shortcode') == true){
			remove_shortcode('fb-post');
			add_shortcode('fb-post', 'fb_embedded_post');
		}
	} else {
		add_shortcode('fb-post', 'fb_embedded_post');
	}
}