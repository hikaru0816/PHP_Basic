<?php

require_once('intax.php');
$price = 150;
$price_tax = intax($price);
echo $price_tax;
