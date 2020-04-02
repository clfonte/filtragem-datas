<?php
require_once __DIR__."/../core/database.php";

$list=$pdo->query("SELECT 
    i.film_id,
    i.store_id,
    i.last_update,
    f.film_id,
    f.title
    FROM
    inventory AS i INNER JOIN film as f ON i.film_id = f.film_id");

    $list->execute();

    // vai fazer a listagem de tudo
    $data=$list->fetchAll();


require_once  __DIR__."/../views/dash.php";