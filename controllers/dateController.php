<?php
    require_once __DIR__."/../core/database.php";

    //vai pegar as duas ids de inicio e fim para fazer a pesquisa no banco de dados
    $inicial=$_POST['inicial'];

    $final=$_POST["final"];

    /*
    echo $inicial."<br>";
    echo $final."<br>";*/

    if (empty ($final) ) {
    $list=$pdo->query("SELECT 
    i.film_id,
    i.store_id,
    i.last_update,
    f.film_id,
    f.title
    FROM
    inventory AS i INNER JOIN film as f ON i.film_id = f.film_id
    WHERE i.last_update LIKE '{$inicial}%' ORDER BY i.last_update ASC ");
    
    $list->execute();
    
    // vai fazer a listagem de tudo
    $data=$list->fetchAll();
    
    require_once  __DIR__."/../views/dash.php";
    }

    else { 
    $list=$pdo->query("SELECT 
    i.film_id,
    i.store_id,
    i.last_update,
    f.film_id,
    f.title
    FROM
    inventory AS i INNER JOIN film as f ON i.film_id = f.film_id
    WHERE i.last_update BETWEEN '{$inicial}' AND '{$final}' ORDER BY i.last_update ASC");

    $list->execute();

    // vai fazer a listagem de tudo
    $data=$list->fetchAll();

    require_once  __DIR__."/../views/dash.php";
    }