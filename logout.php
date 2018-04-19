<?php

require_once("inc/config.php");
require_once("inc/functions.php");

session_start();
session_destroy();
session_write_close();

redirect(ROOT);


