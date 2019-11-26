<?php ob_start(); ?>


<header>
  <h1 class="title text-center">Liste des TEAMS</h1>
</header>
<div class="container">
  <div class="row">
    <?php foreach ($teams as $key => $value) { ?>
      <div class="col-md-4">
        <div class="card-deck text-center">
            <div class="card">
              <img src="<?php echo $value['logo']; ?>" class="card-img-top" alt="teamLogo">
              <div class="card-body">
                <h5 class="card-title">
                  <a href="?route=team&id=<?php echo $value['id'] ; ?>"><?php echo $value['name']; ?></a>
                </h5>
                <p class="card-text"><?php echo $value['short_name']; ?></p>
                <a href="<?php echo $value['website']; ?>">Link</a>
              </div>
            </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>



<?php $content = ob_get_clean(); ?>
<?php require('public/index.php'); ?>
