<?php

require_once 'config.php';
$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die("connect filed");
mysql_select_db(DB_NAME, $link);
mysql_query("SET NAMES cp1251");
