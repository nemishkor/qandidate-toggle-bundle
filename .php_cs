<?php

$config = require 'vendor/broadway/coding-standard/.php_cs.dist';

$config->setFinder(
    \PhpCsFixer\Finder::create()
        ->in(__DIR__)
        ->exclude([
            'vendor',
            'var',
        ])
);

return $config;
