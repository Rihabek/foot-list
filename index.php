<?php

$route = isset($_GET['route']) ? $_GET['route'] : 'teams';

if ($route === 'teams') {
  require('controllers/team.php');
  showTeams();
}else {
  switch ((string) $_GET['path']) {
    case 'players':
    require('controllers/players.php');
    if (!isset($_GET['action']) || !$_GET['action']) {
      showPlayers();
  } else {
    header('Location: ./?path=team');
  }
}
