<!DOCTYPE html>
<html lang="fr_FR">
  <head>
    <meta charset="utf-8">
    <title>Portfolio</title>
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Lato:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <header>
      <nav class="navbar fixed-top navbar-light bg-light">
        <?php
        $locale = 'french';
        if (!empty($_GET['locale'])) {
          $locale = $_GET['locale'];
        }
        $filetrad = "i18n/$locale.php";
        require_once $filetrad;
        ?>
        <ul class="list-no-style flex-container">
          <li><a class="navbar-brand link-no-style primary-text-color" data-header="work" href="#work"><?= $i18n['templates']['head']['work'] ?></a></li>
          <li><a class="navbar-brand link-no-style primary-text-color" data-header="skill" href="#skills"><?= $i18n['templates']['head']['skill'] ?></a></li>
          <li><a class="navbar-brand link-no-style primary-text-color" href="#contact"><?= $i18n['templates']['head']['contact'] ?></a></li>
          <li>
            <form action="index.php" method="GET">
              <input type="submit" name="locale" value="english">
              <input type="submit" name="locale" value="french">
            </form>
          </li>
        </ul>
      </nav>
    </header>
    <main>
