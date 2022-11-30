<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("05.07 - PDOStatement e bind modes");

require __DIR__ . "/source/autoload.php";

use Source\Database\Connect;

/**
 * [ prepare ] http://php.net/manual/pt_BR/pdo.prepare.php
 */
fullStackPHPClassSession("prepared statement", __LINE__);

//$search = filter_input(INPUT_GET, "f");

$stmt = Connect::getInstance()->prepare("SELECT * FROM users LIMIT 1");
$stmt->execute();

var_dump(
    $stmt,
    $stmt->rowCount(),
    $stmt->columnCount(),
    $stmt->fetch()    
);

/*
 * [ bind value ] http://php.net/manual/pt_BR/pdostatement.bindvalue.php
 *
 */
fullStackPHPClassSession("stmt bind value", __LINE__);

/**$stmt = Connect::getInstance()->prepare("SELECT * FROM users WHERE id = :id");
$stmt->bindValue(":id", 50, PDO::PARAM_INT);
$stmt->execute();

var_dump($stmt->fetch());
 * 
 */

$stmt = Connect::getInstance()->prepare("
        INSERT INTO users (first_name, last_name)
        VALUE(?, ?)
 ");

$stmt->bindValue(1, 'Gustavo', PDO::PARAM_STR);
$stmt->bindValue(2, 'Web', PDO::PARAM_STR);
$stmt->execute();

var_dump($stmt->rowCount(), Connect::getInstance()->lastInsertId());



$stmt = Connect::getInstance()->prepare("
        INSERT INTO users (first_name, last_name)
        VALUE(:first_name, :last_name)
 ");

$nome = "Andre";
$sobrenome = "Luiz";
$stmt->bindValue("first_name", $nome, PDO::PARAM_STR);
$stmt->bindValue("last_name", $sobrenome, PDO::PARAM_STR);

$stmt->execute();
var_dump($stmt->rowCount());

/*
 * [ bind param ] http://php.net/manual/pt_BR/pdostatement.bindparam.php
 */
fullStackPHPClassSession("stmt bind param", __LINE__);

$stmt = Connect::getInstance()->prepare("
        INSERT INTO users (first_name, last_name)
        VALUE(:first_name, :last_name)
 ");

$firstName = "Joao";
$lastName = "Paulo";
$stmt->bindParam("first_name", $firstName, PDO::PARAM_STR);
$stmt->bindParam("last_name", $lastName, PDO::PARAM_STR);

$stmt->execute();
var_dump($stmt->rowCount());


/*
 * [ execute ] http://php.net/manual/pt_BR/pdostatement.execute.php
 */
fullStackPHPClassSession("stmt execute array", __LINE__);

$stmt = Connect::getInstance()->prepare("
        INSERT INTO users (first_name, last_name)
        VALUE(:first_name, :last_name)
 ");

$user =[
    "first_name" => "Maria",
    "last_name" => "Aparecida"
];

$stmt->execute($user);
var_dump($stmt->rowCount());

/*
 * [ bind column ] http://php.net/manual/en/pdostatement.bindcolumn.php
 */
fullStackPHPClassSession("bind column", __LINE__);

$stmt = Connect::getInstance()->prepare("SELECT * FROM users LIMIT 3");
$stmt->execute();

$stmt->bindColumn("first_name", $name);
$stmt->bindColumn("email", $email);

while($user = $stmt->fetch()){
    var_dump($user);
    echo "O email de {$name} é {$email}";
}
