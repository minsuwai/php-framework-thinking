<?php

use core\App;

require "core/functions.php";
App::bind("config", require "config.php");

// $config = require "config.php";
// require "core/Router.php";
// require "core/Request.php";
// require "core/functions.php";
// require "core/database/Connection.php";
// require "core/database/QueryBuilder.php";

// $query = new QueryBuilder(Connection::make($config["database"]));

App::bind("database", new QueryBuilder(Connection::make(App::get("config")["database"])));
