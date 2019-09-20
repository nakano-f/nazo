<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>test</title>
    <link rel="stylesheet" href="./assets/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/fontawesome-free-5.11.1-web/css/all.css">
       <?php
      $css = return_css();
      if( ! explode( $css ) ) {
        
        foreach ($css as $value) {
          ?>
          <link rel="stylesheet" href="<?=$value?>">
          <?php
        }
      }
    ?>
  </head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">To solve a mystery</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span style="color: white"><i class="fas fa-bars"></i></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    </form>
  </div>
</nav>