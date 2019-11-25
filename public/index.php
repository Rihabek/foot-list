
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Team List</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand font-weight-bold" id="active" href="#haut">FootBall</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul id="title" class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="?route=footbal">FootBall</a>
                    </li>
                    <li class="nav-item ">
                      <a class="nav-link" href="?route=teamList" id="teamList" role="button" >
                        Team
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="?route=players">Players</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <?php echo $content; ?>
  </body>
</html>
