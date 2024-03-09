<?php

$pdo = new PDO("mysql:host=db;dbname=mydb", 'admin', 'password');

$sql = 'INSERT INTO test_table(name, age, profession) VALUES(:name, :age, :profession)';

$statement = $pdo->prepare($sql);

$statement->execute([
    ':name' => "Raffian",
    ':age' => 28,
    ':profession' => "Machinist",
]);

echo "A row has been successfully inserted"

?>