<?php

define("IN_DEVELOPMENT", 0);

ini_set('display_errors', IN_DEVELOPMENT);
ini_set('display_startup_errors', IN_DEVELOPMENT);

echo "Displaying errors? ".ini_get("display_errors");
echo "<br/>";
echo "Displaying startup errors? ".ini_get("display_startup_errors");
echo "<br/>";
echo "<br/>";
echo "<br/>";
// Throw some errors and warnings

$notInitialized++;

callToNonExistingFunction();

?>