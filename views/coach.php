<?php ob_start(); ?>


<header>
  <h1 class="title text-center">Coachs</h1>
</header>
<div class="bg-dark">
  <div style="margin-bottom:25rem;"class="container mt-5 bg-dark">
    <div class="row">
      <div class="col-md-4">
        <img style="width:100%;"src="<?php echo $coach['photo']; ?>"  alt="teamLogo">

      </div>
      <div class="col-md-8">
        <table class="table table-hover table-dark mt-5 ">
          <tbody>
            <tr>
              <th scope="row">Coach Name:</th>
              <td><?php echo $coach['name']; ?></td>
            </tr>
            <tr>
              <th scope="row">Birthday Place:</th>
              <td colspan="2"><?php echo $coach['birthday_place']; ?></td>
            </tr>
            <tr>
              <th scope="row">Birthday Date:</th>
              <td><?php echo $coach['birthday_date']; ?></td>
            </tr>
            <tr>
              <th scope="row">Link:</th>
              <td colspan="2"><a href="<?php echo $coach['link']; ?>">Link</a></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


<?php $content = ob_get_clean(); ?>
<?php require('public/index.php'); ?>
