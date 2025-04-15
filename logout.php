<?php

require_once 'classes/Sessao.php';
Sessao::destruir();
header('Location: login.php'); // chama a função destruir sessão e volta para o login.
exit();

?>