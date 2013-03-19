#HybridIgniter

A simple [HybridAuth](http://hybridauth.sourceforge.net/) - [CodeIgniter](http://ellislab.com/codeigniter) integration.

##Versions
- HybridAuth 2.1.2
- CodeIgniter 2.1.3

##Installation
1. Drop the provided files into the CodeIgniter project
2. Configure the providers inside the application/config/hybridauthlib.php file
3. Modify the controller example supplied (application/controller/hauth.php) to fit your needs

##How to use
The only thing you need is to put as many links as you need pointing to "http://&lt;yourdomain>/index.php/hauth/login/&lt;provider>", ex.:

	<a href="http://www.example.com/index.php/hauth/login/Twitter">Log in with Twitter</a><br />
	<a href="http://www.example.com/index.php/hauth/login/Facebook">Log in with Facebook</a><br />
	<a href="http://www.example.com/index.php/hauth/login/LinkedIn">Log in with LinkedIn</a>

Also, you can visit "http://&lt;yourdomain>/index.php/hauth" to see some examples.

If you need more complete examples, you can visit the Dovy's fork: https://github.com/dovy/HybridIgniter

