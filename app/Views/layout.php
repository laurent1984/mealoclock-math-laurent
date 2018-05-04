<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?=$this->e($title)?></title>
    <link rel="stylesheet" href="<?= $basePath ?>assets/css/reset.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/fontawesome.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/brands.css">
    <link rel="stylesheet" href="<?= $basePath ?>assets/css/style.css">
  </head>
  <body>
    <header>
        <?=$this->insert('partials/nav')?>
    </header>
    <main>
        <?=$this->section('content')?>
    </main>
    <footer>
        Copyright &copy; Oclock 2018
    </footer>
  </body>
</html>
