<?php
echo 'Hello ';

mysql_connect ( '127.0.0.1', 'root', 'root' ) || die ( 'damn' );
mssql_connect ( 'localhost:1433', 'SA', 'RootRoot5@' ) || die ( 'damn' );
// DIE AND KILL
// die(); // kill the rest of the PHP code;
// die("Page dies here");
// exit(); // exit will do the same thing
// exit("Page exits here");

echo ' MySQL and MSSQL Connected';

?>