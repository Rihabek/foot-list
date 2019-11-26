<?php ob_start(); ?>

<header >
  <h1 class="title text-center"><?php echo $team['name']; ?></h1>
</header>

<div style="margin-bottom:25rem;"class="container mt-5 bg-dark">
  <div class="row">
    <div class="col-md-4">
      <img style="width:100%;"src="<?php echo $team['logo']; ?>"  alt="teamLogo">

    </div>
    <div class="col-md-8">
      <table class="table table-hover table-dark mt-5 ">
        <tbody>
          <tr>
            <th scope="row">Team Name:</th>
            <td><?php echo $team['name']; ?></td>
          </tr>
          <tr>
            <th scope="row">Adress:</th>
            <td colspan="2"><?php echo $team['adress']; ?></td>
          </tr>
          <tr>
            <th scope="row">President:</th>
            <td><?php echo $team['president']; ?></td>
          </tr>
          <tr>
            <th scope="row">fndation:</th>
            <td colspan="2"><?php echo $team['fundation_date']; ?></td>
          </tr>
          <tr>
            <th scope="row">website:</th>
            <td colspan="2"><a href="<?php echo $team['website']; ?>">Website</a></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('public/index.php'); ?>
