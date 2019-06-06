<?php
    define('URL_SITIO', 'www.flandership.com.mx');
    require 'paypal/autoload.php';
    $apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'AVJDN4VLgVPeINvmVrXf11jHktutfpAd8KuGp10uJfPy8MxZYax6nmSfWk4fzK3-c-HftoZmAJhQLMS_',     // ClientID
        'EPmPXqWHwV0f1Hb5X0kJuU7-yI-kt_SXs5Cv3HVwl007hfe83xIg66He3WuqwekQz1dT9cZL8LCtRVfc'      // ClientSecret
    )
);
?>