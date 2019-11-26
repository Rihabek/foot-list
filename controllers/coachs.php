<?php
require('models/coachs.php');

function showCoachs() {
  $coachs = listCoachs();
  require('views/coachs.php');
}
 ?>
