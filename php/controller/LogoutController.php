<?php
include '../utils/Functions.php';
session_start();
session_destroy();
session_write_close();
setcookie(session_name(),'',0,'/');
session_regenerate_id(true);
unset($_SESSION['user']);
redirect('index', 'Você saiu com sucesso.:~::~:info');