<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    'app_catalogue_listeproduit' => [[], ['_controller' => 'App\\Controller\\CatalogueController::listeProduit'], [], [['text', '/']], [], []],
    'app_catalogue_show' => [['slug'], ['_controller' => 'App\\Controller\\CatalogueController::show'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/product']], [], []],
];
