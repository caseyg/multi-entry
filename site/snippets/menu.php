<nav role="navigation">

  <ul class="menu cf button-group filter-button-group">
    <?php foreach($pages->visible() as $p): ?>
    <li>
      <a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>

      <?php if($p->hasVisibleChildren()): ?>
      <ul class="submenu">
        <?php foreach($p->children()->visible() as $p): ?>
        <li>
          <a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
        </li>
        <?php endforeach ?>
      </ul>
      <?php endif ?>

    </li>
    <?php endforeach ?>
    <li><a href="/#filter=*" data-filter="*">all</a></li>
    <li><a href="/#filter=.games" data-filter=".games">games</a></li>
    <li><a href="/#filter=.fashion" data-filter=".fashion">fashion</a></li>
    <li><a href="/#filter=.music" data-filter=".music">music</a></li>
    <li><a href="/#filter=.tech" data-filter=".tech">tech</a></li>
    <li><a href="/#filter=.internets" data-filter=".internets">internets</a></li>
    <li><a href="/#filter=.art" data-filter=".internets">art</a></li>
  </ul>

</nav>
