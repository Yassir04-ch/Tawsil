<?php
require_once 'src/Entity/User.php';
require_once 'src/Repository/UserRepository.php';
require_once 'src/Service/AuthService.php';
$userrepo = new UserRepository();
$logout = new AuthService($userrepo);

$logout->logout();