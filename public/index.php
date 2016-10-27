<?php

define(VERSION, 'local');

define(THEME, 'www');

define(APP_DIR, dirname(__FILE__) . '/core/' . VERSION);
define(THEME_DIR, dirname(__FILE__) . '/theme/' . VERSION . '/' . THEME);
define(CONFIG_DIR, dirname(__FILE__) . '/config/' . VERSION);

requiere_once (APP_DIR . '/main.php');







