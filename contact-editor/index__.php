<?php

extract(Plugin::state('contact-editor'));

Config::set('page.o.js.CONTACT', isset($editors[$editor]) ? $editors[$editor] : []);

require __DIR__ . DS . 'lot' . DS . 'worker' . DS . $editor . '.php';