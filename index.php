<?php

$route = isset($_GET['route']) ? $_GET['route'] : 'teams';

if ($route === 'teams') {
  require('controllers/team.php');
  showTeams();
} else if ($route === 'coachs') {
  require('controllers/coachs.php');
  showCoachs();
} else if ($route === 'team' && isset ($_GET['id'])) {
  require('controllers/team.php');
  showTeam((int) $_GET['id']);
} else if ($route === 'coach' && isset ($_GET['id'])) {
  require('controllers/coachs.php');
  getCoach((int) $_GET['id']);
} else {
  header('Location: ./?route=teams');
}
