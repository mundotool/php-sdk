<?php

/* Go to My Apps dashboard: https://developers.mercadolibre.com.mx/apps/home, and get the information you need in order to the following enviroment variables */

/* Your Application Id */
$appId = getenv('3457225608424475');

/* Your Secret Key */
$secretKey = getenv('Dq4T8mrg6NWmtxoednuS7FDXSqNPQIE7');

/* The Redirect url */
$redirectURI = getenv('https://www.mercadolibre.com.mx/');

/* The site id of the country where your application will work.
If you don't know your site_id go to our sites resources: https://api.mercadolibre.com/sites  */
$siteId = 'MLM';



//////////////////////////////////////////////////////////////////////////////////////////////////////
//If you don't use Heroku use the next config

// $appId = 'App_ID';

// $secretKey = 'Secret_Key';

// $redirectURI = 'Redirect_URI';

// $siteId = 'MLM';
