<?php

$route = isset($_GET['route']) ? $_GET['route'] : 'teams';

if ($route === 'teams') {
  require('controllers/team.php');
  showTeams();
} else if ($route === 'players') {
  require('controllers/players.php');
  showPlayers();
} else {
  header('Location: ./?path=team');
}
