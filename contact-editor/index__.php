<?php

extract(Plugin::state('contact-editor'));

$c = [
    'css' => [],
    'js' => isset($editors[$editor]) ? $editors[$editor] : []
];

require __DIR__ . DS . 'lot' . DS . 'worker' . DS . $editor . '.php';