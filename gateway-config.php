<?php 
// PayPal configuration
// define('PAYPAL_ID', 'sb-vm3jd26260890@business.example.com'); //Business Email
define('PAYPAL_ID', 'contact@kickerml.shop'); //Business Email
$mode='live'; // test or live 
// $mode='test';
define('PAYPAL_RETURN_URL', 'https://www.kickerml.shop/success.php');
define('PAYPAL_CANCEL_URL', 'https://www.kickerml.shop/cancel.php');
define('PAYPAL_NOTIFY_URL', 'https://www.kickerml.shop/ipn.php');
define('PAYPAL_CURRENCY', 'EUR');
// Change not required
if($mode=='live')
{
define('PAYPAL_URL','https://www.paypal.com/cgi-bin/webscr');
}
else
{
define('PAYPAL_URL', 'https://www.sandbox.paypal.com/cgi-bin/webscr');	
}
?>