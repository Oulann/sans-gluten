<?php
namespace My;
require "vendor/autoload.php";

use \My\controller\Router;

$index = new Router;
$index->run();