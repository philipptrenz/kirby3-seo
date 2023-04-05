<?php

@include_once __DIR__ . '/vendor/autoload.php';

Kirby::plugin('philipptrenz/kirby3-seo', [

    'snippets' => [
      'seo/meta'    => __DIR__ . '/snippets/meta.php',
      'seo/favicon' => __DIR__ . '/snippets/favicon.php',
    ],

    'blueprints' => [
      'tabs/seo/contact'    => __DIR__ . '/blueprints/tabs/contact.yml',
      'tabs/seo/meta'       => __DIR__ . '/blueprints/tabs/meta.yml',
      'fields/seo/meta'     => __DIR__ . '/blueprints/fields/meta.yml',
    ],

    'controllers' => [
      'site' => require 'controllers/site.php',
    ]
]);