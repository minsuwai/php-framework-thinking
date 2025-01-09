<?php

$config = require "config.php";
require "core/functions.php";
require "core/database/Connection.php";
require "core/database/QueryBuilder.php";

$query = new QueryBuilder(Connection::make($config["database"]));
