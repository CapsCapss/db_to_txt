<?php

    require "database/connect.php";

    include_once "database/query.php";

    $queries = new Queries();
    $d = $queries->getData();

    if(isset($_POST["submit"]))
        $queries->create($_FILES['file']['tmp_name']);


?>