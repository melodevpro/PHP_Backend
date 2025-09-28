
<?php
// conectar MongoDB con PHP
$client = new MongoDB\Client("mongodb://localhost:27017");
$db = $client->miBaseDeDatos("database nosql");
?>

