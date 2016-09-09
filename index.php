<!DOCTYPE html>
<html>
<head>
	<title>my first heroku test</title>
</head>
<body>
<table border="1">
<tr>
	<td>Elements</td>
</tr>
<?php
   $my_env_var = getenv('SANJAY');
   for($i=0;$i<=10;$i++)
   {
      echo '<tr><td>'. $i. $my_env_var .'</td></tr>';
   }
?>
</table>
</body>
</html>
