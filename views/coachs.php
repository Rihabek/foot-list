<?php ob_start(); ?>


<header>
  <h1 class="title text-center">Coachs</h1>
</header>
<div class="container">
  <div class="row">
    <?php foreach ($coachs as $key => $value) { ?>
      <div class="col-md-4">
        <div class="card-deck text-center">
            <div class="card">
              <img src="<?php echo $value['photo']; ?>" class="card-img-top" alt="teamLogo">
              <div class="card-body">
                <h5 class="card-title"><?php echo $value['name']; ?></h5>
                <button type="button" name="button"><a href="?route=coach&id=<?php echo $value['id'] ; ?>">blavlsdlsq</a>
                </button>
              </div>
            </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>



<?php $content = ob_get_clean(); ?>
<?php require('public/index.php'); ?>
<!-- <p class="card-text"><?php echo $value['nationality']; ?></p>
<a href="<?php echo $value['link']; ?>">Link</a> -->
