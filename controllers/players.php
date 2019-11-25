<?php
require('models/players.php');

function showPlayers() {
  $players = listPLayers();
  require('views/players.php');
}
 ?>
