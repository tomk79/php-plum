<?php

require __DIR__ . '/../../../vendor/autoload.php';

$parameter = include(__DIR__.'/config.php');

// load indigo\ajax
$indigo = new indigo\ajax($parameter);

echo $indigo->get_commit_hash();
