
<ul class="grid cf">
  <?php foreach(page('home')->children()->visible() as $project): ?>
  <li>
    <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>
    <p class="hosted"><?php echo $project->sitename()->html() ?></p>
    <a href="<?php echo $project->link() ?>">
      <img src="<?php echo $image->url() ?>" alt="<?php echo $project->title()->html() ?>" >
    </a>
    <?php endif ?>
    <p><a href="<?php echo $project->link() ?>"><?php echo $project->title()->html() ?></a></p>
  </li>
  <?php endforeach ?>
</ul>