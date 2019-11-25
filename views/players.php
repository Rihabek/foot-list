<?php ob_start(); ?>


<header>
  <h1 class="title text-center">Players</h1>
</header>
<div class="container">
  <div class="row">
    <?php foreach ($players as $key => $value) { ?>
      <div class="col-md-2">
        <div class="card-deck text-center">
            <div class="card">
              <img src="<?php echo $value['photo']; ?>" class="card-img-top" alt="teamLogo">
              <div class="card-body">
                <h5 class="card-title"><?php echo $value['name']; ?></h5>
                <p class="card-text"><?php echo $value['nationality']; ?></p>
                <a href="<?php echo $value['link']; ?>">Link</a>
              </div>
            </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>



<?php $content = ob_get_clean(); ?>
<?php require('public/index.php'); ?>
