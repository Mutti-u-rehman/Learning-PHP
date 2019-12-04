<?php

$app = [];


require 'functions.php';

$app['config'] = require 'config.php';
require 'core/Router.php';
require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';
require 'core/database/Request.php';
require 'Task.php';

$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database']));
