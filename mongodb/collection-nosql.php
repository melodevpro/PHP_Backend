//crear collecion y agregarle documentos
<?php
$collection = $db->miColeccion("collection nosql");
$document = [
    "name" => "John Doe",
    "age" => "35",
    "email" => "John@linkedin.com"
];
$collection->insertOne($document);
?>

// como recuperar documentos de una coleccion
<?php
$cursor = $collection->find();
foreach ($cursor as $document) {
    echo "Name: " . $document["name"] . "\n";
    echo "Age: " . $document["age"] . "\n";
    echo "Email: " . $document["email"] . "\n";
    echo "---------------------\n";
}
?>
