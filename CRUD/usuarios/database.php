<?php

define("HOST", "127.0.0.1");
define("USER", "root");
define("PASS", "");
define("DB", "user_cadastro");

$conn = mysqli_connect(HOST, USER, PASS, DB) or die("Erro. Não conectado ao banco de dados")

?>