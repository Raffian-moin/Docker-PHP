<?php

$pdo = new PDO("mysql:host=db;dbname=mydb", 'admin', 'password');

$sql = 'INSERT INTO test_table(name) VALUES(:name)';

$statement = $pdo->prepare($sql);

$statement->execute([
    ':name' => "Moin",
]);

echo "A row has been successfully inserted"

?>