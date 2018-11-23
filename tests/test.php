<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Kazin8\KlickTipp\Connector;

$connector = new Connector();

echo $connector->get_last_error() | "All ok!";