<?php

include "banco01.php";


$id = isset($_GET['id']) && trim($_GET['id']) ? trim($_GET['id']) : null;

if ($id) {
    $del="DELETE FROM funcionario WHERE id=$id";

    mysqli_query($conm,$del);
    header("location:/sistemabb/sistema/dashboard.php");
        close();
}







?>	