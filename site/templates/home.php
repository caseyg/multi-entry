<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="text">
      <?php echo $site->description()->html() ?>
    </div>

    <?php snippet('projects') ?>

  </main>

<?php snippet('footer') ?>