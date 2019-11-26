<?php
require('models/coachs.php');

function showCoachs() {
  $coachs = listCoachs();
  require('views/coachs.php');
}

function getCoach(int $id){
  $coach = listCoach($id, $_GET['id']);
  require('views/coach.php');
}
 ?>
