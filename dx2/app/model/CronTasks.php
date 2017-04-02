<?php

// namespace App\Model;

/* use Nette,
    Nette\Database\Connection,
    Tracy\Debugger; */

/* class CronTasks {

    /**
     * @cronner-task Deletes all empty carts older than 2 days, once every week
     * @cronner-period 1 week
     * @cronner-days weekend
     */
    /* public function deleteOldCarts() {

        $dns = "mysql:host=127.0.0.1;port=3306;dbname=ut_koupito";
        $user = "root";
        $pass = "root";
        $connection = new Connection($dns, $user, $pass);
        $ret = $connection->query("
            SELECT *
            FROM cart A
            LEFT JOIN cart_item B
            ON A.id = B.cart_id
            WHERE B.id IS NULL AND DATEDIFF(NOW(), A.created_at) > 0;
        ");

        dump($ret);
    }

} */

$sql = "SELECT *
            FROM cart A
            LEFT JOIN cart_item B
            ON A.id = B.cart_id
            WHERE B.id IS NULL AND DATEDIFF(NOW(), A.created_at) > 0;";
$dns = "mysql:host=127.0.0.1;dbname=ut_koupito";š
$user = "root";
$pass = "root";

try {
    $connection = new PDO($dns, $user, $pass);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $tmp = $connection->query($sql);
    var_dump($tmp->fetchAll());

} catch (PDOException $e) {
    echo $e->getMessage() , "\n";
}

$connection = null;
die();