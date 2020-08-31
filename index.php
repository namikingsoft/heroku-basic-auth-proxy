<?php
   if (!isset($_SERVER['PHP_AUTH_USER']) || !($_SERVER['PHP_AUTH_USER'] == $_SERVER['BASIC_AUTH_USER'] && $_SERVER['PHP_AUTH_PW'] == $_SERVER['BASIC_AUTH_PASS'] )) {
      header('WWW-Authenticate: Basic realm="Protected Area"');
      header('HTTP/1.0 401 Unauthorized');
      echo 'Not allowed to access.';
      exit;
   }
   echo file_get_contents($_GET['url']);
?>
