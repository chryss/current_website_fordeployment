<!DOCTYPE>
<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
<p>We start here.</p>
<?php 
if ( !isset($_SERVER['HTACCESS']) ) { 
?>
	<p>HTACCESS variable not set.</p> 
<?php
} else {
?>
	<p>HTACCESS variable is set.</p>
<?php
}
?>
</body>
</html>
