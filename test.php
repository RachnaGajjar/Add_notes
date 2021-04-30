<?php

echo "DB_URL: " . getenv('DATABASE_URL');

$conn = pg_connect(getenv('DATABASE_URL'));
$result = pg_query($conn, "select 1");
var_dump(pg_fetch_all($result));


?>
