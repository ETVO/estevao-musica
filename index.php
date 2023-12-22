<?php

include './integrate.php';
$music = get_data('music');
$songs = filter_blocks($music['songs']);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Estevão - Antes de Ir</title>
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rethink+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="assets/fonts/bootstrap-icons/bootstrap-icons.css">
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="assets/css/main.css">

  <link rel="shortcut icon" href="assets/img/favicon.webp" type="image/webp">
</head>

<body>

  <a href="#indice" class="back-to-top" id="backToTop">Voltar ao topo</a>

  <div class="container" id="topo">
    <div class="apresenta">
      <!-- <h1>Estevão</h1> -->
      <h1 aria-label="Estevão">E<span>stevão</span></h1>
      <p>Faço música com amor e carinho <br><i>I make music with love and kindness</i></p>
    </div>


    <div class="conhece">
      <p>Conheça o meu primeiro álbum: <br><i>Discover my first album:</i></p>
      <img src="assets/img/drips-no-bg.png" class="waves left">
      <img src="assets/img/cover-art-antes-de-ir-V6.png" class="album-cover" alt="" id="indice">
      <img src="assets/img/drips-no-bg.png" class="waves right">
      <h1>Antes de Ir - 2023</h1>

      <div class="d-flex">
        <div class="streaming">
          <!-- <p>Ouça "Antes de Ir" <i>Stream "Antes de Ir"</i></p> -->
          <div class="links">
            <a href=""><img src="assets/img/Spotify_icon.svg" alt="Save Antes de Ir at Spotify" title="Spotify"></a>
            <a href=""><img src="assets/img/Apple_Music_icon.svg" alt="Save Antes de Ir at Apple Music" title="Apple Music"></a>
            <a href=""><img src="assets/img/Youtube_Music_icon.svg" alt="Save Antes de Ir at YouTube Music" title="YouTube Music"></a>
            <a href=""><img src="assets/img/Deezer_icon.svg" alt="Save Antes de Ir at Deezer" title="Deezer"></a>
          </div>
        </div>
      </div>

      <p>Músicas <i>Songs</i></p>
    </div>

    <?php
    $song_list = [
      'Fonte Grande',
      'Já Foi',
      'Se É',
      'Que Seja Melhor Assim',
      'In My Mind',
      'Write Me a Song',
      'You Gotta Watch',
      'In The State of The Things',
      'Where Have You Been',
      'Antes de Ir / Abstracionista',
    ] ?>

    <div class="d-flex">
      <ol class="index">
        <?php foreach ($song_list as $song) :
          $href = str_replace(' ', '-', strtolower($song));
          $href = str_replace('/', '&', $href);
          $href = str_replace('á', 'a', $href);
          $href = str_replace('é', 'e', $href);
        ?>
          <li><a href="#<?= $href ?>"><?= $song ?></a></li>
        <?php endforeach; ?>
      </ol>
    </div>

    <ol class="index floating" id="floatingIndex">
      <?php foreach ($song_list as $song) :
        $href = str_replace(' ', '-', strtolower($song));
        $href = str_replace('/', '&', $href);
        $href = str_replace('á', 'a', $href);
        $href = str_replace('é', 'e', $href);
      ?>
        <li><a href="#<?= $href ?>"><?= $song ?></a></li>
      <?php endforeach; ?>
    </ol>


    <div class="contact">
      <a class="btn" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
        Fale comigo <i>Get in touch</i>
      </a>
      <div class="collapse" id="collapseExample">
        <div class="contact-body">
          (e-mail) <a href="mailto:estevao@etvo.me" target="_blank">estevao@etvo.me</a>(instagram) <a href="https://instagram.com/estevao.music" target="_blank">@estevao.music</a>
        </div>
      </div>
    </div>


    <ol class="musicas">
      <?php $n = 0;
      foreach ($songs as $song) :
        $title = $song['title'];
        $lyrics = $song['lyrics'];
        $images = $song['images'];

        $spotify = $song['spotify'];
        $apple = $song['apple'];
        $youtube = $song['youtube'];
        $deezer = $song['deezer'];

        $id = str_replace(' ', '-', strtolower($title));
        $id = str_replace('/', '&', $id);
        $id = str_replace('á', 'a', $id);
        $id = str_replace('é', 'e', $id);

        $audio = str_replace('/', '-', $title);

        $n++;

      ?>
        <li id="<?= $id; ?>">
          <div class="title" id="<?= $n ?>">
            <h2><?= $title; ?></h2>
          </div>
          <div class="row">
            <div class="col-12 col-lg-6">
              <audio controls controlslist="noplaybackrate">
                <source src="assets/audio/<?= $audio; ?>.wav" type="audio/wav" title="Ouça Fonte Grande">
              </audio>

              <div class="streaming">
                <p>Ouça "<?= $title; ?>" <i>Stream "<?= $title; ?>"</i></p>
                <div class="links">
                  <a href="<?= $spotify; ?>"><img src="assets/img/Spotify_icon.svg" alt="Save <?= $title; ?> at Spotify" title="Spotify"></a>
                  <a href="<?= $apple; ?>"><img src="assets/img/Apple_Music_icon.svg" alt="Save <?= $title; ?> at Apple Music" title="Apple Music"></a>
                  <a href="<?= $youtube; ?>"><img src="assets/img/Youtube_Music_icon.svg" alt="Save <?= $title; ?> at YouTube Music" title="YouTube Music"></a>
                  <a href="<?= $deezer; ?>"><img src="assets/img/Deezer_icon.svg" alt="Save <?= $title; ?> at Deezer" title="Deezer"></a>
                </div>
              </div>
              <h3>Letra <i>Lyrics</i></h3>
              <!-- <div class="accordion" id="accordion_<?= $id ?>">
                <div class="accordion-item">
                  <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_<?= $id ?>" aria-expanded="false" aria-controls="collapse_<?= $id ?>">
                      Letra <i>Lyrics</i>
                    </button>
                  </h3>
                  <div id="collapse_<?= $id ?>" class="accordion-collapse collapse" data-bs-parent="#accordion_<?= $id ?>">
                    <div class="accordion-body">
                      </div>
                    </div>
                  </div>
                </div> -->
              <pre><?= $lyrics; ?></pre>
              <p class="copyright">2023 &copy; Estevão Rolim</p>


            </div>
            <div class="col-12 col-lg-6 images-col">
              <div class="images">
                <?php foreach ($images as $image) : ?>
                  <img src="<?= $image['src'] ?>" class="" alt="">
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </li>
      <?php endforeach; ?>
    </ol>
  </div>

</body>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
<script src="assets/js/main.js"></script>

</html>