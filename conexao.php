<?php
define('HOST', '10.0.1.39');
define('USUARIO', 'login');
define('SENHA', '123456');
define('DB', 'login');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');