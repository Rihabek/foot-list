<?php ob_start(); ?>

<header >
  <h1 class="title text-center">Coachs</h1>
</header>

<div style="margin-bottom:25rem;"class="container mt-5 bg-dark">
  <div class="row">
    <div class="col-md-4">
      <img src="<?php echo $team['logo']; ?>"  alt="teamLogo">
      <img src="<?php echo $team['photo']; ?>"  alt="teamLogo">

    </div>
    <div class="col-md-8">
      <table class="table table-hover table-dark">
        <tbody>
          <tr>
            <th scope="row">Team Name:</th>
            <td><?php echo $team['team_name']; ?></td>
          </tr>
          <tr>
            <th scope="row">Coach Name:</th>
            <td><?php echo $team['name']; ?></td>
          </tr>
          <tr>
            <th scope="row">Nationality:</th>
            <td colspan="2"><?php echo $team['nationality']; ?></td>
          </tr>
          <tr>
            <th scope="row">birthday Place:</th>
            <td colspan="2"><?php echo $team['birthday_place']; ?></td>
          </tr>
          <tr>
            <th scope="row">Link:</th>
            <td colspan="2"><a href="<?php echo $team['link']; ?>">Link</a></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('public/index.php'); ?>
