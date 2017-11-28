<?php

require 'vendor/autoload.php';

require 'core/bootstrap.php';

use App\Core\Router;
use App\Core\Request;

//this will return the right controller for the each page
Router::load('app/routes.php')->direct(Request::uri(), Request::method());
