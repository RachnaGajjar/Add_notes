<?php

echo "DB_URL: " . getenv('DATABASE_URL');

$conn = pg_connect(getenv('DATABASE_URL'));
$result = pg_query($conn, "select * from pg_stat_activity");
var_dump(pg_fetch_all($result));


?>
