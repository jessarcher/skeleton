<?php

use function Laravel\Prompts\info;
use function Laravel\Prompts\text;

require_once __DIR__ . '/vendor/autoload.php';

info('post-package-install');

var_dump(text('Post package install'));
