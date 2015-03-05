<?php
/**
 * @author Michael Hébert <mikey@webhockeyleague.ca>
 * @copyright &copy; 2012
 * @desc settings for the whole site
 */

ob_start('ob_gzhandler');

error_reporting(E_ALL ^E_NOTICE);

$GLOBALS['settings'] = array();
?>