<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*!
* HybridAuth
* http://hybridauth.sourceforge.net | https://github.com/hybridauth/hybridauth
*  (c) 2009-2011 HybridAuth authors | hybridauth.sourceforge.net/licenses.html
*/

// ----------------------------------------------------------------------------------------
//	HybridAuth Config file: http://hybridauth.sourceforge.net/userguide/Configuration.html
// ----------------------------------------------------------------------------------------

$config =
	array(
		// set on "base_url" the relative url that point to HybridAuth Endpoint
		// IMPORTANT: If the "index.php" is removed from the URL (http://codeigniter.com/user_guide/general/urls.html) the
		// "/index.php/" part __MUST__ be prepended to the base_url.
		'base_url' => '/hauth/endpoint',

		'providers' => array (
			// openid providers
			'OpenID' => array (
				'enabled' => TRUE
			),

			'Yahoo' => array (
				'enabled' => TRUE
			),

			'AOL'  => array (
				'enabled' => TRUE
			),

			'Google' => array (
				'enabled' => TRUE,
				'keys'    => array ( 'id' => '', 'secret' => '' ),
				'scope'   => ''
			),

			'Facebook' => array (
				'enabled' => TRUE,
				'keys'    => array ( 'id' => '', 'secret' => '' ),

				// A comma-separated list of permissions you want to request from the user. See the Facebook docs for a full list of available permissions: http://developers.facebook.com/docs/reference/api/permissions.
				'scope'   => '',

				// The display context to show the authentication page. Options are: page, popup, iframe, touch and wap. Read the Facebook docs for more details: http://developers.facebook.com/docs/reference/dialogs#display. Default: page
				'display' => ''
			),

			'Twitter' => array (
				'enabled' => TRUE,
				'keys'    => array ( 'key' => '', 'secret' => '' )
			),

			// windows live
			'Live' => array (
				'enabled' => TRUE,
				'keys'    => array ( 'id' => '', 'secret' => '' )
			),

			'MySpace' => array (
				'enabled' => TRUE,
				'keys'    => array ( 'key' => '', 'secret' => '' )
			),

			'LinkedIn' => array (
				'enabled' => TRUE,
				'keys'    => array ( 'key' => '', 'secret' => '' )
			),

			'Foursquare' => array (
				'enabled' => TRUE,
				'keys'    => array ( 'id' => '', 'secret' => '' )
			),
		),

		// if you want to enable logging, set 'debug_mode' to TRUE then provide a writable file by the web server on "debug_file"
		'debug_mode' => (ENVIRONMENT == 'development'),

		'debug_file' => APPPATH.'/logs/hybridauth.log',
	);
