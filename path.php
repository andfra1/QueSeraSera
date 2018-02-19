<?php
define("ROOT", dirname(__FILE__) ."/");
define("URL", ($_SERVER["SERVER_NAME"] == "localhost")
   ? "http://localhost/QueSeraSera/"
   : "http://"
);
