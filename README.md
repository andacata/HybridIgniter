#HybridIgniter

A simple HybridAuth - CodeIgniter integration.

##Versions
- HybridAuth 2.0.11
- CodeIgniter 2.1.0

##Installation
1. Drop the provided files into the CodeIgniter project
2. Create a writable file called hybridauth.log inside the folder application/logs
3. Configure the providers inside the application/config/hybridauthlib.php file
4. Modify the controller example supplied (application/controller/hauth.php) to fit your needs

##How to use
The only thing you need is to put as many links as you need pointing to "http://&lt;yourdomain>/index.php/hauth/login/&lt;provider>", ex.:

	<a href="http://www.example.com/index.php/hauth/login/Twitter">Log in with Twitter</a><br />
	<a href="http://www.example.com/index.php/hauth/login/Facebook">Log in with Facebook</a><br />
	<a href="http://www.example.com/index.php/hauth/login/LinkedIn">Log in with LinkedIn</a>
