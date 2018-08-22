<?php

require __DIR__ . '/../../../vendor/autoload.php';

$parameter = include(__DIR__.'/config.php');

// load indigo\main
$indigo = new indigo\main($parameter);

echo $indigo->cron_run();
