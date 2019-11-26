<?php

$route = isset($_GET['route']) ? $_GET['route'] : 'team';

if ($route === 'team') {
  require('controllers/team.php');
  showTeams();
} else if ($route === 'coachs') {
  require('controllers/coachs.php');
  showCoachs();
} else if ($route === 'team' && isset ($_GET['id'])) {
  require('controllers/team.php');
  showTeam((int) $_GET['id']);
} else {
  header('Location: ./?route=team');
}
