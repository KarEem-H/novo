<?php
    require_once "stripe-php-master/init.php";

    $stripeDetails = array(
        "secretKey" => "sk_test_51IxD08ARRkOUEdcXtrRUO96aheWqOCpYuEefNf73T9ndUKhjO25GjwM2jsunHaetNBsGSS74Lwr0sqKJFRt7IPZd00btbDpMDb",
        "publishableKey" => "pk_test_51IxD08ARRkOUEdcX8uMS59SPc2PouJGZChn8tzqKywfUrvW1kGA4v04LQOCqrhcGSuOLY9sslfCzITFSOJXT8e6t00ngS6JsdW"
    );

    \Stripe\Stripe::setApiKey($stripeDetails["secretKey"]);



?>


<!-- pk_live_51IxD08ARRkOUEdcXo5fTtBPjKPnJyLgEQyWFlgMMPzBWuUiBAiQA75ome0CXTQ5vpwAR7Hev2OYVlskqy6WC8vED00O9RMZP03

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 -->