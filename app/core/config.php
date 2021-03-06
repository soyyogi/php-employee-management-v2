<?php

//Base Path
define("BASE_PATH", dirname(__FILE__, 3));

//CONTROLLERS
define("CONTROLLERS", BASE_PATH . '/app/controllers/');

//CORE
define("CORE", BASE_PATH . '/app/core/');

//VIEWS
define("VIEWS", BASE_PATH . '/app/views/');

//MODELS
define("MODELS", BASE_PATH . '/app/models/');

// Set database variables
define('DB_HOST','localhost');
define('DB_USER','yogi');
define('DB_PWD','archdb');
define('DB_NAME','ems');