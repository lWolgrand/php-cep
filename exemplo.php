<?php

require_once "vendor/autoload.php";

use \Wolgrand\PhpCep\Search;

$busca = new Search;

$result = $busca->getAdressFromZipcode('20911300');

print_r($result);