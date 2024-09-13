<?php

require_once('SessionManager.php');
require_once('User.php');

SessionManager::startSession();

SessionManager::destroySession();

echo "Vous êtes bien déconnecté";
