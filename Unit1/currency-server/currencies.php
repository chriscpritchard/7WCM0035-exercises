<?php
/**
 * Created by PhpStorm.
 * User: chris
 * Date: 2018-06-27
 * Time: 03:55
 */

include_once 'apikey.php';

use OneForge\ForexQuotes\ForexDataClient;
$client = new ForexDataClient($apikey);

$symbols = $client->getSymbols();

