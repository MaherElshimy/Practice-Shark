<?php

include "database/db.php";

use \database\db;
use \database\db as beboo;

// $db = new \database\db() ;
// $db = new db() ;
$db = new beboo() ;
$db->test();